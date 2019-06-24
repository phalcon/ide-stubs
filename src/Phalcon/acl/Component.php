<?php

namespace Phalcon\Acl;

use Phalcon\Acl\Exception;

/**
 * Phalcon\Acl\Component
 *
 * This class defines component entity and its description
 */
class Component implements ComponentInterface
{
	/**
	 * Component description
	 * @var string
	 */
	private $description;

	/**
	 * Component name
	 * @var string
	 */
	private $name;

    /**
     * Phalcon\Acl\Component constructor
     * @param string $name
     * @param string|null $description
     */
	public function __construct(string $name, string $description = null) {}

    /**
     * Returns component description
     */
    public function getDescription(): string {}

    /**
     * Returns the component name
     */
    public function getName(): string {}

    /**
     * Magic method __toString
     */
    public function __toString(): string {}
}
