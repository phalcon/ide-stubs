<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Service;

use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Ioc\IocContainer;

/**
 * @phpstan-import-type container_extenders from ContainerTypes
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
     * @phpstan-return container_extenders
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
     * @phpstan-param container_extenders $extenders
     * @param array $extenders
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
