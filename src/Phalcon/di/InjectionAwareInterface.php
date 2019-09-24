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
 * This interface must be implemented in those classes that uses internally the
 * Phalcon\Di that creates them
 */
interface InjectionAwareInterface
{

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container);

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface;
}
