<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Formatter\FormatterInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractAdapter implements \Phalcon\Logger\Adapter\AdapterInterface
{
    /**
     * Name of the default formatter class
     *
     * @var string
     */
    protected $defaultFormatter = 'Line';

    /**
     * Formatter
     *
     * @var FormatterInterface
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
    protected $queue = array();


    /**
     * Destructor cleanup
     */
    public function __destruct()
    {
    }

    /**
     * Adds a message to the queue
     *
     * @param \Phalcon\Logger\Item $item
     * @return AdapterInterface
     */
    public function add(\Phalcon\Logger\Item $item): AdapterInterface
    {
    }

    /**
     * Starts a transaction
     *
     * @return AdapterInterface
     */
    public function begin(): AdapterInterface
    {
    }

    /**
     * Commits the internal transaction
     *
     * @return AdapterInterface
     */
    public function commit(): AdapterInterface
    {
    }

    /**
     * @return FormatterInterface
     */
    public function getFormatter(): FormatterInterface
    {
    }

    /**
     * Returns the whether the logger is currently in an active transaction or not
     *
     * @return bool
     */
    public function inTransaction(): bool
    {
    }

    /**
     * Processes the message in the adapter
     *
     * @param \Phalcon\Logger\Item $item
     * @return void
     */
    abstract public function process(\Phalcon\Logger\Item $item);

    /**
     * Rollbacks the internal transaction
     *
     * @return AdapterInterface
     */
    public function rollback(): AdapterInterface
    {
    }

    /**
     * Sets the message formatter
     *
     * @param \Phalcon\Logger\Formatter\FormatterInterface $formatter
     * @return AdapterInterface
     */
    public function setFormatter(\Phalcon\Logger\Formatter\FormatterInterface $formatter): AdapterInterface
    {
    }
}
