<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Mvc\Model\CriteriaInterface;
use Phalcon\Mvc\Model\MetaDataInterface;
use Phalcon\Mvc\Model\ResultsetInterface;

/**
 * Phalcon\Mvc\ModelInterface
 *
 * Interface for Phalcon\Mvc\Model
 */
interface ModelInterface
{

    /**
     * Appends a customized message on the validation process
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return ModelInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ModelInterface;

    /**
     * Assigns values to a model from an array
     *
     * @param array $columnMap
     * @param array $data
     * @param mixed $whiteList
     * @param mixed $dataColumnMap
     * @return ModelInterface
     */
    public function assign(array $data, $whiteList = null, $dataColumnMap = null): ModelInterface;

    /**
     * Allows to calculate the average value on a column matching the specified
     * conditions
     *
     * @param array $parameters
     * @return double | ResultsetInterface
     */
    public static function average($parameters = null);

    /**
     * Assigns values to a model from an array returning a new model
     *
     * @param ModelInterface $base
     * @param array $data
     * @param int $dirtyState
     * @return ModelInterface
     */
    public static function cloneResult(ModelInterface $base, array $data, int $dirtyState = 0): ModelInterface;

    /**
     * Assigns values to a model from an array returning a new model
     *
     * @param \Phalcon\Mvc\Model $base
     * @param array $columnMap
     * @return \Phalcon\Mvc\Model result
     * @param array $data
     * @param int $dirtyState
     * @param bool $keepSnapshots
     */
    public static function cloneResultMap($base, array $data, $columnMap, int $dirtyState = 0, bool $keepSnapshots = null): ModelInterface;

    /**
     * Returns an hydrated result based on the data and the column map
     *
     * @param array $columnMap
     * @param array $data
     * @param int $hydrationMode
     */
    public static function cloneResultMapHydrate(array $data, $columnMap, int $hydrationMode);

    /**
     * Allows to count how many records match the specified conditions
     *
     * Returns an integer for simple queries or a ResultsetInterface
     * instance for when the GROUP condition is used. The results will
     * contain the count of each group.
     *
     * @param array $parameters
     * @return int|\Phalcon\Mvc\Model\ResultsetInterface
     */
    public static function count($parameters = null);

    /**
     * Inserts a model instance. If the instance already exists in the
     * persistence it will throw an exception. Returning true on success or
     * false otherwise.
     *
     * @return bool
     */
    public function create(): bool;

    /**
     * Deletes a model instance. Returning true on success or false otherwise.
     *
     * @return bool
     */
    public function delete(): bool;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ResultsetInterface
     */
    public static function find($parameters = null): ResultsetInterface;

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param array $parameters
     * @return ModelInterface|null
     */
    public static function findFirst($parameters = null): ?ModelInterface;

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events
     * manager are notified
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEvent(string $eventName): bool;

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events
     * manager are notified. This method stops if one of the callbacks/listeners
     * returns bool false
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEventCancel(string $eventName): bool;

    /**
     * Returns one of the DIRTY_STATE_ constants telling if the record exists
     * in the database or not
     *
     * @return int
     */
    public function getDirtyState(): int;

    /**
     * Returns array of validation messages
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Returns the models meta-data service related to the entity instance.
     *
     * @return MetaDataInterface
     */
    public function getModelsMetaData(): MetaDataInterface;

    /**
     * Returns the type of the latest operation performed by the ORM
     * Returns one of the OP_ class constants
     *
     * @return int
     */
    public function getOperationMade(): int;

    /**
     * Gets internal database connection
     *
     * @return AdapterInterface
     */
    public function getReadConnection(): AdapterInterface;

    /**
     * Returns DependencyInjection connection service used to read data
     *
     * @return string
     */
    public function getReadConnectionService(): string;

    /**
     * Returns related records based on defined relations
     *
     * @param array $arguments
     * @return \Phalcon\Mvc\Model\Resultset\Simple|Phalcon\Mvc\Model\Resultset\Simple|false
     * @param string $alias
     */
    public function getRelated(string $alias, $arguments = null);

    /**
     * Returns schema name where table mapped is located
     *
     * @return string
     */
    public function getSchema(): string;

    /**
     * Returns table name mapped in the model
     *
     * @return string
     */
    public function getSource(): string;

    /**
     * Gets internal database connection
     *
     * @return AdapterInterface
     */
    public function getWriteConnection(): AdapterInterface;

    /**
     * Returns DependencyInjection connection service used to write data
     *
     * @return string
     */
    public function getWriteConnectionService(): string;

    /**
     * Allows to get the maximum value of a column that match the specified
     * conditions
     *
     * @param array $parameters
     * @return mixed
     */
    public static function maximum($parameters = null);

    /**
     * Allows to get the minimum value of a column that match the specified
     * conditions
     *
     * @param array $parameters
     * @return mixed
     */
    public static function minimum($parameters = null);

    /**
     * Create a criteria for a specific model
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return CriteriaInterface
     */
    public static function query(\Phalcon\Di\DiInterface $container = null): CriteriaInterface;

    /**
     * Refreshes the model attributes re-querying the record from the database
     *
     * @return ModelInterface
     */
    public function refresh(): ModelInterface;

    /**
     * Inserts or updates a model instance. Returning true on success or false
     * otherwise.
     *
     * @return bool
     */
    public function save(): bool;

    /**
     * Sets both read/write connection services
     *
     * @param string $connectionService
     * @return void
     */
    public function setConnectionService(string $connectionService);

    /**
     * Sets the dirty state of the object using one of the DIRTY_STATE_
     * constants
     *
     * @param int $dirtyState
     * @return bool|ModelInterface
     */
    public function setDirtyState(int $dirtyState);

    /**
     * Sets the DependencyInjection connection service used to read data
     *
     * @param string $connectionService
     * @return void
     */
    public function setReadConnectionService(string $connectionService);

    /**
     * Sets the record's snapshot data. This method is used internally to set
     * snapshot data when the model was set up to keep snapshot data
     *
     * @param array $columnMap
     * @param array $data
     * @return void
     */
    public function setSnapshotData(array $data, $columnMap = null);

    /**
     * Sets a transaction related to the Model instance
     *
     * @param \Phalcon\Mvc\Model\TransactionInterface $transaction
     * @return ModelInterface
     */
    public function setTransaction(\Phalcon\Mvc\Model\TransactionInterface $transaction): ModelInterface;

    /**
     * Sets the DependencyInjection connection service used to write data
     *
     * @param string $connectionService
     * @return void
     */
    public function setWriteConnectionService(string $connectionService);

    /**
     * Skips the current operation forcing a success state
     *
     * @param bool $skip
     * @return void
     */
    public function skipOperation(bool $skip);

    /**
     * Allows to calculate a sum on a column that match the specified conditions
     *
     * @param array $parameters
     * @return double | ResultsetInterface
     */
    public static function sum($parameters = null);

    /**
     * Check whether validation process has generated any messages
     *
     * @return bool
     */
    public function validationHasFailed(): bool;

    /**
     * Updates a model instance. If the instance doesn't exist in the
     * persistence it will throw an exception. Returning true on success or
     * false otherwise.
     *
     * @return bool
     */
    public function update(): bool;
}
