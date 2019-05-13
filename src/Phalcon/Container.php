<?php

namespace Phalcon;

use Psr\Container\ContainerInterface;
use Phalcon\DiInterface;

class Container implements ContainerInterface
{
	/**
	 * @var <DiInterface>
	 */
	protected $container;

	/**
	 * Phalcon\Di constructor
	 */
	public function __construct(DiInterface $container)
	{
	}

	/**
	 * Return the service
	 */
	public function get($name)	{
	}

	/**
	 * Whether a service exists or not in the container
	 */
	public function has($name) : bool
	{
	}
}
