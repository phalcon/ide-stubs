<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Di\DiInterface;
use Phalcon\Messages\MessageInterface;
use Phalcon\Mvc\Model\Transaction\Failed as TxFailed;
use Phalcon\Mvc\Model\Transaction\ManagerInterface;
use Phalcon\Mvc\Model\TransactionInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Transactions are protective blocks where SQL statements are only permanent if
 * they can all succeed as one atomic action. Phalcon\Transaction is intended to
 * be used with Phalcon_Model_Base. Phalcon Transactions should be created using
 * Phalcon\Transaction\Manager.
 *
 * ```php
 * use Phalcon\Mvc\Model\Transaction\Failed;
 * use Phalcon\Mvc\Model\Transaction\Manager;
 *
 * try {
 *     $manager = new Manager();
 *
 *     $transaction = $manager->get();
 *
 *     $invoice = new Invoices();
 *
 *     $invoice->setTransaction($transaction);
 *
 *     $invoice->inv_title    = "Test Invoice";
 *     $invoice->inv_created_at = date("Y-m-d");
 *
 *     if ($invoice->save() === false) {
 *         $transaction->rollback("Can't save invoice");
 *     }
 *
 *     $product = new Products();
 *
 *     $product->setTransaction($transaction);
 *
 *     $product->prd_name = "Widget";
 *
 *     if ($product->save() === false) {
 *         $transaction->rollback("Can't save product");
 *     }
 *
 *     $transaction->commit();
 * } catch(Failed $e) {
 *     echo "Failed, reason: ", $e->getMessage();
 * }
 * ```
 */
class Transaction implements \Phalcon\Mvc\Model\TransactionInterface
{
    protected bool $activeTransaction = false;

    /**
     * @var AdapterInterface
     */
    protected $connection;

    protected bool $isNewTransaction = true;

    protected ?\Phalcon\Mvc\Model\Transaction\ManagerInterface $manager = null;

    /**
     * @phpstan-var list<MessageInterface>
     */
    protected array $messages = [];

    protected bool $rollbackOnAbort = false;

    protected ?\Phalcon\Mvc\ModelInterface $rollbackRecord = null;

    protected bool $rollbackThrowException = false;

    /**
     * Phalcon\Mvc\Model\Transaction constructor
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param bool $autoBegin
     * @param string $service
     */
    public function __construct(\Phalcon\Di\DiInterface $container, bool $autoBegin = false, string $service = 'db')
    {
    }

    /**
     * Starts the transaction
     *
     * @return bool
     */
    public function begin(): bool
    {
    }

    /**
     * Commits the transaction
     *
     * @return bool
     */
    public function commit(): bool
    {
    }

    /**
     * Returns the connection related to transaction
     *
     * @return AdapterInterface
     */
    public function getConnection(): AdapterInterface
    {
    }

    /**
     * Returns validations messages from last save try
     *
     * @phpstan-return list<MessageInterface>
     * @return array
     */
    public function getMessages(): array
    {
    }

    /**
     * Checks whether transaction is managed by a transaction manager
     *
     * @return bool
     */
    public function isManaged(): bool
    {
    }

    /**
     * Checks whether internal connection is under an active transaction
     *
     * @return bool
     */
    public function isValid(): bool
    {
    }

    /**
     * Rollbacks the transaction
     *
     * @param string|null $rollbackMessage
     * @param \Phalcon\Mvc\ModelInterface|null $rollbackRecord
     * @return bool
     */
    public function rollback(?string $rollbackMessage = null, ?\Phalcon\Mvc\ModelInterface $rollbackRecord = null): bool
    {
    }

    /**
     * Sets if is a reused transaction or new once
     *
     * @param bool $isNew
     * @return void
     */
    public function setIsNewTransaction(bool $isNew): void
    {
    }

    /**
     * Sets object which generates rollback action
     *
     * @param \Phalcon\Mvc\ModelInterface $record
     * @return void
     */
    public function setRollbackedRecord(\Phalcon\Mvc\ModelInterface $record): void
    {
    }

    /**
     * Sets flag to rollback on abort the HTTP connection
     *
     * @param bool $rollbackOnAbort
     * @return void
     */
    public function setRollbackOnAbort(bool $rollbackOnAbort): void
    {
    }

    /**
     * Sets transaction manager related to the transaction
     *
     * @param \Phalcon\Mvc\Model\Transaction\ManagerInterface $manager
     * @return void
     */
    public function setTransactionManager(\Phalcon\Mvc\Model\Transaction\ManagerInterface $manager): void
    {
    }

    /**
     * Enables throwing exception
     *
     * @param bool $status
     * @return TransactionInterface
     */
    public function throwRollbackException(bool $status): TransactionInterface
    {
    }
}
