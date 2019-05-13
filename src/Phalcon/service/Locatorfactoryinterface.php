<?php

namespace Phalcon\Service;

use Phalcon\Service\LocatorInterface;

/**
 * Phalcon\Service\LocatorFactoryInterface
 *
 * Interface for a Locator Factory
 */
interface LocatorFactoryInterface
{
	/**
	 * New instance of the locator
	 */
	public function newInstance() : LocatorInterface;
}
