<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Service;

use Phalcon\Contracts\Container\Ioc\IocContainer;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been heavily influenced by CapsulePHP.
 * Additionally, there are implementations from ioc-interop, which is a
 * Composer dependency, and from service-interop and resolver-interop. They
 * are copied and re-implemented here because we need to support PHP 8.1.
 * Once we move to min 8.4 and packages become available and compatible, the
 * copies will be replaced with the actual Composer dependencies.
 *
 * @link    https://github.com/capsulephp/di
 * @license https://github.com/capsulephp/di/blob/3.x/LICENSE.md
 *
 * @link    https://github.com/ioc-interop/interface
 * @license https://github.com/ioc-interop/interface/blob/1.x/LICENSE.md
 *
 * @link    https://github.com/service-interop/interface
 * @license https://github.com/service-interop/interface/blob/1.x/LICENSE.md
 *
 * @link    https://github.com/resolver-interop/interface/tree/1.x
 * @license https://github.com/resolver-interop/interface/blob/1.x/LICENSE.md
 */
interface Definition
{
    /**
     * @param callable $extender
     * @return static
     */
    public function addExtender($extender): static;

    /**
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @return object
     */
    public function buildService(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc): object;

    /**
     * @return string
     */
    public function getClass(): string;

    /**
     * @return array
     */
    public function getExtenders(): array;

    /**
     * @return mixed
     */
    public function getFactory();

    /**
     * @return string
     */
    public function getLifetime(): string;

    /**
     * @return string
     */
    public function getServiceName(): string;

    /**
     * @return bool
     */
    public function hasClass(): bool;

    /**
     * @return bool
     */
    public function hasExtenders(): bool;

    /**
     * @return bool
     */
    public function hasFactory(): bool;

    /**
     * @param string $className
     * @return static
     */
    public function setClass(string $className): static;

    /**
     * @param array<array-key, callable> $extenders
     * @return static
     */
    public function setExtenders(array $extenders): static;

    /**
     * @param callable $factory
     * @return static
     */
    public function setFactory($factory): static;

    /**
     * @param string $lifetime
     * @return static
     */
    public function setLifetime(string $lifetime): static;

    /**
     * @return static
     */
    public function unsetClass(): static;

    /**
     * @return static
     */
    public function unsetExtenders(): static;

    /**
     * @return static
     */
    public function unsetFactory(): static;
}
