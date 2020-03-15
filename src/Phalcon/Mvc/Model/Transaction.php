<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\Transaction
 *
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
 *     $robot = new Robots();
 *
 *     $robot->setTransaction($transaction);
 *
 *     $robot->name       = "WALL·E";
 *     $robot->created_at = date("Y-m-d");
 *
 *     if ($robot->save() === false) {
 *         $transaction->rollback("Can't save robot");
 *     }
 *
 *     $robotPart = new RobotParts();
 *
 *     $robotPart->setTransaction($transaction);
 *
 *     $robotPart->type = "head";
 *
 *     if ($robotPart->save() === false) {
 *         $transaction->rollback("Can't save robot part");
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

    protected $activeTransaction = false;


    protected $connection;


    protected $isNewTransaction = true;


    protected $manager;


    protected $messages;


    protected $rollbackRecord;


    protected $rollbackOnAbort = false;


    protected $rollbackThrowException = false;


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
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    public function getConnection(): \Phalcon\Db\Adapter\AdapterInterface
    {
    }

    /**
     * Returns validations messages from last save try
     *
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
     * @param string $rollbackMessage
     * @param \Phalcon\Mvc\ModelInterface $rollbackRecord
     * @return bool
     */
    public function rollback(string $rollbackMessage = null, \Phalcon\Mvc\ModelInterface $rollbackRecord = null): bool
    {
    }

    /**
     * Sets if is a reused transaction or new once
     *
     * @param bool $isNew
     * @return void
     */
    public function setIsNewTransaction(bool $isNew)
    {
    }

    /**
     * Sets flag to rollback on abort the HTTP connection
     *
     * @param bool $rollbackOnAbort
     * @return void
     */
    public function setRollbackOnAbort(bool $rollbackOnAbort)
    {
    }

    /**
     * Sets object which generates rollback action
     *
     * @param \Phalcon\Mvc\ModelInterface $record
     * @return void
     */
    public function setRollbackedRecord(\Phalcon\Mvc\ModelInterface $record)
    {
    }

    /**
     * Sets transaction manager related to the transaction
     *
     * @param \Phalcon\Mvc\Model\Transaction\ManagerInterface $manager
     * @return void
     */
    public function setTransactionManager(\Phalcon\Mvc\Model\Transaction\ManagerInterface $manager)
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
