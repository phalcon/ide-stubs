<?php

namespace Phalcon\Session\Adapter;

use SessionHandlerInterface;

/**
 * Phalcon\Session\Adapter\Noop
 *
 * This is an "empty" or null adapter. It can be used for testing or any
 * other purpose that no session needs to be invoked
 *
 * <code>
 * <?php
 *
 * use Phalcon\Session\Manager;
 * use Phalcon\Session\Adapter\Noop;
 *
 * $session = new Manager();
 * $session->setHandler(new Noop());
 * </code>
 */
class Noop implements SessionHandlerInterface
{
    /**
     * The connection of some adapters
     */
	protected $connection;

	/**
	 * Session options
	 *
	 * @var array
	 */
	protected $options = [];

	/**
	 * Session prefix
	 *
	 * @var string
	 */
	protected $prefix = "";

	/**
	 * Time To Live
	 *
	 * @var int
	 */
	protected $ttl = 8600;

	/**
	 * Constructor
	 */
	public function __construct(array $options = [])
	{
	}

	/**
	 * Close
	 */
	public function close() : bool
	{
	}

	/**
	 * Destroy
	 */
	public function destroy($id) : bool
	{
	}

	/**
	 * Garbage Collector
	 */
	public function gc($maxlifetime) : bool
	{
	}

	/**
	 * Read
	 */
	public function read($id) : string
	{
	}

	/**
	 * Open
	 */
	public function open($savePath, $sessionName) : bool
	{
	}

	/**
	 * Write
	 */
	public function write($id, $data) : bool
	{
	}

	/**
	 * Helper method to get the name prefixed
	 */
	protected function getPrefixedName($name) : string
	{
	}
}
