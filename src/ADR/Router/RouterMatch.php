<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Router;

use Phalcon\Contracts\ADR\Router\RouterMatch as RouterMatchInterface;

/**
 * Immutable result of a successful route match.
 */
final class RouterMatch implements RouterMatchInterface
{
    protected string $action = '';

    protected array $attributes = [];

    protected array $middleware = [];

    protected ?string $name = null;

    /**
     * @param string $action
     * @param array $attributes
     * @param array $middleware
     * @param string|null $name
     */
    public function __construct(string $action, array $attributes = [], array $middleware = [], ?string $name = null)
    {
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
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
