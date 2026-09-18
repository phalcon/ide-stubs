<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container;

use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Ioc\IocContainerFactory;
use Phalcon\Contracts\Container\Service\Provider;

/**
 * @phpstan-import-type container_providers from ContainerTypes
 */
class ContainerFactory implements \Phalcon\Contracts\Container\Ioc\IocContainerFactory
{
    /**
     * @phpstan-var container_providers
     */
    protected array $providers = [];

    /**
     * Adds a provider
     *
     * @param \Phalcon\Contracts\Container\Service\Provider $provider
     * @return static
     */
    public function addProvider(\Phalcon\Contracts\Container\Service\Provider $provider): static
    {
    }

    /**
     * Returns a new container
     *
     * @return Container
     */
    public function newContainer(): Container
    {
    }
}
