<?php

namespace Phalcon\Logger\Adapter;

use Phalcon\Logger;
use Phalcon\Logger\Adapter\AdapterInterface;
use Phalcon\Logger\Exception;
use Phalcon\Logger\Formatter\FormatterInterface;
use Phalcon\Logger\Item;

abstract class AbstractAdapter implements AdapterInterface
{
	/**
	 * Name of the default formatter class
	 *
	 * @var string
	 */
	protected $defaultFormatter = "Line";

	/**
	 * Formatter
	 *
	 * @var <FormatterInterface>
	 */
	protected $formatter;

	/**
	 * Tells if there is an active transaction or not
	 *
	 * @var bool
	 */
	protected $inTransaction = false;

	/**
	 * Array with messages queued in the transaction
	 *
	 * @var array
	 */
	protected $queue = [];

	/**
	 * Destructor cleanup
	 */
	public function __destruct()
	{
	}

	/**
 	 * Adds a message to the queue
 	 */
	public function add(Item $item) : void
	{
	}

	/**
 	 * Starts a transaction
 	 */
	public function begin() : AdapterInterface
	{
	}

	/**
 	 * Commits the internal transaction
 	 */
	public function commit() : AdapterInterface
	{
	}

	public function getFormatter() : FormatterInterface
	{
	}

	/**
	 * Returns the whether the logger is currently in an active transaction or not
	 */
	public function inTransaction() : bool
	{
	}

	/**
 	 * Processes the message in the adapter
 	 */
	public function process(Item $item) : void
	{
	}

	/**
 	 * Rollbacks the internal transaction
 	 */
	public function rollback() : AdapterInterface
	{
	}

	/**
	 * Sets the message formatter
	 */
	public function setFormatter(FormatterInterface $formatter) : AdapterInterface
	{
	}
}
