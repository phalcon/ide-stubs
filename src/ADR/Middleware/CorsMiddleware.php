<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Middleware;

use Phalcon\Contracts\ADR\ADRTypes;
use Phalcon\Contracts\ADR\Handler;
use Phalcon\Contracts\ADR\Middleware;
use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\Response;
use Phalcon\Http\ResponseInterface;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;

/**
 * CORS middleware. Inert by default: it emits nothing until an origin allowlist
 * is configured, and only for requests whose `Origin` is on it. The allowed
 * origin is always echoed back explicitly, so credentials are never paired with
 * a wildcard origin. Preflight `OPTIONS` requests are answered directly.
 *
 * @phpstan-import-type adr_cors_config from ADRTypes
 */
class CorsMiddleware implements \Phalcon\Contracts\ADR\Middleware
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;


    protected bool $allowCredentials = false;

    /**
     * @var list<string>
     */
    protected array $allowedHeaders = [];

    /**
     * @var list<string>
     */
    protected array $allowedMethods = [];

    /**
     * @var list<string>
     */
    protected array $allowedOrigins = [];

    /**
     * @var int
     */
    protected int $maxAge = 0;

    /**
     * @phpstan-param adr_cors_config $config
     * @param array $config
     */
    public function __construct(array $config = [])
    {
    }

    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @param \Phalcon\Contracts\ADR\Handler $next
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Contracts\Http\AttributeRequest $request, \Phalcon\Contracts\ADR\Handler $next): ResponseInterface
    {
    }

    /**
     * @param \Phalcon\Http\ResponseInterface $response
     * @param string $origin
     * @return void
     */
    protected function applyHeaders(\Phalcon\Http\ResponseInterface $response, string $origin): void
    {
    }

    /**
     * @param string $origin
     * @return bool
     */
    protected function isAllowed(string $origin): bool
    {
    }
}
