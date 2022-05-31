<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Db\Column;
use Phalcon\Db\RawValue;
use Phalcon\Db\ResultInterface;
use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Query\Status;
use Phalcon\Mvc\Model\Resultset\Complex;
use Phalcon\Mvc\Model\Query\StatusInterface;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Resultset\Simple;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Db\DialectInterface;
use Phalcon\Mvc\Model\Query\Lang;

/**
 * Phalcon\Mvc\Model\Query
 *
 * This class takes a PHQL intermediate representation and executes it.
 *
 * ```php
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
 * $resultWithOutEntries = $queryWithTransaction->execute();
 * ```
 */
class Query implements \Phalcon\Mvc\Model\QueryInterface, \Phalcon\Di\InjectionAwareInterface
{
    const TYPE_DELETE = 303;

    const TYPE_INSERT = 306;

    const TYPE_SELECT = 309;

    const TYPE_UPDATE = 300;

    /**
     * @var array
     * TODO: Add default value, instead of null, also remove type check
     */
    protected $ast;

    /**
     * @var array
     */
    protected $bindParams = [];

    /**
     * @var array
     */
    protected $bindTypes = [];

    /**
     * @var mixed|null
     */
    protected $cache = null;

    /**
     * @var array|null
     */
    protected $cacheOptions;

    /**
     * @var DiInterface|null
     */
    protected $container = null;

    /**
     * @var bool
     */
    protected $enableImplicitJoins;

    /**
     * @var array
     */
    protected $intermediate;

    /**
     * @var \Phalcon\Mvc\Model\ManagerInterface|null
     */
    protected $manager = null;

    /**
     * @var \Phalcon\Mvc\Model\MetaDataInterface|null
     */
    protected $metaData = null;

    /**
     * @var array
     */
    protected $models = [];

    /**
     * @var array
     */
    protected $modelsInstances = [];

    /**
     * @var int
     */
    protected $nestingLevel = -1;

    /**
     * @var string|null
     */
    protected $phql = null;

    /**
     * @var bool
     */
    protected $sharedLock = false;

    /**
     * @var array
     */
    protected $sqlAliases = [];

    /**
     * @var array
     */
    protected $sqlAliasesModels = [];

    /**
     * @var array
     */
    protected $sqlAliasesModelsInstances = [];

    /**
     * @var array
     */
    protected $sqlColumnAliases = [];

    /**
     * @var array
     */
    protected $sqlModelsAliases = [];

    /**
     * @var int|null
     */
    protected $type;

    /**
     * @var bool
     */
    protected $uniqueRow = false;

    /**
     * TransactionInterface so that the query can wrap a transaction
     * around batch updates and intermediate selects within the transaction.
     * however if a model got a transaction set inside it will use the local
     * transaction instead of this one
     *
     * @var TransactionInterface|null
     */
    protected $transaction;

    /**
     * @var array|null
     */
    static protected $internalPhqlCache;

    /**
     * TransactionInterface so that the query can wrap a transaction
     *
     * around batch updates and intermediate selects within the transaction.
     * however if a model got a transaction set inside it will use the local
     * transaction instead of this one
     *
     * @return TransactionInterface|null
     */
    public function getTransaction()
    {
    }

    /**
     * Phalcon\Mvc\Model\Query constructor
     *
     * @param string|null $phql
     * @param DiInterface|null $container
     * @param array $options
     */
    public function __construct(string $phql = null, \Phalcon\Di\DiInterface $container = null, array $options = [])
    {
    }

    /**
     * Sets the cache parameters of the query
     *
     * @param array $cacheOptions
     * @return QueryInterface
     */
    public function cache(array $cacheOptions): QueryInterface
    {
    }

    /**
     * Destroys the internal PHQL cache
     *
     * @return void
     */
    public static function clean(): void
    {
    }

    /**
     * Executes a parsed PHQL statement
     *
     * @return mixed
     * @param array $bindParams
     * @param array $bindTypes
     */
    public function execute(array $bindParams = [], array $bindTypes = [])
    {
    }

    /**
     * Returns the current cache backend instance
     *
     * @return AdapterInterface
     */
    public function getCache(): AdapterInterface
    {
    }

    /**
     * Returns the current cache options
     *
     * @return array
     */
    public function getCacheOptions(): array
    {
    }

    /**
     * Returns default bind params
     *
     * @return array
     */
    public function getBindParams(): array
    {
    }

    /**
     * Returns default bind types
     *
     * @return array
     */
    public function getBindTypes(): array
    {
    }

    /**
     * Returns the dependency injection container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Returns the intermediate representation of the PHQL statement
     *
     * @return array
     */
    public function getIntermediate(): array
    {
    }

    /**
     * Executes the query returning the first result
     *
     * @param array $bindParams
     * @param array $bindTypes
     * @return ModelInterface
     */
    public function getSingleResult(array $bindParams = [], array $bindTypes = []): ModelInterface
    {
    }

    /**
     * Returns the SQL to be generated by the internal PHQL (only works in
     * SELECT statements)
     *
     * @return array
     */
    public function getSql(): array
    {
    }

    /**
     * Gets the type of PHQL statement executed
     *
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * Check if the query is programmed to get only the first row in the
     * resultset
     *
     * @return bool
     */
    public function getUniqueRow(): bool
    {
    }

    /**
     * Parses the intermediate code produced by Phalcon\Mvc\Model\Query\Lang
     * generating another intermediate representation that could be executed by
     * Phalcon\Mvc\Model\Query
     *
     * @return array
     */
    public function parse(): array
    {
    }

    /**
     * Set default bind parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return QueryInterface
     */
    public function setBindParams(array $bindParams, bool $merge = false): QueryInterface
    {
    }

    /**
     * Set default bind parameters
     *
     * @param array $bindTypes
     * @param bool $merge
     * @return QueryInterface
     */
    public function setBindTypes(array $bindTypes, bool $merge = false): QueryInterface
    {
    }

    /**
     * Sets the dependency injection container
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Allows to set the IR to be executed
     *
     * @param array $intermediate
     * @return QueryInterface
     */
    public function setIntermediate(array $intermediate): QueryInterface
    {
    }

    /**
     * Set SHARED LOCK clause
     *
     * @param bool $sharedLock
     * @return QueryInterface
     */
    public function setSharedLock(bool $sharedLock = false): QueryInterface
    {
    }

    /**
     * allows to wrap a transaction around all queries
     *
     * @param TransactionInterface $transaction
     * @return QueryInterface
     */
    public function setTransaction(TransactionInterface $transaction): QueryInterface
    {
    }

    /**
     * Sets the type of PHQL statement to be executed
     *
     * @param int $type
     * @return QueryInterface
     */
    public function setType(int $type): QueryInterface
    {
    }

    /**
     * Tells to the query if only the first row in the resultset must be
     * returned
     *
     * @param bool $uniqueRow
     * @return QueryInterface
     */
    public function setUniqueRow(bool $uniqueRow): QueryInterface
    {
    }

    /**
     * Executes the DELETE intermediate representation producing a
     * Phalcon\Mvc\Model\Query\Status
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return StatusInterface
     */
    final protected function executeDelete(array $intermediate, array $bindParams, array $bindTypes): StatusInterface
    {
    }

    /**
     * Executes the INSERT intermediate representation producing a
     * Phalcon\Mvc\Model\Query\Status
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return StatusInterface
     */
    final protected function executeInsert(array $intermediate, array $bindParams, array $bindTypes): StatusInterface
    {
    }

    /**
     * Executes the SELECT intermediate representation producing a
     * Phalcon\Mvc\Model\Resultset
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @param bool $simulate
     * @return array|ResultsetInterface
     */
    final protected function executeSelect(array $intermediate, array $bindParams, array $bindTypes, bool $simulate = false)
    {
    }

    /**
     * Executes the UPDATE intermediate representation producing a
     * Phalcon\Mvc\Model\Query\Status
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return StatusInterface
     */
    final protected function executeUpdate(array $intermediate, array $bindParams, array $bindTypes): StatusInterface
    {
    }

    /**
     * Resolves an expression in a single call argument
     *
     * @param array $argument
     * @return array
     */
    final protected function getCallArgument(array $argument): array
    {
    }

    /**
     * Resolves an expression in a single call argument
     *
     * @param array $expr
     * @return array
     */
    final protected function getCaseExpression(array $expr): array
    {
    }

    /**
     * Resolves an expression from its intermediate code into an array
     *
     * @param array $expr
     * @param bool $quoting
     * @return array
     */
    final protected function getExpression(array $expr, bool $quoting = true): array
    {
    }

    /**
     * Resolves an expression in a single call argument
     *
     * @param array $expr
     * @return array
     */
    final protected function getFunctionCall(array $expr): array
    {
    }

    /**
     * Returns a processed group clause for a SELECT statement
     *
     * @param array $group
     * @return array
     */
    final protected function getGroupClause(array $group): array
    {
    }

    /**
     * Returns a processed limit clause for a SELECT statement
     *
     * @param array $limitClause
     * @return array
     */
    final protected function getLimitClause(array $limitClause): array
    {
    }

    /**
     * Resolves a JOIN clause checking if the associated models exist
     *
     * @param ManagerInterface $manager
     * @param array $join
     * @return array
     */
    final protected function getJoin(ManagerInterface $manager, array $join): array
    {
    }

    /**
     * Resolves a JOIN type
     *
     * @param array $join
     * @return string
     */
    final protected function getJoinType(array $join): string
    {
    }

    /**
     * Processes the JOINs in the query returning an internal representation for
     * the database dialect
     *
     * @param array $select
     * @return array
     */
    final protected function getJoins(array $select): array
    {
    }

    /**
     * Resolves joins involving many-to-many relations
     *
     * @param string $joinSource
     * @param string $joinType
     * @param string $modelAlias
     * @param string $joinAlias
     * @param RelationInterface $relation
     * @return array
     */
    final protected function getMultiJoin(string $joinType, $joinSource, string $modelAlias, string $joinAlias, RelationInterface $relation): array
    {
    }

    /**
     * Returns a processed order clause for a SELECT statement
     *
     * @param array|string $order
     * @return array
     */
    final protected function getOrderClause($order): array
    {
    }

    /**
     * Replaces the model's name to its source name in a qualified-name
     * expression
     *
     * @param array $expr
     * @return array
     */
    final protected function getQualified(array $expr): array
    {
    }

    /**
     * Gets the read connection from the model if there is no transaction set
     * inside the query object
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return AdapterInterface
     */
    protected function getReadConnection(\Phalcon\Mvc\ModelInterface $model, array $intermediate = null, array $bindParams = [], array $bindTypes = []): AdapterInterface
    {
    }

    /**
     * Query the records on which the UPDATE/DELETE operation will be done
     *
     * @return ResultsetInterface
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     */
    final protected function getRelatedRecords(\Phalcon\Mvc\ModelInterface $model, array $intermediate, array $bindParams, array $bindTypes): ResultsetInterface
    {
    }

    /**
     * Resolves a column from its intermediate representation into an array
     * used to determine if the resultset produced is simple or complex
     *
     * @param array $column
     * @return array
     */
    final protected function getSelectColumn(array $column): array
    {
    }

    /**
     * Resolves joins involving has-one/belongs-to/has-many relations
     *
     * @param string $joinSource
     * @param string $joinType
     * @param string $modelAlias
     * @param string $joinAlias
     * @param RelationInterface $relation
     * @return array
     */
    final protected function getSingleJoin(string $joinType, $joinSource, string $modelAlias, string $joinAlias, RelationInterface $relation): array
    {
    }

    /**
     * Resolves a table in a SELECT statement checking if the model exists
     *
     * @return string
     * @param ManagerInterface $manager
     * @param array $qualifiedName
     */
    final protected function getTable(ManagerInterface $manager, array $qualifiedName)
    {
    }

    /**
     * Gets the write connection from the model if there is no transaction
     * inside the query object
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return AdapterInterface
     */
    protected function getWriteConnection(\Phalcon\Mvc\ModelInterface $model, array $intermediate = null, array $bindParams = [], array $bindTypes = []): AdapterInterface
    {
    }

    /**
     * Analyzes a DELETE intermediate code and produces an array to be executed
     * later
     *
     * @return array
     */
    final protected function _prepareDelete(): array
    {
    }

    /**
     * Analyzes an INSERT intermediate code and produces an array to be executed
     * later
     *
     * @return array
     */
    final protected function _prepareInsert(): array
    {
    }

    /**
     * Analyzes a SELECT intermediate code and produces an array to be executed later
     *
     * @param mixed $ast
     * @param bool $merge
     * @return array
     */
    final protected function _prepareSelect($ast = null, bool $merge = false): array
    {
    }

    /**
     * Analyzes an UPDATE intermediate code and produces an array to be executed
     * later
     *
     * @return array
     */
    final protected function _prepareUpdate(): array
    {
    }
}
