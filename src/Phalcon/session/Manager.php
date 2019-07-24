<?php

namespace Phalcon\Session;

use InvalidArgumentException;
use RuntimeException;
use SessionHandlerInterface;
use Phalcon\DiInterface;
use Phalcon\DI\InjectionAwareInterface;
use Phalcon\Helper\Arr;
use Phalcon\Session\ManagerInterface;

/**
 * Phalcon\Session\Manager
 *
 * Session manager class
 */
class Manager implements ManagerInterface, InjectionAwareInterface
{
    /**
     * @var <DiInterface>
     */
    private $container;

	/**
	 * @var <SessionHandlerInterface>|null
	 */
	private $handler = null;

	/**
	 * @var string
	 */
	private $name = "";

	/**
	 * @var array
	 */
	private $options = [];

	/**
	 * @var string
	 */
	private $uniqueId = "";

	/**
	 * Manager constructor.
	 *
	 * @param array options
	 */
	public function __construct(array $options = [])
	{
	}


	/**
	 * Alias: Gets a session variable from an application context
	 */
	public function __get(string $key)	{
	}

	/**
	 * Alias: Check whether a session variable is set in an application context
	 */
	public function __isset(string $key) : bool
	{
	}

	/**
	 * Alias: Sets a session variable in an application context
	 */
	public function __set(string $key, $value) : void
	{
	}

	/**
	 * Alias: Removes a session variable from an application context
	 */
	public function __unset(string $key)
	{
	}

	/**
	 * Destroy/end a session
	 */
	public function destroy() : void
	{
	}

	/**
	 * Check whether the session has been started
	 */
	public function exists() : bool
	{
	}

	/**
	 * Gets a session variable from an application context
	 */
	public function get(string $key, $defaultValue = null, bool $remove = false)	{
	}

	/**
	 * Returns the DependencyInjector container
	 */
	public function getDI() : DiInterface
	{
	}

	/**
	 * Returns the stored session handler
	 */
	public function getHandler() : SessionHandlerInterface
	{
	}

	/**
	 * Returns the session id
	 */
	public function getId() : string
	{
	}

	/**
	 * Returns the name of the session
	 */
	public function getName() : string
	{
	}

	/**
	 * Check whether a session variable is set in an application context
	 */
	public function has(string $key) : bool
	{
	}

	/**
	 * Get internal options
	 */
	public function getOptions() : array
	{
	}

	/**
	 * Regenerates the session id using the handler.
	 */
	public function regenerateId($deleteOldSession = true) : ManagerInterface
	{
	}

	/**
	 * Registers a handler with the session
	 */
	public function registerHandler(SessionHandlerInterface $handler) : bool
	{
	}

	/**
	 * Removes a session variable from an application context
	 */
	public function remove(string $key)
	{
	}

	/**
	 * Sets a session variable in an application context
	 */
	public function set(string $key, $value) : void
	{
	}

	/**
	 * Sets the DependencyInjector container
	 */
	public function setDI(DiInterface $container)
	{
	}

    /**
	 * Set the handler for the session
	 */
	public function setHandler(SessionHandlerInterface $handler) : ManagerInterface
	{
	}

	/**
	 * Set session Id
	 */
	public function setId(string $id) : ManagerInterface
	{
	}

	/**
	 * Set the session name. Throw exception if the session has started
	 * and do not allow poop names
	 *
	 * @param  string name
	 *
	 * @throws InvalidArgumentException
	 *
	 * @return Manager
	 */
	public function setName(string $name) : ManagerInterface
	{
	}

	/**
	 * Sets session's options
	 *
	 * @param array options
	 */
	public function setOptions(array $options) : void
	{
	}

	/**
	 * Starts the session (if headers are already sent the session will not be
	 * started)
	 */
	public function start() : bool
	{
	}

	/**
	 * Returns the status of the current session.
	 *
	 * @return int
	 */
	public function status() : int
	{
	}

	/**
	 * Returns the key prefixed
	 */
	private function getUniqueKey(string $key) : string
	{
	}
}
