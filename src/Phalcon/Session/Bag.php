<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session;

use Phalcon\Collection;
use Phalcon\Di\DiInterface;

/**
 * Phalcon\Session\Bag
 *
 * This component helps to separate session data into "namespaces". Working by
 * this way you can easily create groups of session variables into the
 * application
 *
 * ```php
 * $user = new \Phalcon\Session\Bag("user");
 *
 * $user->name = "Kimbra Johnson";
 * $user->age  = 22;
 * ```
 */
class Bag extends Collection implements \Phalcon\Di\InjectionAwareInterface
{

    private $container;


    private $name = null;


    private $session;


    /**
     * Phalcon\Session\Bag constructor
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
    }

    /**
     * Destroys the session bag
     *
     * @return void
     */
    public function clear()
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Initialize internal array
     *
     * @param array $data
     * @return void
     */
    public function init(array $data = array())
    {
    }

    /**
     * Removes a property from the internal bag
     *
     * @param string $element
     * @return void
     */
    public function remove(string $element)
    {
    }

    /**
     * Sets a value in the session bag
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value)
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }
}
