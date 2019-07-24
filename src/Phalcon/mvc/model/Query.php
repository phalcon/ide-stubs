<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\Query
 *
 * This class takes a PHQL intermediate representation and executes it.
 *
 * <code>
 * $phql = "SELECT c.price0.16 AS taxes, c. FROM Cars AS c JOIN Brands AS b
 *          WHERE b.name = :name: ORDER BY c.name";
 *
 * $result = $manager->executeQuery(
 *     $phql,
 *     [
 *         "name" => "Lamborghini",
 *     ]
 * );
 *
 * foreach ($result as $row) {
 *     echo "Name: ",  $row->cars->name, "\n";
 *     echo "Price: ", $row->cars->price, "\n";
 *     echo "Taxes: ", $row->taxes, "\n";
 * }
 *
 * // with transaction
 * use Phalcon\Mvc\Model\Query;
 * use Phalcon\Mvc\Model\Transaction;
 *
 * // $di needs to have the service "db" registered for this to work
 * $di = Phalcon\Di\FactoryDefault::getDefault();
 *
 * $phql = 'SELECT FROM robot';
 *
 * $myTransaction = new Transaction($di);
 * $myTransaction->begin();
 *
 * $newRobot = new Robot();
 * $newRobot->setTransaction($myTransaction);
 * $newRobot->type = "mechanical";
 * $newRobot->name = "Astro Boy";
 * $newRobot->year = 1952;
 * $newRobot->save();
 *
 * $queryWithTransaction = new Query($phql, $di);
 * $queryWithTransaction->setTransaction($myTransaction);
 *
 * $resultWithEntries = $queryWithTransaction->execute();
 *
 * $queryWithOutTransaction = new Query($phql, $di);
 * $resultWithOutEntries = $queryWithTransaction->execute()
 *
 * </code>
 */
class Query implements \Phalcon\Mvc\Model\QueryInterface, \Phalcon\Di\InjectionAwareInterface
{

    const TYPE_SELECT = 309;


    const TYPE_INSERT = 306;


    const TYPE_UPDATE = 300;


    const TYPE_DELETE = 303;


    protected $_dependencyInjector;


    protected $_manager;


    protected $_metaData;


    protected $_type;


    protected $_phql;


    protected $_ast;


    protected $_intermediate;


    protected $_models;


    protected $_sqlAliases;


    protected $_sqlAliasesModels;


    protected $_sqlModelsAliases;


    protected $_sqlAliasesModelsInstances;


    protected $_sqlColumnAliases;


    protected $_modelsInstances;


    protected $_cache;


    protected $_cacheOptions;


    protected $_uniqueRow;


    protected $_bindParams;


    protected $_bindTypes;


    protected $_enableImplicitJoins;


    protected $_sharedLock;

    /**
     * TransactionInterface so that the query can wrap a transaction
     * around batch updates and intermediate selects within the transaction.
     * however if a model got a transaction set inside it will use the local transaction instead of this one
     */
    protected $_transaction;


    static protected $_irPhqlCache;


    /**
     * TransactionInterface so that the query can wrap a transaction
     *
     * around batch updates and intermediate selects within the transaction.
     * however if a model got a transaction set inside it will use the local transaction instead of this one
     */
    public function getTransaction() {}

    /**
     * Phalcon\Mvc\Model\Query constructor
     *
     * @param string $phql
     * @param \Phalcon\DiInterface $dependencyInjector
     * @param mixed $options
     */
    public function __construct($phql = null, \Phalcon\DiInterface $dependencyInjector = null, $options = null) {}

    /**
     * Sets the dependency injection container
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector) {}

    /**
     * Returns the dependency injection container
     *
     * @return \Phalcon\DiInterface
     */
    public function getDI() {}

    /**
     * Tells to the query if only the first row in the resultset must be returned
     *
     * @param bool $uniqueRow
     * @return Query
     */
    public function setUniqueRow($uniqueRow) {}

    /**
     * Check if the query is programmed to get only the first row in the resultset
     *
     * @return bool
     */
    public function getUniqueRow() {}

    /**
     * Replaces the model's name to its source name in a qualified-name expression
     *
     * @param array $expr
     * @return array
     */
    protected final function _getQualified(array $expr) {}

    /**
     * Resolves an expression in a single call argument
     *
     * @param array $argument
     * @return array
     */
    protected final function _getCallArgument(array $argument) {}

    /**
     * Resolves an expression in a single call argument
     *
     * @param array $expr
     * @return array
     */
    protected final function _getCaseExpression(array $expr) {}

    /**
     * Resolves an expression in a single call argument
     *
     * @param array $expr
     * @return array
     */
    protected final function _getFunctionCall(array $expr) {}

    /**
     * Resolves an expression from its intermediate code into a string
     *
     * @param array $expr
     * @param boolean $quoting
     * @return string
     */
    protected final function _getExpression($expr, $quoting = true) {}

    /**
     * Resolves a column from its intermediate representation into an array used to determine
     * if the resultset produced is simple or complex
     *
     * @param array $column
     * @return array
     */
    protected final function _getSelectColumn(array $column) {}

    /**
     * Resolves a table in a SELECT statement checking if the model exists
     *
     * @param \Phalcon\Mvc\Model\ManagerInterface $manager
     * @param array $qualifiedName
     * @return string
     */
    protected final function _getTable(\Phalcon\Mvc\Model\ManagerInterface $manager, $qualifiedName) {}

    /**
     * Resolves a JOIN clause checking if the associated models exist
     *
     * @param \Phalcon\Mvc\Model\ManagerInterface $manager
     * @param mixed $join
     * @return array
     */
    protected final function _getJoin(\Phalcon\Mvc\Model\ManagerInterface $manager, $join) {}

    /**
     * Resolves a JOIN type
     *
     * @param array $join
     * @return string
     */
    protected final function _getJoinType($join) {}

    /**
     * Resolves joins involving has-one/belongs-to/has-many relations
     *
     * @param string $joinType
     * @param string $joinSource
     * @param string $modelAlias
     * @param string $joinAlias
     * @param \Phalcon\Mvc\Model\RelationInterface $relation
     * @return array
     */
    protected final function _getSingleJoin($joinType, $joinSource, $modelAlias, $joinAlias, \Phalcon\Mvc\Model\RelationInterface $relation) {}

    /**
     * Resolves joins involving many-to-many relations
     *
     * @param string $joinType
     * @param string $joinSource
     * @param string $modelAlias
     * @param string $joinAlias
     * @param \Phalcon\Mvc\Model\RelationInterface $relation
     * @return array
     */
    protected final function _getMultiJoin($joinType, $joinSource, $modelAlias, $joinAlias, \Phalcon\Mvc\Model\RelationInterface $relation) {}

    /**
     * Processes the JOINs in the query returning an internal representation for the database dialect
     *
     * @param array $select
     * @return array
     */
    protected final function _getJoins($select) {}

    /**
     * Returns a processed order clause for a SELECT statement
     *
     * @param array|string $order
     * @return array
     */
    protected final function _getOrderClause($order) {}

    /**
     * Returns a processed group clause for a SELECT statement
     *
     * @param array $group
     * @return array
     */
    protected final function _getGroupClause(array $group) {}

    /**
     * Returns a processed limit clause for a SELECT statement
     *
     * @param array $limitClause
     * @return array
     */
    protected final function _getLimitClause(array $limitClause) {}

    /**
     * Analyzes a SELECT intermediate code and produces an array to be executed later
     *
     * @param mixed $ast
     * @param mixed $merge
     * @return array
     */
    protected final function _prepareSelect($ast = null, $merge = null) {}

    /**
     * Analyzes an INSERT intermediate code and produces an array to be executed later
     *
     * @return array
     */
    protected final function _prepareInsert() {}

    /**
     * Analyzes an UPDATE intermediate code and produces an array to be executed later
     *
     * @return array
     */
    protected final function _prepareUpdate() {}

    /**
     * Analyzes a DELETE intermediate code and produces an array to be executed later
     *
     * @return array
     */
    protected final function _prepareDelete() {}

    /**
     * Parses the intermediate code produced by Phalcon\Mvc\Model\Query\Lang generating another
     * intermediate representation that could be executed by Phalcon\Mvc\Model\Query
     *
     * @return array
     */
    public function parse() {}

    /**
     * Returns the current cache backend instance
     *
     * @return \Phalcon\Cache\BackendInterface
     */
    public function getCache() {}

    /**
     * Executes the SELECT intermediate representation producing a Phalcon\Mvc\Model\Resultset
     *
     * @param mixed $intermediate
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @param bool $simulate
     * @return array|\Phalcon\Mvc\Model\ResultsetInterface
     */
    protected final function _executeSelect($intermediate, $bindParams, $bindTypes, $simulate = false) {}

    /**
     * Executes the INSERT intermediate representation producing a Phalcon\Mvc\Model\Query\Status
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\StatusInterface
     */
    protected final function _executeInsert($intermediate, $bindParams, $bindTypes) {}

    /**
     * Executes the UPDATE intermediate representation producing a Phalcon\Mvc\Model\Query\Status
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\StatusInterface
     */
    protected final function _executeUpdate($intermediate, $bindParams, $bindTypes) {}

    /**
     * Executes the DELETE intermediate representation producing a Phalcon\Mvc\Model\Query\Status
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\Query\StatusInterface
     */
    protected final function _executeDelete($intermediate, $bindParams, $bindTypes) {}

    /**
     * Query the records on which the UPDATE/DELETE operation well be done
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    protected final function _getRelatedRecords(\Phalcon\Mvc\ModelInterface $model, $intermediate, $bindParams, $bindTypes) {}

    /**
     * Executes a parsed PHQL statement
     *
     * @param array $bindParams
     * @param array $bindTypes
     * @return mixed
     */
    public function execute($bindParams = null, $bindTypes = null) {}

    /**
     * Executes the query returning the first result
     *
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getSingleResult($bindParams = null, $bindTypes = null) {}

    /**
     * Sets the type of PHQL statement to be executed
     *
     * @param int $type
     * @return Query
     */
    public function setType($type) {}

    /**
     * Gets the type of PHQL statement executed
     *
     * @return int
     */
    public function getType() {}

    /**
     * Set default bind parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return Query
     */
    public function setBindParams(array $bindParams, $merge = false) {}

    /**
     * Returns default bind params
     *
     * @return array
     */
    public function getBindParams() {}

    /**
     * Set default bind parameters
     *
     * @param array $bindTypes
     * @param bool $merge
     * @return Query
     */
    public function setBindTypes(array $bindTypes, $merge = false) {}

    /**
     * Set SHARED LOCK clause
     *
     * @param bool $sharedLock
     * @return Query
     */
    public function setSharedLock($sharedLock = false) {}

    /**
     * Returns default bind types
     *
     * @return array
     */
    public function getBindTypes() {}

    /**
     * Allows to set the IR to be executed
     *
     * @param array $intermediate
     * @return Query
     */
    public function setIntermediate(array $intermediate) {}

    /**
     * Returns the intermediate representation of the PHQL statement
     *
     * @return array
     */
    public function getIntermediate() {}

    /**
     * Sets the cache parameters of the query
     *
     * @param mixed $cacheOptions
     * @return Query
     */
    public function cache($cacheOptions) {}

    /**
     * Returns the current cache options
     *
     * @param array
     */
    public function getCacheOptions() {}

    /**
     * Returns the SQL to be generated by the internal PHQL (only works in SELECT statements)
     *
     * @return array
     */
    public function getSql() {}

    /**
     * Destroys the internal PHQL cache
     */
    public static function clean() {}

    /**
     * Gets the read connection from the model if there is no transaction set inside the query object
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Db\AdapterInterface
     */
    protected function getReadConnection(\Phalcon\Mvc\ModelInterface $model, array $intermediate = null, array $bindParams = null, array $bindTypes = null) {}

    /**
     * Gets the write connection from the model if there is no transaction inside the query object
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return \Phalcon\Db\AdapterInterface
     */
    protected function getWriteConnection(\Phalcon\Mvc\ModelInterface $model, array $intermediate = null, array $bindParams = null, array $bindTypes = null) {}

    /**
     * allows to wrap a transaction around all queries
     *
     * @param \Phalcon\Mvc\Model\TransactionInterface $transaction
     * @return Query
     */
    public function setTransaction(\Phalcon\Mvc\Model\TransactionInterface $transaction) {}

}
