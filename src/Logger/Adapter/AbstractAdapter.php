<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Exceptions\DeserializationFailed;
use Phalcon\Logger\Exceptions\SerializationFailed;
use Phalcon\Logger\Exceptions\TransactionAlreadyActive;
use Phalcon\Logger\Exceptions\TransactionNotActive;
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
     * Maximum number of items retained in the transaction queue.
     * 0 (default) keeps the original unbounded behavior; a positive
     * value drops the oldest queued item FIFO before a new one is
     * appended in add().
     *
     * @var int
     */
    protected $queueLimit = 0;

    /**
     * Destructor cleanup
     *
     * @throws TransactionAlreadyActive
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
     * @throws TransactionNotActive
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
     * Returns the configured transaction-queue cap (0 = unlimited)
     *
     * @return int
     */
    public function getQueueLimit(): int
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
     * @throws TransactionNotActive
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
     * Sets the maximum number of items retained in the transaction
     * queue. 0 disables the cap (the default; preserves the original
     * unbounded behavior).
     *
     * @param int $queueLimit
     * @return AdapterInterface
     */
    public function setQueueLimit(int $queueLimit): AdapterInterface
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
     * @throws TransactionNotActive
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
