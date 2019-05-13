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
	 */
	public function __construct(string $name, string $description = null)
	{
	}

    /**
     * Returns component description
     */
    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
    }

    /**
     * Returns the component name
     */
    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    /**
     * Magic method __toString
     */
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
    }
}
