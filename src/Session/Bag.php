<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session;

use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Session\ManagerInterface;
use Phalcon\Support\Collection;

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
 *
 * @property DiInterface|null $container
 * @property string           $name
 * @property ManagerInterface $session;
 */
class Bag extends Collection implements \Phalcon\Session\BagInterface, \Phalcon\Di\InjectionAwareInterface
{
    /**
     * @var DiInterface|null
     */
    private $container;

    /**
     * Session Bag name
     *
     * @var string
     */
    private $name;

    /**
     * @var ManagerInterface
     */
    private $session;

    /**
     * @param ManagerInterface $session
     * @param string           $name
     */
    public function __construct(\Phalcon\Session\ManagerInterface $session, string $name)
    {
    }

    /**
     * Destroys the session bag
     *
     * @return void
     */
    public function clear(): void
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
    public function init(array $data = []): void
    {
    }

    /**
     * Removes a property from the internal bag
     *
     * @param string $element
     * @return void
     */
    public function remove(string $element): void
    {
    }

    /**
     * Sets a value in the session bag
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value): void
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }
}
