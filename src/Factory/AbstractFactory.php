<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Factory;

use Phalcon\Config\ConfigInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractFactory extends \Phalcon\Factory\AbstractConfigFactory
{
    /**
     * @var array
     */
    protected $mapper = [];

    /**
     * @var array
     */
    protected $services = [];

    /**
     * Returns the adapters for the factory
     *
     * @return string[]
     */
    abstract protected function getServices(): array;

    /**
     * Checks if a service exists and throws an exception
     *
     * @param string $name
     * @return mixed
     */
    protected function getService(string $name): mixed
    {
    }

    /**
     * Initialize services/add new services
     *
     * @param array $services
     * @return void
     */
    protected function init(array $services = []): void
    {
    }
}
