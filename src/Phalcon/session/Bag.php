<?php

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
     */
    public function clear()
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Removes a property from the internal bag
     *
     * @param array $data
     */
    public function init(array $data = array())
    {
    }

    /**
     * Removes a property from the internal bag
     *
     * @param string $element
     */
    public function remove(string $element)
    {
    }

    /**
     * Sets a value in the session bag
     *
     * @param string $element
     * @param mixed $value
     */
    public function set(string $element, $value)
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }
}
