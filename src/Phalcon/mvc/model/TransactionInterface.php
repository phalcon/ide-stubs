<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\TransactionInterface
 *
 * Interface for Phalcon\Mvc\Model\Transaction
 */
interface TransactionInterface
{

    /**
     * Sets transaction manager related to the transaction
     *
     * @param \Phalcon\Mvc\Model\Transaction\ManagerInterface $manager
     */
    public function setTransactionManager(\Phalcon\Mvc\Model\Transaction\ManagerInterface $manager);

    /**
     * Starts the transaction
     *
     * @return bool
     */
    public function begin();

    /**
     * Commits the transaction
     *
     * @return bool
     */
    public function commit();

    /**
     * Rollbacks the transaction
     *
     * @param mixed $rollbackMessage
     * @param \Phalcon\Mvc\ModelInterface $rollbackRecord
     */
    public function rollback($rollbackMessage = null, \Phalcon\Mvc\ModelInterface $rollbackRecord = null);

    /**
     * Returns connection related to transaction
     *
     * @return \Phalcon\Db\AdapterInterface
     */
    public function getConnection();

    /**
     * Sets if is a reused transaction or new once
     *
     * @param bool $isNew
     */
    public function setIsNewTransaction($isNew);

    /**
     * Sets flag to rollback on abort the HTTP connection
     *
     * @param bool $rollbackOnAbort
     */
    public function setRollbackOnAbort($rollbackOnAbort);

    /**
     * Checks whether transaction is managed by a transaction manager
     *
     * @return bool
     */
    public function isManaged();

    /**
     * Returns validations messages from last save try
     *
     * @return array
     */
    public function getMessages();

    /**
     * Checks whether internal connection is under an active transaction
     *
     * @return bool
     */
    public function isValid();

    /**
     * Sets object which generates rollback action
     *
     * @param \Phalcon\Mvc\ModelInterface $record
     */
    public function setRollbackedRecord(\Phalcon\Mvc\ModelInterface $record);

}
