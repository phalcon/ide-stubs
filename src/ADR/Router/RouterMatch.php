<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Router;

use Phalcon\Contracts\ADR\ADRTypes;
use Phalcon\Contracts\ADR\Router\RouterMatch as RouterMatchInterface;

/**
 * Immutable result of a successful route match.
 *
 * @phpstan-import-type adr_middleware_names from ADRTypes
 * @phpstan-import-type adr_route_attributes from ADRTypes
 */
final class RouterMatch implements RouterMatchInterface
{
    protected string $action = '';

    protected array $attributes = [];

    protected array $middleware = [];

    protected ?string $name = null;

    /**
     * @phpstan-param class-string          $action
     * @phpstan-param adr_route_attributes  $attributes
     * @phpstan-param adr_middleware_names  $middleware
     * @param string $action
     * @param array $attributes
     * @param array $middleware
     * @param string|null $name
     */
    public function __construct(string $action, array $attributes = [], array $middleware = [], ?string $name = null)
    {
    }

    /**
     * @phpstan-return class-string
     * @return string
     */
    public function getAction(): string
    {
    }

    /**
     * @phpstan-return adr_route_attributes
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * @phpstan-return adr_middleware_names
     * @return array
     */
    public function getMiddleware(): array
    {
    }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
    }
}
