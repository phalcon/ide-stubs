<?php

namespace Phalcon\Firewall\Adapter;

/**
 * Adapter for Phalcon\Firewall adapters
 */
abstract class AbstractAdapter implements \Phalcon\Firewall\Adapter\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Storing active identity object implementing Phalcon/Acl/RoleAware
     */
    protected $activeIdentity;

    /**
     * Storing active user role
     */
    protected $activeRole;

    /**
     * Should role always be resolved using role callback or just once?
     *
     * @var bool
     */
    protected $alwaysResolvingRole = false;

    /**
     * Cache for caching access
     *
     * @var <CacheAdapterInterface>
     */
    protected $cache;

    /**
     * Default access
     *
     * @var int
     */
    protected $defaultAccess = Enum::DENY;

    /**
     * Events manager
     *
     * @var mixed
     */
    protected $eventsManager;

    /**
     * Internal cache for caching access during request time
     *
     * @var mixed
     */
    protected $internalCache;

    /**
     * Anonymous function for getting user identity - this function must
     * return string, array or object implementing Phalcon\Acl\RoleAware
     *
     * @var mixed
     */
    protected $roleCallback;


    /**
     * Storing active identity object implementing Phalcon/Acl/RoleAware
     */
    public function getActiveIdentity() {}

    /**
     * Storing active user role
     */
    public function getActiveRole() {}

    /**
     * Should role always be resolved using role callback or just once?
     *
     * @param bool $alwaysResolvingRole
     */
    public function setAlwaysResolvingRole(bool $alwaysResolvingRole) {}

    /**
     * Default access
     *
     * @return int
     */
    public function getDefaultAccess(): int {}

    /**
     * Returns the internal event manager
     *
     * @return \Phalcon\Events\ManagerInterface
     */
    public function getEventsManager(): ManagerInterface {}

    /**
     * Gets role callback to fetch role name
     *
     * @return \Closure
     */
    public function getRoleCallback(): Closure {}

    /**
     * Gets always resolving role option
     *
     * @return bool
     */
    public function isAlwaysResolvingRole(): bool {}

    /**
     * Sets the cache adapter
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @return AdapterInterface
     */
    public function setCache(\Phalcon\Cache\Adapter\AdapterInterface $cache): AdapterInterface {}

    /**
     * Sets the default access level (Phalcon\Acl\Enum::ALLOW or Phalcon\Acl\Enum::DENY)
     *
     * @param int $defaultAccess
     * @return AdapterInterface
     */
    public function setDefaultAccess(int $defaultAccess): AdapterInterface {}

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return AdapterInterface
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): AdapterInterface {}

    /**
     * Sets role callback to fetch role name
     *
     * @param mixed $callback
     * @return AdapterInterface
     */
    public function setRoleCallback($callback): AdapterInterface {}

    /**
     * @param \Phalcon\Di\DiInterface $container
     */
    protected function callRoleCallback(\Phalcon\Di\DiInterface $container) {}

    /**
     * Gets access from cache
     *
     * @param string $key
     * @param array $originalValues
     * @param string $roleCacheKey
     * @return bool|null
     */
    protected function getAccessFromCache(string $key, array $originalValues = null, string $roleCacheKey = null): ?bool {}

    /**
     * Handles a user exception
     *
     * @param \Exception $exception
     */
    protected function handleException(\Exception $exception) {}

    /**
     * Fires event or throwing exception
     *
     * @param mixed $role
     * @param string $actionName
     * @param string $controllerName
     * @param bool $access
     */
    protected function fireEventOrThrowException($role, string $actionName, string $controllerName, bool $access) {}

    /**
     * Saves access in cache and internal cache
     *
     * @param string $key
     * @param bool $access
     */
    protected function saveAccessInCache(string $key, bool $access) {}

    /**
     * Throws an internal exception
     *
     * @param string $message
     * @param int $exceptionCode
     * @return bool
     */
    protected function throwFirewallException(string $message, int $exceptionCode = 0): bool {}

}
