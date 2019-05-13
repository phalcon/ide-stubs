<?php

namespace Phalcon\Service;

use Phalcon\Service\LocatorInterface;

/**
 * Phalcon\Service\Locator
 *
 * Lazy loads, stores and exposes objects
 */
class Locator implements LocatorInterface
{
	/**
	 * @var array
	 */
	protected $services = [];

	/**
	 * @var array
	 */
	protected $mapper = [];

	/**
	 * Key value pairs with name as the key and a callable as the value for
	 * the service object
	 */
	public function __construct(array $mapper = [])
	{
	}

	/**
	 * Services being called via magic methods
	 */
	public function __call(string $name, array $parameters)	{
	}

	/**
	 * Get a service. If it is not in the mapper array, create a new object,
	 * set it and then return it.
	 */
	public function get(string $name) : object
	{
	}

	/**
	 * Checks if a service exists in the map array
	 */
	public function has(string $name) : bool
	{
	}

	/**
	 * Set a new service to the mapper array
	 */
	public function set(string $name, callable $service) : void
	{
	}
}
