<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Exception;
use Phalcon\Logger\Formatter\FormatterInterface;
use Phalcon\Logger\Formatter\Line;
use Phalcon\Logger\Item;

/**
 * Class AbstractAdapter
 *
 * @property string             $defaultFormatter
 * @property FormatterInterface $formatter
 * @property bool               $inTransaction
 * @property array              $queue
 */
abstract class AbstractAdapter implements \Phalcon\Logger\Adapter\AdapterInterface
{
    /**
     * Name of the default formatter class
     *
     * @var string
     */
    protected $defaultFormatter = 'Phalcon\\\\Logger\\Formatter\\\\Line';

    /**
     * Formatter
     *
     * @var FormatterInterface|null
     */
    protected $formatter = null;

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
     *
     * @throws Exception
     */
    public function __destruct()
    {
    }

    /**
     * Prevent serialization
     *
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * Prevent unserialization
     *
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * Adds a message to the queue
     *
     * @param Item $item
     *
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
     * @throws Exception
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
     * Returns the whether the logger is currently in an active transaction or
     * not
     *
     * @return bool
     */
    public function inTransaction(): bool
    {
    }

    /**
     * Processes the message in the adapter
     *
     * @param Item $item
     * @return void
     */
    abstract public function process(\Phalcon\Logger\Item $item): void;

    /**
     * Rollbacks the internal transaction
     *
     * @return AdapterInterface
     * @throws Exception
     */
    public function rollback(): AdapterInterface
    {
    }

    /**
     * Sets the message formatter
     *
     * @param FormatterInterface $formatter
     *
     * @return AdapterInterface
     */
    public function setFormatter(\Phalcon\Logger\Formatter\FormatterInterface $formatter): AdapterInterface
    {
    }

    /**
     * Returns the formatted item
     *
     * @param \Phalcon\Logger\Item $item
     * @return string
     */
    protected function getFormattedItem(\Phalcon\Logger\Item $item): string
    {
    }

    /**
     * Checks if the transaction is active
     *
     * @throws Exception
     * @return void
     */
    private function checkTransaction(): void
    {
    }

    /**
     * Resets the transaction flag and queue array
     *
     * @return void
     */
    private function resetTransaction(): void
    {
    }
}
