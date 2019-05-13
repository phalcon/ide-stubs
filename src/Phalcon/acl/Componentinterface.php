<?php

namespace Phalcon\Acl;

/**
 *
 * Phalcon\Acl\ComponentInterface
 *
 * Interface for Phalcon\Acl\Component
 */
interface ComponentInterface
{
	/**
	 * Returns component description
	 */
	public function getDescription() : string;

	/**
	 * Returns the component name
	 */
	public function getName() : string;

	/**
	 * Magic method __toString
	 */
	public function __toString() : string;
}
