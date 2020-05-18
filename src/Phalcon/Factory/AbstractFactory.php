<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Factory;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractFactory
{
    /**
     * @var array
     */
    protected $mapper = array();

    /**
     * @var array
     */
    protected $services = array();


    /**
     * Checks the config if it is a valid object
     *
     * @param mixed $config
     * @return array
     */
    protected function checkConfig($config): array
    {
    }

    /**
     * Returns the adapters for the factory
     *
     * @return array
     */
    abstract protected function getAdapters(): array;

    /**
     * Checks if a service exists and throws an exception
     *
     * @param string $name
     * @return mixed
     */
    protected function getService(string $name)
    {
    }

    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     * @return void
     */
    protected function init(array $services = array())
    {
    }
}
