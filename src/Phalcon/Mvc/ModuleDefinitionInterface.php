<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\ModuleDefinitionInterface
 *
 * This interface must be implemented by class module definitions
 */
interface ModuleDefinitionInterface
{

    /**
     * Registers an autoloader related to the module
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function registerAutoloaders(\Phalcon\Di\DiInterface $container = null);

    /**
     * Registers services related to the module
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function registerServices(\Phalcon\Di\DiInterface $container);
}
