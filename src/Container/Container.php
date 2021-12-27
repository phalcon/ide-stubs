<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container;

use Psr\Container\ContainerInterface;
use Phalcon\Di\DiInterface;

/**
 * PSR-11 Wrapper for `Phalcon\Di`
 */
class Container implements \Psr\Container\ContainerInterface
{

    /**
     * @var DiInterface
     */
    protected $container;

    /**
     * Phalcon\Container constructor
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function __construct(\Phalcon\Di\DiInterface $container)
    {
    }

    /**
     * Return the service
     *
     * @param string $name
     * @return mixed
     */
    public function get(string $name)
    {
    }

    /**
     * Whether a service exists or not in the container
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }
}
