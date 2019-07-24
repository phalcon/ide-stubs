<?php

namespace Phalcon\Mvc\Model\Transaction;

/**
 * Phalcon\Mvc\Model\Transaction\ManagerInterface
 *
 * Interface for Phalcon\Mvc\Model\Transaction\Manager
 */
interface ManagerInterface
{

    /**
     * Remove all the transactions from the manager
     */
    public function collectTransactions();

    /**
     * Commits active transactions within the manager
     */
    public function commit();

    /**
     * Returns a new \Phalcon\Mvc\Model\Transaction or an already created once
     *
     * @param bool $autoBegin
     * @return \Phalcon\Mvc\Model\TransactionInterface
     */
    public function get(bool $autoBegin = true): TransactionInterface;

    /**
     * Returns the database service used to isolate the transaction
     *
     * @return string
     */
    public function getDbService(): string;

    /**
     * Check if the transaction manager is registering a shutdown function to clean up pendent transactions
     *
     * @return bool
     */
    public function getRollbackPendent(): bool;

    /**
     * Checks whether manager has an active transaction
     *
     * @return bool
     */
    public function has(): bool;

    /**
     * Notifies the manager about a committed transaction
     *
     * @param \Phalcon\Mvc\Model\TransactionInterface $transaction
     */
    public function notifyCommit(\Phalcon\Mvc\Model\TransactionInterface $transaction);

    /**
     * Notifies the manager about a rollbacked transaction
     *
     * @param \Phalcon\Mvc\Model\TransactionInterface $transaction
     */
    public function notifyRollback(\Phalcon\Mvc\Model\TransactionInterface $transaction);

    /**
     * Rollbacks active transactions within the manager
     * Collect will remove transaction from the manager
     *
     * @param bool $collect
     */
    public function rollback(bool $collect = false);

    /**
     * Rollbacks active transactions within the manager
     */
    public function rollbackPendent();

    /**
     * Sets the database service used to run the isolated transactions
     *
     * @param string $service
     * @return ManagerInterface
     */
    public function setDbService(string $service): ManagerInterface;

    /**
     * Set if the transaction manager must register a shutdown function to clean up pendent transactions
     *
     * @param bool $rollbackPendent
     * @return ManagerInterface
     */
    public function setRollbackPendent(bool $rollbackPendent): ManagerInterface;

}
