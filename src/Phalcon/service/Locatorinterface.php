<?php

namespace Phalcon\Service;

/**
 * Phalcon\Service\LocatorInterface
 *
 * Interface for the Locator
 */
interface LocatorInterface
{
	/**
	 * Get a helper. If it is not in the mapper array, create a new object,
	 * set it and then return it.
	 */
	public function get(string $name) : object;

	/**
	 * Checks if a helper exists in the map array
	 */
	public function has(string $name) : bool;

	/**
	 * Set a new helper to the mapper array
	 */
	public function set(string $name, callable $helper) : void;
}
