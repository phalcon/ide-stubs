<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Micro;

use Phalcon\Mvc\Model\BinderInterface;

/**
 * Phalcon\Mvc\Micro\LazyLoader
 *
 * Lazy-Load of handlers for Mvc\Micro using auto-loading
 */
class LazyLoader
{
    /**
     * @var string
     */
    protected $definition;

    /**
     * @var object|null
     */
    protected $handler = null;

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
     * @return mixed
     * @param string $method
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     */
    public function callMethod(string $method, $arguments, \Phalcon\Mvc\Model\BinderInterface $modelBinder = null)
    {
    }

    /**
     * @return string
     */
    public function getDefinition(): string
    {
    }

    /**
     * @return object|null
     */
    public function getHandler(): object|null
    {
    }
}
