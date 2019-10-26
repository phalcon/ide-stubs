<?php

namespace Phalcon;

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
     * @param mixed $name
     * @return mixed
     */
    public function get($name)
    {
    }

    /**
     * Whether a service exists or not in the container
     *
     * @param mixed $name
     * @return bool
     */
    public function has($name): bool
    {
    }
}
