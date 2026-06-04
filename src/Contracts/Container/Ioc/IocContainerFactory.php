<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Ioc;

/**
 * [_IocContainerFactory_][] affords obtaining a new instance of
 * [_IocContainer_][].
 */
interface IocContainerFactory
{
    /**
     * Returns a new instance of [_IocContainer_][].
     *
     * - Notes:
     *
     *     -Container instantiation logic is not specified. Implementations
     *       might use providers, configuration files, attribute or annotation
     *       collection, or some other means to create and populate a container.
     *       Implementations might also choose to return a compiled or otherwise
     *       reconstituted container.
     *
     * @return IocContainer
     */
    public function newContainer(): IocContainer;
}
