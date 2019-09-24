<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Di;

/**
 * This abstract class offers common access to the DI in a class
 */
abstract class AbstractInjectionAware implements InjectionAwareInterface
{
    /**
     * Dependency Injector
     *
     * @var DiInterface
     */
    protected $container;


    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }
}
