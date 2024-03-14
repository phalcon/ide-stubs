<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use stdClass;

/**
 * This abstract class offers common access to the DI in a class
 */
abstract class AbstractInjectionAware extends stdClass implements \Phalcon\Di\InjectionAwareInterface
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
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param DiInterface $container
     * @return void
     */
    public function setDI(DiInterface $container): void
    {
    }
}
