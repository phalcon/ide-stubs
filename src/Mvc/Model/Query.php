<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Cache\CacheInterface;
use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Db\Column;
use Phalcon\Db\RawValue;
use Phalcon\Db\ResultInterface;
use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Query\Exceptions\AmbiguousColumn;
use Phalcon\Mvc\Model\Query\Exceptions\AmbiguousJoinRelation;
use Phalcon\Mvc\Model\Query\Exceptions\BindParameterNotInPlaceholders;
use Phalcon\Mvc\Model\Query\Exceptions\BindTypeRequiresArray;
use Phalcon\Mvc\Model\Query\Exceptions\BindValueRequired;
use Phalcon\Mvc\Model\Query\Exceptions\ColumnNotInDomain;
use Phalcon\Mvc\Model\Query\Exceptions\ColumnNotInSelectedModels;
use Phalcon\Mvc\Model\Query\Exceptions\CorruptedAst;
use Phalcon\Mvc\Model\Query\Exceptions\CorruptedDeleteAst;
use Phalcon\Mvc\Model\Query\Exceptions\CorruptedInsertAst;
use Phalcon\Mvc\Model\Query\Exceptions\CorruptedSelectAst;
use Phalcon\Mvc\Model\Query\Exceptions\CorruptedUpdateAst;
use Phalcon\Mvc\Model\Query\Exceptions\DeleteMultipleNotSupported;
use Phalcon\Mvc\Model\Query\Exceptions\DuplicateAlias;
use Phalcon\Mvc\Model\Query\Exceptions\EmptyArrayPlaceholderValue;
use Phalcon\Mvc\Model\Query\Exceptions\InsertColumnCountMismatch;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidCachedResultset;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidCachingOptions;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidColumnDefinition;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidInjectedManager;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidInjectedMetadata;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidQueryCacheService;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidResultsetClass;
use Phalcon\Mvc\Model\Query\Exceptions\InvalidResultsetRowClass;
use Phalcon\Mvc\Model\Query\Exceptions\JoinAliasAlreadyUsed;
use Phalcon\Mvc\Model\Query\Exceptions\JoinFieldCountMismatch;
use Phalcon\Mvc\Model\Query\Exceptions\MissingCacheKey;
use Phalcon\Mvc\Model\Query\Exceptions\MissingMetaData;
use Phalcon\Mvc\Model\Query\Exceptions\MissingModelAttribute;
use Phalcon\Mvc\Model\Query\Exceptions\MissingModelsManager;
use Phalcon\Mvc\Model\Query\Exceptions\MixedDatabaseSystems;
use Phalcon\Mvc\Model\Query\Exceptions\ModelsListNotLoaded;
use Phalcon\Mvc\Model\Query\Exceptions\ModelSourceNotFound;
use Phalcon\Mvc\Model\Query\Exceptions\MultipleSqlStatementsNotSupported;
use Phalcon\Mvc\Model\Query\Exceptions\NoModelForAlias;
use Phalcon\Mvc\Model\Query\Exceptions\PhqlColumnNotInMap;
use Phalcon\Mvc\Model\Query\Exceptions\ReadConnectionMissing;
use Phalcon\Mvc\Model\Query\Exceptions\RelationshipNotFound;
use Phalcon\Mvc\Model\Query\Exceptions\ResultsetClassNotFound;
use Phalcon\Mvc\Model\Query\Exceptions\ResultsetNonCacheable;
use Phalcon\Mvc\Model\Query\Exceptions\ResultsetRowClassNotFound;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownBindType;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownColumnType;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownJoinType;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownModelOrAlias;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownPhqlExpression;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownPhqlExpressionType;
use Phalcon\Mvc\Model\Query\Exceptions\UnknownPhqlStatement;
use Phalcon\Mvc\Model\Query\Exceptions\UnsafeIdentifier;
use Phalcon\Mvc\Model\Query\Exceptions\UpdateMultipleNotSupported;
use Phalcon\Mvc\Model\Query\Exceptions\WriteConnectionMissing;
use Phalcon\Mvc\Model\Query\Status;
use Phalcon\Mvc\Model\Resultset\Complex;
use Phalcon\Mvc\Model\Query\StatusInterface;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Resultset\Simple;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Db\DialectInterface;
use Phalcon\Mvc\Model\Query\Lang;
use Phalcon\Support\Settings;

/**
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
 * $phql = 'SELECT FROM Invoices';
 *
 * $myTransaction = new Transaction($di);
 * $myTransaction->begin();
 *
 * $newInvoice = new Invoices();
 * $newInvoice->setTransaction($myTransaction);
 * $newInvoice->inv_status_flag = 1;
 * $newInvoice->inv_title = "Test Invoice";
 * $newInvoice->inv_total = 100;
 * $newInvoice->save();
 *
 * $queryWithTransaction = new Query($phql, $di);
 * $queryWithTransaction->setTransaction($myTransaction);
 *
 * $resultWithEntries = $queryWithTransaction->execute();
 *
 * $queryWithOutTransaction = new Query($phql, $di);
 * $resultWithOutEntries = $queryWithTransaction->execute();
 * ```
 *
 * @phpstan-import-type mvc_model_bind_params from MvcTypes
 * @phpstan-import-type mvc_model_bind_types from MvcTypes
 * @phpstan-import-type mvc_model_cache_options from MvcTypes
 * @phpstan-import-type mvc_query_ir from MvcTypes
 * @phpstan-import-type mvc_query_ast from MvcTypes
 */
class Query implements \Phalcon\Mvc\Model\QueryInterface, \Phalcon\Di\InjectionAwareInterface
{
    /**
     * @var int
     */
    const int TYPE_DELETE = 303;

    /**
     * @var int
     */
    const int TYPE_INSERT = 306;

    /**
     * @var int
     */
    const int TYPE_SELECT = 309;

    /**
     * @var int
     */
    const int TYPE_UPDATE = 300;

    /**
     * @var array
     * TODO: Add default value, instead of null, also remove type check
     *
     * @phpstan-var mvc_query_ast
     */
    protected $ast;

    /**
     * @var array
     *
     * @phpstan-var mvc_model_bind_params
     */
    protected $bindParams = [];

    /**
     * @var array
     *
     * @phpstan-var mvc_model_bind_types
     */
    protected $bindTypes = [];

    /**
     * @var mixed|null
     */
    protected $cache = null;

    /**
     * @var array|null
     *
     * @phpstan-var mvc_model_cache_options|null
     */
    protected $cacheOptions;

    protected ?\Phalcon\Di\DiInterface $container = null;

    protected bool $enableImplicitJoins;

    /**
     * @var array
     *
     * @phpstan-var mvc_query_ir|null
     */
    protected $intermediate;

    /**
     * @var array|null
     *
     * @phpstan-var array<array-key, mvc_query_ir>|null
     */
    protected static $internalPhqlCache;

    /**
     * @var \Phalcon\Mvc\Model\ManagerInterface|null
     */
    protected $manager = null;

    /**
     * @var \Phalcon\Mvc\Model\MetaDataInterface|null
     */
    protected $metaData = null;

    /**
     * @phpstan-var array<string, string>
     */
    protected array $models = [];

    /**
     * @phpstan-var array<string, ModelInterface>
     */
    protected array $modelsInstances = [];

    protected int $nestingLevel = -1;

    /**
     * @var string|null
     */
    protected $phql = null;

    protected string $resultsetRowClass = '';

    protected bool $sharedLock = false;

    /**
     * @phpstan-var array<string, string>
     */
    protected array $sqlAliases = [];

    /**
     * @phpstan-var array<string, string>
     */
    protected array $sqlAliasesModels = [];

    /**
     * @phpstan-var array<string, ModelInterface>
     */
    protected array $sqlAliasesModelsInstances = [];

    /**
     * @phpstan-var array<int, array<string, bool>>
     */
    protected array $sqlColumnAliases = [];

    /**
     * @phpstan-var array<string, string>
     */
    protected array $sqlModelsAliases = [];

    /**
     * TransactionInterface so that the query can wrap a transaction
     * around batch updates and intermediate selects within the transaction.
     * however if a model got a transaction set inside it will use the local
     * transaction instead of this one
     */
    protected ?TransactionInterface $transaction = null;

    /**
     * @var int|null
     */
    protected $type;

    protected bool $uniqueRow = false;

    /**
     * Phalcon\Mvc\Model\Query constructor
     *
     * @param string|null $phql
     * @param DiInterface|null $container
     * @param array $options *
     * @phpstan-param array<string, mixed> $options
     */
    public function __construct(?string $phql = null, ?\Phalcon\Di\DiInterface $container = null, array $options = [])
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
     * Sets the cache parameters of the query
     *
     * @phpstan-param mvc_model_cache_options $cacheOptions
     * @param array $cacheOptions
     * @return QueryInterface
     */
    public function cache(array $cacheOptions): QueryInterface
    {
    }

    /**
     * Executes a parsed PHQL statement
     *
     * @return mixed
     *
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
     * @param array $bindParams
     * @param array $bindTypes
     */
    public function execute(array $bindParams = [], array $bindTypes = [])
    {
    }

    /**
     * Returns default bind params
     *
     * @phpstan-return mvc_model_bind_params
     * @return array
     */
    public function getBindParams(): array
    {
    }

    /**
     * Returns default bind types
     *
     * @phpstan-return mvc_model_bind_types
     * @return array
     */
    public function getBindTypes(): array
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
     * @phpstan-return mvc_model_cache_options
     * @return array
     */
    public function getCacheOptions(): array
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
     * @phpstan-return mvc_query_ir
     * @return array
     */
    public function getIntermediate(): array
    {
    }

    /**
     * Executes the query returning the first result
     *
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
     * @param array $bindParams
     * @param array $bindTypes
     * @return ModelInterface
     */
    public function getSingleResult(array $bindParams = [], array $bindTypes = []): ModelInterface
    {
    }

    /**
     * Returns an associative array with the SQL to be generated by the internal PHQL,
     * and arrays with bound parameters and their types (only works in SELECT statements).
     *
     * ```php
     * [
     *     'sql' => 'SELECT FROM co_invoices WHERE inv_cst_id = :cst_id',
     *     'bind' => ['cst_id' => 123],
     *     'bindTypes => ['cst_id' => 1] // 1 corresponds to int
     * ]
     * ```
     *
     * @phpstan-return array<string, mixed>
     * @return array
     */
    public function getSql(): array
    {
    }

    /**
     * @return TransactionInterface|null
     */
    public function getTransaction(): TransactionInterface|null
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
     * Returns the class that will be used to hydrate rows that are not mapped
     * to a model (custom columns/joins). An empty string means the default
     * Phalcon\Mvc\Model\Row is used.
     *
     * @return string
     */
    public function getResultsetRowClass(): string
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
     * @phpstan-return mvc_query_ir
     * @return array
     */
    public function parse(): array
    {
    }

    /**
     * Set default bind parameters
     *
     * @phpstan-param mvc_model_bind_params $bindParams
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
     * @phpstan-param mvc_model_bind_types $bindTypes
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
     * @phpstan-param mvc_query_ir $intermediate
     * @param array $intermediate
     * @return QueryInterface
     */
    public function setIntermediate(array $intermediate): QueryInterface
    {
    }

    /**
     * Sets the class used to hydrate rows that are not mapped to a model
     * (custom columns/joins). The class must be a subclass of
     * Phalcon\Mvc\Model\Row.
     *
     * @param string $resultsetRowClass
     * @return QueryInterface
     */
    public function setResultsetRowClass(string $resultsetRowClass): QueryInterface
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
     * @phpstan-param mvc_query_ir $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
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
     * @phpstan-param mvc_query_ir $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
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
     * @phpstan-param mvc_query_ir $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
     * @phpstan-return array<array-key, mixed>|ResultsetInterface
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @param bool $simulate
     * @return array|ResultsetInterface
     */
    final protected function executeSelect(array $intermediate, array $bindParams, array $bindTypes, bool $simulate = false): ResultsetInterface|array
    {
    }

    /**
     * Executes the UPDATE intermediate representation producing a
     * Phalcon\Mvc\Model\Query\Status
     *
     * @phpstan-param mvc_query_ir $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
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
     * @phpstan-param array<array-key, mixed> $argument
     * @phpstan-return array<array-key, mixed>
     * @param array $argument
     * @return array
     */
    final protected function getCallArgument(array $argument): array
    {
    }

    /**
     * Resolves an expression in a single call argument
     *
     * @phpstan-param array<array-key, mixed> $expr
     * @phpstan-return array<string, mixed>
     * @param array $expr
     * @return array
     */
    final protected function getCaseExpression(array $expr): array
    {
    }

    /**
     * Resolves an expression from its intermediate code into an array
     *
     * @phpstan-param array<array-key, mixed> $expr
     * @phpstan-return array<array-key, mixed>
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
     * @phpstan-param array<array-key, mixed> $expr
     * @phpstan-return array<string, mixed>
     * @param array $expr
     * @return array
     */
    final protected function getFunctionCall(array $expr): array
    {
    }

    /**
     * Returns a processed group clause for a SELECT statement
     *
     * @phpstan-param array<array-key, mixed> $group
     * @phpstan-return list<array<array-key, mixed>>
     * @param array $group
     * @return array
     */
    final protected function getGroupClause(array $group): array
    {
    }

    /**
     * Resolves a JOIN clause checking if the associated models exist
     *
     * @phpstan-param array<array-key, mixed> $join
     * @param ManagerInterface $manager
     * @param array $join
     * @return array
     */
    final protected function getJoin(ManagerInterface $manager, array $join): array
    {
    }

    /**
     * Processes the JOINs in the query returning an internal representation for
     * the database dialect
     *
     * @phpstan-param mvc_query_ir $select
     * @phpstan-return array<array-key, mixed>
     * @param array $select
     * @return array
     */
    final protected function getJoins(array $select): array
    {
    }

    /**
     * Resolves a JOIN type
     *
     * @phpstan-param array<array-key, mixed> $join
     * @param array $join
     * @return string
     */
    final protected function getJoinType(array $join): string
    {
    }

    /**
     * Returns a processed limit clause for a SELECT statement
     *
     * @phpstan-param array<array-key, mixed> $limitClause
     * @phpstan-return array<string, mixed>
     * @param array $limitClause
     * @return array
     */
    final protected function getLimitClause(array $limitClause): array
    {
    }

    /**
     * Resolves joins involving many-to-many relations
     *
     * @param string $joinSource *
     * @phpstan-param array<array-key, mixed>|string $joinSource
     * @phpstan-return array<array-key, mixed>
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
     * @param array|string $order *
     * @phpstan-return array<array-key, mixed>
     * @return array
     */
    final protected function getOrderClause($order): array
    {
    }

    /**
     * Replaces the model's name to its source name in a qualified-name
     * expression
     *
     * @phpstan-param array<array-key, mixed> $expr
     * @phpstan-return array<string, mixed>
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
     * @phpstan-param mvc_query_ir|null $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array|null $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return AdapterInterface
     */
    protected function getReadConnection(\Phalcon\Mvc\ModelInterface $model, ?array $intermediate = null, array $bindParams = [], array $bindTypes = []): AdapterInterface
    {
    }

    /**
     * Query the records on which the UPDATE/DELETE operation will be done
     *
     * @return ResultsetInterface
     *
     * @phpstan-param mvc_query_ir $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
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
     * @phpstan-param array<array-key, mixed> $column
     * @phpstan-return array<array-key, mixed>
     * @param array $column
     * @return array
     */
    final protected function getSelectColumn(array $column): array
    {
    }

    /**
     * Resolves joins involving has-one/belongs-to/has-many relations
     *
     * @param string $joinSource *
     * @phpstan-return array<string, mixed>
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
     *
     * @phpstan-param array<array-key, mixed> $qualifiedName
     * @phpstan-return array<array-key, mixed>|string
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
     * @phpstan-param mvc_query_ir|null $intermediate
     * @phpstan-param mvc_model_bind_params $bindParams
     * @phpstan-param mvc_model_bind_types $bindTypes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array|null $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     * @return AdapterInterface
     */
    protected function getWriteConnection(\Phalcon\Mvc\ModelInterface $model, ?array $intermediate = null, array $bindParams = [], array $bindTypes = []): AdapterInterface
    {
    }

    /**
     * Analyzes a DELETE intermediate code and produces an array to be executed
     * later
     *
     * @phpstan-return mvc_query_ir
     * @return array
     */
    final protected function prepareDelete(): array
    {
    }

    /**
     * Analyzes an INSERT intermediate code and produces an array to be executed
     * later
     *
     * @phpstan-return mvc_query_ir
     * @return array
     */
    final protected function prepareInsert(): array
    {
    }

    /**
     * Analyzes a SELECT intermediate code and produces an array to be executed later
     *
     * @phpstan-param mvc_query_ast|null $ast
     * @phpstan-return mvc_query_ir
     * @param mixed $ast
     * @param bool $merge
     * @return array
     */
    final protected function prepareSelect($ast = null, bool $merge = false): array
    {
    }

    /**
     * Analyzes an UPDATE intermediate code and produces an array to be executed
     * later
     *
     * @phpstan-return mvc_query_ir
     * @return array
     */
    final protected function prepareUpdate(): array
    {
    }

    /**
     * Refreshes the schema/source of every model referenced in a cached
     * intermediate representation. The PHQL cache is keyed by the PHQL
     * string only, so a model that switches its schema or source at
     * runtime (for instance via setSchema()/setSource() in initialize())
     * would otherwise see the value frozen at first parse. See #17020.
     *
     * @phpstan-param mvc_query_ir $irPhql
     * @phpstan-return mvc_query_ir
     * @param array $irPhql
     * @return array
     */
    final protected function refreshSchemasInIntermediate(array $irPhql): array
    {
    }
}
