<?php

namespace Phalcon\Mvc\Micro;

/**
 * Phalcon\Mvc\Micro\LazyLoader
 *
 * Lazy-Load of handlers for Mvc\Micro using auto-loading
 */
class LazyLoader
{

    protected $handler;


    protected $definition;


    public function getDefinition()
    {
    }

    /**
     * Phalcon\Mvc\Micro\LazyLoader constructor
     *
     * @param string $definition
     */
    public function __construct(string $definition)
    {
    }

    /**
     * Calling __call method
     *
     * @param array $arguments
     * @param string $method
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     * @return mixed
     */
    public function callMethod(string $method, $arguments, \Phalcon\Mvc\Model\BinderInterface $modelBinder = null)
    {
    }
}
