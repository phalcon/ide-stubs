<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Cache\Adapter\AdapterInterface as CacheAdapterInterface;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\DiInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Http\RequestInterface;
use Phalcon\Mvc\Router\Exception;
use Phalcon\Mvc\Router\Exceptions\BeforeMatchNotCallable;
use Phalcon\Mvc\Router\Exceptions\ConfigKeyMustBeArray;
use Phalcon\Mvc\Router\Exceptions\EmptyGroupOfRoutes;
use Phalcon\Mvc\Router\Exceptions\GroupRoutesMustBeArray;
use Phalcon\Mvc\Router\Exceptions\InvalidConfigSource;
use Phalcon\Mvc\Router\Exceptions\InvalidNotFoundPaths;
use Phalcon\Mvc\Router\Exceptions\InvalidRoutePosition;
use Phalcon\Mvc\Router\Exceptions\MissingGroupRouteKey;
use Phalcon\Mvc\Router\Exceptions\MissingRouteConfigKey;
use Phalcon\Mvc\Router\Exceptions\RequestServiceUnavailable;
use Phalcon\Mvc\Router\Exceptions\UnknownHttpMethod;
use Phalcon\Mvc\Router\Exceptions\WrongPathsKey;
use Phalcon\Mvc\Router\Group;
use Phalcon\Mvc\Router\GroupInterface;
use Phalcon\Mvc\Router\Route;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Traits\Php\FileTrait;

/**
 * Phalcon\Mvc\Router is the standard framework router. Routing is the
 * process of taking a URI endpoint (that part of the URI which comes after the
 * base URL) and decomposing it into parameters to determine which module,
 * controller, and action of that controller should receive the request
 *
 * ```php
 * use Phalcon\Mvc\Router;
 *
 * $router = new Router();
 *
 * $router->add(
 *     "/documentation/{chapter}/{name}\.{type:[a-z]+}",
 *     [
 *         "controller" => "documentation",
 *         "action"     => "show",
 *     ]
 * );
 *
 * $router->handle(
 *     "/documentation/1/examples.html"
 * );
 *
 * echo $router->getControllerName();
 * ```
 *
 * @phpstan-import-type mvc_router_defaults from MvcTypes
 * @phpstan-import-type mvc_router_http_methods from MvcTypes
 * @phpstan-import-type mvc_router_config_group from MvcTypes
 * @phpstan-import-type mvc_router_config_route from MvcTypes
 * @phpstan-import-type mvc_router_dump from MvcTypes
 * @phpstan-import-type mvc_router_dumped_route from MvcTypes
 * @phpstan-import-type mvc_router_hostname_buckets from MvcTypes
 * @phpstan-import-type mvc_router_index_buckets from MvcTypes
 * @phpstan-import-type mvc_router_matches from MvcTypes
 * @phpstan-import-type mvc_router_method_buckets from MvcTypes
 * @phpstan-import-type mvc_router_params from MvcTypes
 * @phpstan-import-type mvc_router_paths from MvcTypes
 * @phpstan-import-type mvc_router_regex_chunks from MvcTypes
 * @phpstan-import-type mvc_router_regex_disabled from MvcTypes
 * @phpstan-import-type mvc_router_regex_mark_map from MvcTypes
 * @phpstan-import-type mvc_router_route_meta from MvcTypes
 * @phpstan-import-type mvc_router_shadow_buckets from MvcTypes
 * @phpstan-import-type mvc_router_static_buckets from MvcTypes
 */
class Router extends AbstractInjectionAware implements \Phalcon\Mvc\RouterInterface, \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Traits\Php\FileTrait;

    /**
     * @var int
     */
    const int POSITION_FIRST = 0;

    /**
     * @var int
     */
    const int POSITION_LAST = 1;

    /**
     * Number of alternatives per combined-regex chunk. Empirically derived
     * (FastRoute uses ~10) - keeps each chunk below PCRE's optimizer cliff.
     *
     * @var int
     */
    const int REGEX_CHUNK_SIZE = 10;

    /**
     * @var int
     */
    const int URI_SOURCE_GET_URL = 0;

    /**
     * @var int
     */
    const int URI_SOURCE_SERVER_REQUEST_URI = 1;

    protected string $action = '';

    /**
     * Pre-merged per-method candidate buckets in attach order. For each HTTP
     * method seen on any registered route, the bucket contains the
     * method-specific routes followed by the "" (no-constraint) routes.
     * The "" key itself holds only the no-constraint routes - used when the
     * request method has no specific bucket.
     *
     * Built in rebuildMethodIndex(); consumed by handle() in reverse.
     *
     * @phpstan-var mvc_router_method_buckets
     */
    protected array $candidatesByMethod = [];

    /**
     * Combined PCRE pattern per method bucket (chunked list of strings).
     * Each chunk uses (?|...) branch reset and (:N) mark labels. Built
     * only when the bucket has no hostname routes and all patterns are
     * the standard `#^...$#u` shape.
     *
     * @phpstan-var mvc_router_regex_chunks
     */
    protected array $combinedRegexByMethod = [];

    /**
     * Boolean per method bucket: true when the combined regex cannot be
     * built (hostname route present, exotic pattern shape, etc.).
     *
     * @phpstan-var mvc_router_regex_disabled
     */
    protected array $combinedRegexDisabled = [];

    /**
     * Map from MARK label back to the route index in
     * candidatesByMethod[method]. One per chunk.
     *
     *   combinedRegexMarkMap[method][chunkIdx][markLabel] = routeIdx
     *
     * @phpstan-var mvc_router_regex_mark_map
     */
    protected array $combinedRegexMarkMap = [];

    protected string $controller = '';

    protected string $defaultAction = '';

    protected string $defaultController = '';

    protected string $defaultModule = '';

    protected string $defaultNamespace = '';

    /**
     * @phpstan-var mvc_router_params
     */
    protected array $defaultParams = [];

    protected ?\Phalcon\Events\ManagerInterface $eventsManager = null;

    /**
     * Per-method buckets of routes with hostname constraints, grouped by
     * raw hostname string. Routes are referenced by their index into
     * candidatesByMethod[method]. Built in rebuildMethodIndex().
     *
     * Shape: hostnameByMethod[method][hostname] = list of route indices.
     *
     * @phpstan-var mvc_router_hostname_buckets
     */
    protected array $hostnameByMethod = [];

    /**
     * Per-method indices of routes without a hostname constraint, in
     * attach order.
     *
     * Shape: hostnameLessByMethod[method] = list of route indices into
     * candidatesByMethod[method].
     *
     * @phpstan-var mvc_router_index_buckets
     */
    protected array $hostnameLessByMethod = [];

    /**
     * @phpstan-var array<array-key, int|string>
     */
    protected array $keyRouteIds = [];

    /**
     * @phpstan-var array<string, int|string>
     */
    protected array $keyRouteNames = [];

    protected ?\Phalcon\Mvc\Router\RouteInterface $matchedRoute = null;

    /**
     * @phpstan-var mvc_router_matches
     */
    protected array $matches = [];

    /**
     * @phpstan-var mvc_router_method_buckets
     */
    protected array $methodRoutes = [];

    protected bool $methodRoutesDirty = true;

    protected string $module = '';

    protected string $namespaceName = '';

    /**
     * @var array|string|null
     *
     * @phpstan-var mvc_router_paths|string|null
     */
    protected $notFoundPaths = null;

    /**
     * @phpstan-var mvc_router_params
     */
    protected array $params = [];

    /**
     * Lazy-write cache target set by useCache(). When non-null, handle()
     * writes buildDispatcherDump() to this cache after a successful
     * rebuild on cache miss, then clears the property to skip subsequent
     * writes.
     */
    protected ?\Phalcon\Cache\Adapter\AdapterInterface $pendingCache = null;

    protected string $pendingCacheKey = '';

    protected bool $removeExtraSlashes = false;

    /**
     * Single-source per-route metadata cache. One entry per route, keyed
     * by the route's intrinsic id. Replaces the previous per-method-bucket
     * replication of metadata arrays. Built once in rebuildMethodIndex().
     *
     * Shape: routeMeta[routeId] = [
     *     "pattern":     string,        // compiled pattern
     *     "isRegex":     bool,
     *     "hostname":    string|null,
     *     "hostRegex":   string|null,
     *     "beforeMatch": callable|null
     *   ]
     *
     * @phpstan-var array<string, mvc_router_route_meta>
     */
    protected array $routeMeta = [];

    /**
     * @phpstan-var list<RouteInterface>
     */
    protected array $routes = [];

    /**
     * Static-route hash, populated by rebuildMethodIndex(). For each method
     * bucket (including ""), maps URI => list of routes whose compiled
     * pattern is a literal string equal to that URI.
     *
     * @phpstan-var mvc_router_static_buckets
     */
    protected array $staticByMethod = [];

    /**
     * Shadow-detection map. If staticShadowedByMethod[method][uri] is set,
     * the static URI in that bucket is shadowed by a later-attached regex
     * route - the fast path MUST NOT be used; fall through to the dynamic
     * loop so the regex wins (reverse-iteration semantics).
     *
     * @phpstan-var mvc_router_shadow_buckets
     */
    protected array $staticShadowedByMethod = [];

    /**
     * @var int
     */
    protected $uriSource = self::URI_SOURCE_GET_URL;

    protected bool $wasMatched = false;

    /**
     * Phalcon\Mvc\Router constructor
     *
     * @param bool $defaultRoutes
     */
    public function __construct(bool $defaultRoutes = true)
    {
    }

    /**
     * Adds a route to the router without any HTTP constraint
     *
     * ```php
     * use Phalcon\Mvc\Router;
     *
     * $router->add("/about", "About::index");
     *
     * $router->add(
     *     "/about",
     *     "About::index",
     *     ["GET", "POST"]
     * );
     *
     * $router->add(
     *     "/about",
     *     "About::index",
     *     ["GET", "POST"],
     *     Router::POSITION_FIRST
     * );
     * ```
     *
     * @param string            $pattern
     * @param array|string|null $paths = [
     *                                 'module => '',
     *                                 'controller' => '',
     *                                 'action' => '',
     *                                 'namespace' => ''
     *                                 ]
     * @param array|string|null $httpMethods
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is CONNECT
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addConnect(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addDelete(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addGet(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addHead(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addOptions(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addPatch(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addPost(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE
     * (Squid and Varnish support)
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addPurge(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addPut(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is TRACE
     *
     * @param string            $pattern
     * @param array|string|null $paths  = [
     *                                  'module => '',
     *                                  'controller' => '',
     *                                  'action' => '',
     *                                  'namespace' => ''
     *                                  ]
     * @param int               $position
     *
     * @return RouteInterface
     */
    public function addTrace(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Attach Route object to the routes stack.
     *
     * ```php
     * use Phalcon\Mvc\Router;
     * use Phalcon\Mvc\Router\Route;
     *
     * class CustomRoute extends Route {
     *      // ...
     * }
     *
     * $router = new Router();
     *
     * $router->attach(
     *     new CustomRoute("/about", "About::index", ["GET", "HEAD"]),
     *     Router::POSITION_FIRST
     * );
     * ```
     *
     * @param RouteInterface $route
     * @param int            $position
     *
     * @return static
     *
     * @phpstan-return static
     */
    public function attach(\Phalcon\Mvc\Router\RouteInterface $route, int $position = Router::POSITION_LAST): static
    {
    }

    /**
     * Produces a pure-data array describing every piece of state needed
     * to reconstruct this router. The returned array is var_export-able
     * (no objects, no closures). Used by dumpDispatcher() and by
     * Phalcon\Cache integration via useCache().
     *
     * Throws when a route has a Closure beforeMatch or converter - those
     * cannot be cached.
     *
     * @throws \Phalcon\Mvc\Router\Exception
     *
     * @phpstan-return mvc_router_dump
     * @return array
     */
    public function buildDispatcherDump(): array
    {
    }

    /**
     * Removes all the pre-defined routes
     *
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * File-shaped helper around buildDispatcherDump(). Writes the dump as
     * a `<?php return [...];` file, atomically (temp + rename) so concurrent
     * dumps don't corrupt the result.
     *
     * @throws \Phalcon\Mvc\Router\Exception
     * @param string $path
     * @return void
     */
    public function dumpDispatcher(string $path): void
    {
    }

    /**
     * Returns the processed action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Returns the processed controller name
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * Returns an array of default parameters
     *
     * @phpstan-return array<string, mixed>
     * @return array
     */
    public function getDefaults(): array
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
    {
    }

    /**
     * @phpstan-return array<array-key, int|string>
     * @return array
     */
    public function getKeyRouteIds(): array
    {
    }

    /**
     * @phpstan-return array<string, int|string>
     * @return array
     */
    public function getKeyRouteNames(): array
    {
    }

    /**
     * Returns the route that matches the handled URI
     *
     * @return RouteInterface|null
     */
    public function getMatchedRoute(): RouteInterface|null
    {
    }

    /**
     * Returns the sub expressions in the regular expression matched
     *
     * @phpstan-return mvc_router_matches
     * @return array
     */
    public function getMatches(): array
    {
    }

    /**
     * Returns the routes indexed by HTTP method.
     * Routes with no HTTP constraint are stored under the "" key.
     *
     * @phpstan-return mvc_router_method_buckets
     * @return array
     */
    public function getMethodRoutes(): array
    {
    }

    /**
     * Returns the processed module name
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Returns the processed namespace name
     *
     * @return string
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * Returns the processed parameters
     *
     * @phpstan-return mvc_router_params
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Get rewrite info. This info is read from $_GET["_url"].
     * This returns '/' if the rewrite information cannot be read
     *
     * @return string
     */
    public function getRewriteUri(): string
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param mixed $routeId
     *
     * @return RouteInterface|bool
     */
    public function getRouteById($routeId): RouteInterface|bool
    {
    }

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|RouteInterface
     */
    public function getRouteByName(string $name): RouteInterface|bool
    {
    }

    /**
     * Returns all the routes defined in the router
     *
     * @return array
     */
    public function getRoutes(): array
    {
    }

    /**
     * Handles routing information received from the rewrite engine
     *
     * ```php
     * // Passing a URL
     * $router->handle("/posts/edit/1");
     * ```
     *
     * @param string $uri *
     * @return void
     */
    public function handle(string $uri): void
    {
    }

    /**
     * Returns whether controller name should not be mangled
     *
     * @return bool
     */
    public function isExactControllerName(): bool
    {
    }

    /**
     * File-shaped helper around loadDispatcherFromArray(). Includes the
     * file (opcache-friendly) and forwards the return value.
     *
     * @throws \Phalcon\Mvc\Router\Exception
     * @param string $path
     * @return void
     */
    public function loadDispatcher(string $path): void
    {
    }

    /**
     * Inverse of buildDispatcherDump(). Reconstructs every Route from the
     * scalar `routes` entries (preserving subclass and routeId), restores
     * every index, and marks the indexes clean so handle() skips rebuild.
     *
     * @throws \Phalcon\Mvc\Router\Exception
     *
     * @phpstan-param array<string, mixed> $dump
     * @param array $dump
     * @return void
     */
    public function loadDispatcherFromArray(array $dump): void
    {
    }

    /**
     * Loads routes from an array or Phalcon\Config\Config instance.
     *
     * ```php
     * $router->loadFromConfig(
     *     [
     *         'routes' => [
     *             [
     *                 'method'  => 'get',
     *                 'pattern' => '/users',
     *                 'paths'   => 'Users::index',
     *             ],
     *         ],
     *     ]
     * );
     * ```
     *
     * @param array|ConfigInterface $config *
     * @return static
     *
     * @phpstan-return static
     */
    public function loadFromConfig($config): static
    {
    }

    /**
     * Mounts a group of routes in the router
     *
     * @param GroupInterface $group *
     * @return static
     *
     * @phpstan-return static
     */
    public function mount(\Phalcon\Mvc\Router\GroupInterface $group): static
    {
    }

    /**
     * Set a group of paths to be returned when none of the defined routes are
     * matched
     *
     * @param array|string|null $paths *
     * @return static
     *
     * @phpstan-return static
     */
    public function notFound($paths): static
    {
    }

    /**
     * Set whether router must remove the extra slashes in the handled routes
     *
     * @param bool $remove *
     * @return static
     *
     * @phpstan-return static
     */
    public function removeExtraSlashes(bool $remove): static
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName *
     * @return static
     *
     * @phpstan-return static
     */
    public function setDefaultAction(string $actionName): static
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $controllerName *
     * @return static
     *
     * @phpstan-return static
     */
    public function setDefaultController(string $controllerName): static
    {
    }

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName *
     * @return static
     *
     * @phpstan-return static
     */
    public function setDefaultModule(string $moduleName): static
    {
    }

    /**
     * Sets the name of the default namespace
     *
     * @parma string namespaceName
     *
     * @return static
     *
     * @phpstan-return static
     * @param string $namespaceName
     */
    public function setDefaultNamespace(string $namespaceName): static
    {
    }

    /**
     * Sets an array of default paths. If a route is missing a path the router
     * will use the defined here. This method must not be used to set a 404
     * route
     *
     * ```php
     * $router->setDefaults(
     *     [
     *         "module" => "common",
     *         "action" => "index",
     *     ]
     * );
     * ```
     *
     * @param array $defaults *
     * @return static
     *
     * @phpstan-param mvc_router_defaults $defaults
     * @phpstan-return static
     */
    public function setDefaults(array $defaults): static
    {
    }

    /**
     * Sets the events manager
     *
     * @param ManagerInterface $eventsManager *
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * @param array $routeIds
     *
     * @return static
     *
     * @phpstan-param array<array-key, int|string> $routeIds
     * @phpstan-return static
     */
    public function setKeyRouteIds(array $routeIds): static
    {
    }

    /**
     * @param array $routeNames
     *
     * @return static
     *
     * @phpstan-param array<string, int|string> $routeNames
     * @phpstan-return static
     */
    public function setKeyRouteNames(array $routeNames): static
    {
    }

    /**
     * Sets the URI source. One of the URI_SOURCE_ constants
     *
     * ```php
     * $router->setUriSource(
     *     Router::URI_SOURCE_SERVER_REQUEST_URI
     * );
     * ```
     *
     * @param int $uriSource
     * @return static
     */
    public function setUriSource(int $uriSource): static
    {
    }

    /**
     * Cache-instance convenience wrapper. On cache hit, restores the
     * dispatcher immediately. On miss, defers cache population until the
     * next handle() completes - at which point buildDispatcherDump() is
     * written to the cache key.
     *
     * @throws \Phalcon\Mvc\Router\Exception
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @param string $key
     * @return void
     */
    public function useCache(\Phalcon\Cache\Adapter\AdapterInterface $cache, string $key = 'phalcon.router.dispatcher'): void
    {
    }

    /**
     * Checks if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool
    {
    }

    /**
     * Adds a single route from a config array entry. Used by loadFromConfig.
     *
     * @param array $routeData *
     * @return void
     *
     * @phpstan-param array<string, mixed> $routeData
     */
    protected function addRouteFromConfig(array $routeData): void
    {
    }

    /**
     * @param string $uri
     * @return string
     */
    protected function extractRealUri(string $uri): string
    {
    }

    /**
     * Builds a Group from a config entry and mounts it. Used by loadFromConfig.
     *
     * @param array $groupData *
     * @return void
     *
     * @phpstan-param array<string, mixed> $groupData
     */
    protected function mountGroupFromConfig(array $groupData): void
    {
    }

    /**
     * Rebuilds the HTTP-method index from the current routes array.
     * Routes with no HTTP method constraint are filed under "".
     *
     * @return void
     */
    protected function rebuildMethodIndex(): void
    {
    }
}
