<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\ADR\Router;

/**
 * The result of matching a request against the router: the Action class, the
 * extracted route attributes, the route's middleware and its optional name.
 */
interface RouterMatch
{
    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @return array
     */
    public function getMiddleware(): array;

    /**
     * @return string|null
     */
    public function getName(): string|null;
}
