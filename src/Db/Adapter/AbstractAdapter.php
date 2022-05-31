<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Adapter;

use Phalcon\Db\DialectInterface;
use Phalcon\Db\ColumnInterface;
use Phalcon\Db\Enum;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\IndexInterface;
use Phalcon\Db\Reference;
use Phalcon\Db\ReferenceInterface;
use Phalcon\Db\RawValue;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;

/**
 * Base class for Phalcon\Db\Adapter adapters
 */
abstract class AbstractAdapter implements \Phalcon\Db\Adapter\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{

    /**
     * Connection ID
     *
     * @var int
     */
    static protected $connectionConsecutive = 0;

    /**
     * Active connection ID
     *
     * @var int
     */
    protected $connectionId;

    /**
     * Descriptor used to connect to a database
     *
     * @var array
     */
    protected $descriptor = [];

    /**
     * Dialect instance
     *
     * @var object
     */
    protected $dialect;

    /**
     * Name of the dialect used
     *
     * @var string
     */
    protected $dialectType;

    /**
     * Event Manager
     *
     * @var ManagerInterface|null
     */
    protected $eventsManager = null;

    /**
     * The real SQL statement - what was executed
     *
     * @var string
     */
    protected $realSqlStatement;

    /**
     * Active SQL Bind Types
     *
     * @var array
     */
    protected $sqlBindTypes = [];

    /**
     * Active SQL Statement
     *
     * @var string
     */
    protected $sqlStatement;

    /**
     * Active SQL bound parameter variables
     *
     * @var array
     */
    protected $sqlVariables = [];

    /**
     * Current transaction level
     *
     * @var int
     */
    protected $transactionLevel = 0;

    /**
     * Whether the database supports transactions with save points
     *
     * @var bool
     */
    protected $transactionsWithSavepoints = false;

    /**
     * Type of database system the adapter is used for
     *
     * @var string
     */
    protected $type;

    /**
     * Name of the dialect used
     *
     * @return string
     */
    public function getDialectType(): string
    {
    }

    /**
     * Type of database system the adapter is used for
     *
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Phalcon\Db\Adapter constructor
     *
     * @param array $descriptor = [
     *     'host' => 'localhost',
     *     'port' => '3306',
     *     'dbname' => 'blog',
     *     'username' => 'sigma'
     *     'password' => 'secret',
     *     'dialectClass' => null,
     *     'options' => [],
     *     'dsn' => null,
     *     'charset' => 'utf8mb4'
     * ]
     */
    public function __construct(array $descriptor)
    {
    }

    /**
     * Adds a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @return bool
     */
    public function addColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column): bool
    {
    }

    /**
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): bool
    {
    }

    /**
     * Adds an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return bool
     */
    public function addIndex(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): bool
    {
    }

    /**
     * Adds a primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return bool
     */
    public function addPrimaryKey(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): bool
    {
    }

    /**
     * Creates a new savepoint
     *
     * @param string $name
     * @return bool
     */
    public function createSavepoint(string $name): bool
    {
    }

    /**
     * Creates a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return bool
     */
    public function createTable(string $tableName, string $schemaName, array $definition): bool
    {
    }

    /**
     * Creates a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return bool
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): bool
    {
    }

    /**
     * Deletes data from a table using custom RBDM SQL syntax
     *
     * ```php
     * // Deleting existing robot
     * $success = $connection->delete(
     *     "robots",
     *     "id = 101"
     * );
     *
     * // Next SQL sentence is generated
     * DELETE FROM `robots` WHERE `id` = 101
     * ```
     *
     * @param array|string $table
     * @param string|null $whereCondition
     * @param array $placeholders
     * @param array $dataTypes *
     * @return bool
     */
    public function delete($table, string $whereCondition = null, array $placeholders = [], array $dataTypes = []): bool
    {
    }

    /**
     * Lists table indexes
     *
     * ```php
     * print_r(
     *     $connection->describeIndexes("robots_parts")
     * );
     * ```
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\IndexInterface[]
     */
    public function describeIndexes(string $table, string $schema = null): array
    {
    }

    /**
     * Lists table references
     *
     * ```php
     * print_r(
     *     $connection->describeReferences("robots_parts")
     * );
     * ```
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array
    {
    }

    /**
     * Drops a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return bool
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): bool
    {
    }

    /**
     * Drops a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return bool
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): bool
    {
    }

    /**
     * Drop an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param mixed $indexName
     * @return bool
     */
    public function dropIndex(string $tableName, string $schemaName, $indexName): bool
    {
    }

    /**
     * Drops a table's primary key
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): bool
    {
    }

    /**
     * Drops a table from a schema/database
     *
     * @param string $tableName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropTable(string $tableName, string $schemaName = null, bool $ifExists = true): bool
    {
    }

    /**
     * Drops a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): bool
    {
    }

    /**
     * Escapes a column/table/schema name
     *
     * ```php
     * $escapedTable = $connection->escapeIdentifier(
     *     "robots"
     * );
     *
     * $escapedTable = $connection->escapeIdentifier(
     *     [
     *         "store",
     *         "robots",
     *     ]
     * );
     * ```
     *
     * @param mixed $identifier
     * @return string
     */
    public function escapeIdentifier($identifier): string
    {
    }

    /**
     * Dumps the complete result of a query into an array
     *
     * ```php
     * // Getting all robots with associative indexes only
     * $robots = $connection->fetchAll(
     *     "SELECT FROM robots",
     *     \Phalcon\Db\Enum::FETCH_ASSOC
     * );
     *
     * foreach ($robots as $robot) {
     *     print_r($robot);
     * }
     *
     *  // Getting all robots that contains word "robot" withing the name
     * $robots = $connection->fetchAll(
     *     "SELECT FROM robots WHERE name LIKE :name",
     *     \Phalcon\Db\Enum::FETCH_ASSOC,
     *     [
     *         "name" => "%robot%",
     *     ]
     * );
     * foreach($robots as $robot) {
     *     print_r($robot);
     * }
     * ```
     *
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param array $bindParams
     * @param array $bindTypes
     * @return array
     */
    public function fetchAll(string $sqlQuery, int $fetchMode = Enum::FETCH_ASSOC, array $bindParams = [], array $bindTypes = []): array
    {
    }

    /**
     * Returns the n'th field of first row in a SQL query result
     *
     * ```php
     * // Getting count of robots
     * $robotsCount = $connection->fetchColumn("SELECT count() FROM robots");
     * print_r($robotsCount);
     *
     * // Getting name of last edited robot
     * $robot = $connection->fetchColumn(
     *     "SELECT id, name FROM robots ORDER BY modified DESC",
     *     1
     * );
     * print_r($robot);
     * ```
     *
     * @param string $sqlQuery
     * @param array $placeholders
     * @param mixed $column
     * @return string|bool
     */
    public function fetchColumn(string $sqlQuery, array $placeholders = [], $column = 0)
    {
    }

    /**
     * Returns the first row in a SQL query result
     *
     * ```php
     * // Getting first robot
     * $robot = $connection->fetchOne("SELECT FROM robots");
     * print_r($robot);
     *
     * // Getting first robot with associative indexes only
     * $robot = $connection->fetchOne(
     *     "SELECT FROM robots",
     *     \Phalcon\Db\Enum::FETCH_ASSOC
     * );
     * print_r($robot);
     * ```
     *
     * @param string $sqlQuery
     * @param mixed $fetchMode
     * @param array $bindParams
     * @param array $bindTypes
     * @return array
     */
    public function fetchOne(string $sqlQuery, $fetchMode = Enum::FETCH_ASSOC, array $bindParams = [], array $bindTypes = []): array
    {
    }

    /**
     * Returns a SQL modified with a FOR UPDATE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function forUpdate(string $sqlQuery): string
    {
    }

    /**
     * Returns the SQL column definition from a column
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * Gets a list of columns
     *
     * @param mixed $columnList
     * @return string
     */
    public function getColumnList($columnList): string
    {
    }

    /**
     * Gets the active connection unique identifier
     *
     * @return string
     */
    public function getConnectionId(): string
    {
    }

    /**
     * Returns the default identity value to be inserted in an identity column
     *
     * ```php
     * // Inserting a new robot with a valid default value for the column 'id'
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         $connection->getDefaultIdValue(),
     *         "Astro Boy",
     *         1952,
     *     ],
     *     [
     *         "id",
     *         "name",
     *         "year",
     *     ]
     * );
     * ```
     *
     * @return RawValue
     */
    public function getDefaultIdValue(): RawValue
    {
    }

    /**
     * Returns the default value to make the RBDM use the default value declared
     * in the table definition
     *
     * ```php
     * // Inserting a new robot with a valid default value for the column 'year'
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         "Astro Boy",
     *         $connection->getDefaultValue()
     *     ],
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     * ```
     *
     * @todo Return NULL if this is not supported by the adapter
     * @return RawValue
     */
    public function getDefaultValue(): RawValue
    {
    }

    /**
     * Return descriptor used to connect to the active database
     *
     * @return array
     */
    public function getDescriptor(): array
    {
    }

    /**
     * Returns internal dialect instance
     *
     * @return DialectInterface
     */
    public function getDialect(): DialectInterface
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ?ManagerInterface
    {
    }

    /**
     * Returns the savepoint name to use for nested transactions
     *
     * @return string
     */
    public function getNestedTransactionSavepointName(): string
    {
    }

    /**
     * Active SQL statement in the object without replace bound parameters
     *
     * @return string
     */
    public function getRealSQLStatement(): string
    {
    }

    /**
     * Active SQL statement in the object
     *
     * @return array
     */
    public function getSQLBindTypes(): array
    {
    }

    /**
     * Active SQL statement in the object
     *
     * @return string
     */
    public function getSQLStatement(): string
    {
    }

    /**
     * Active SQL variables in the object
     *
     * @return array
     */
    public function getSQLVariables(): array
    {
    }

    /**
     * Inserts data into a table using custom RDBMS SQL syntax
     *
     * ```php
     * // Inserting a new robot
     * $success = $connection->insert(
     *     "robots",
     *     ["Astro Boy", 1952],
     *     ["name", "year"]
     * );
     *
     * // Next SQL sentence is sent to the database system
     * INSERT INTO `robots` (`name`, `year`) VALUES ("Astro boy", 1952);
     * ```
     *
     * @param string $table
     * @param array $values
     * @param mixed $fields
     * @param mixed $dataTypes
     * @return bool
     */
    public function insert(string $table, array $values, $fields = null, $dataTypes = null): bool
    {
    }

    /**
     * Inserts data into a table using custom RBDM SQL syntax
     *
     * ```php
     * // Inserting a new robot
     * $success = $connection->insertAsDict(
     *     "robots",
     *     [
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     *
     * // Next SQL sentence is sent to the database system
     * INSERT INTO `robots` (`name`, `year`) VALUES ("Astro boy", 1952);
     * ```
     *
     * @param string $table
     * @param mixed $data
     * @param mixed $dataTypes
     * @return bool
     */
    public function insertAsDict(string $table, $data, $dataTypes = null): bool
    {
    }

    /**
     * Returns if nested transactions should use savepoints
     *
     * @return bool
     */
    public function isNestedTransactionsWithSavepoints(): bool
    {
    }

    /**
     * Appends a LIMIT clause to $sqlQuery argument
     *
     * ```php
     * echo $connection->limit("SELECT FROM robots", 5);
     * ```
     *
     * @param string $sqlQuery
     * @param int $number
     * @return string
     */
    public function limit(string $sqlQuery, int $number): string
    {
    }

    /**
     * List all tables on a database
     *
     * ```php
     * print_r(
     *     $connection->listTables("blog")
     * );
     * ```
     *
     * @param string $schemaName
     * @return array
     */
    public function listTables(string $schemaName = null): array
    {
    }

    /**
     * List all views on a database
     *
     * ```php
     * print_r(
     *     $connection->listViews("blog")
     * );
     * ```
     *
     * @param string $schemaName
     * @return array
     */
    public function listViews(string $schemaName = null): array
    {
    }

    /**
     * Modifies a table column based on a definition
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return bool
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): bool
    {
    }

    /**
     * Releases given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function releaseSavepoint(string $name): bool
    {
    }

    /**
     * Rollbacks given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function rollbackSavepoint(string $name): bool
    {
    }

    /**
     * Sets the event manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Sets the dialect used to produce the SQL
     *
     * @param \Phalcon\Db\DialectInterface $dialect
     */
    public function setDialect(\Phalcon\Db\DialectInterface $dialect)
    {
    }

    /**
     * Set if nested transactions should use savepoints
     *
     * @param bool $nestedTransactionsWithSavepoints
     * @return AdapterInterface
     */
    public function setNestedTransactionsWithSavepoints(bool $nestedTransactionsWithSavepoints): AdapterInterface
    {
    }

    /**
     * Returns a SQL modified with a LOCK IN SHARE MODE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function sharedLock(string $sqlQuery): string
    {
    }

    /**
     * Check whether the database system requires a sequence to produce
     * auto-numeric values
     *
     * @return bool
     */
    public function supportSequences(): bool
    {
    }

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * ```php
     * var_dump(
     *     $connection->tableExists("blog", "posts")
     * );
     * ```
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function tableExists(string $tableName, string $schemaName = null): bool
    {
    }

    /**
     * Gets creation options from a table
     *
     * ```php
     * print_r(
     *     $connection->tableOptions("robots")
     * );
     * ```
     *
     * @param string $tableName
     * @param string $schemaName
     * @return array
     */
    public function tableOptions(string $tableName, string $schemaName = null): array
    {
    }

    /**
     * Updates data on a table using custom RBDM SQL syntax
     *
     * ```php
     * // Updating existing robot
     * $success = $connection->update(
     *     "robots",
     *     ["name"],
     *     ["New Astro Boy"],
     *     "id = 101"
     * );
     *
     * // Next SQL sentence is sent to the database system
     * UPDATE `robots` SET `name` = "Astro boy" WHERE id = 101
     *
     * // Updating existing robot with array condition and $dataTypes
     * $success = $connection->update(
     *     "robots",
     *     ["name"],
     *     ["New Astro Boy"],
     *     [
     *         "conditions" => "id = ?",
     *         "bind"       => [$some_unsafe_id],
     *         "bindTypes"  => [PDO::PARAM_INT], // use only if you use $dataTypes param
     *     ],
     *     [
     *         PDO::PARAM_STR
     *     ]
     * );
     *
     * ```
     *
     * Warning! If $whereCondition is string it not escaped.
     *
     * @param string $table
     * @param mixed $fields
     * @param mixed $values
     * @param mixed $whereCondition
     * @param mixed $dataTypes
     * @return bool
     */
    public function update(string $table, $fields, $values, $whereCondition = null, $dataTypes = null): bool
    {
    }

    /**
     * Updates data on a table using custom RBDM SQL syntax
     * Another, more convenient syntax
     *
     * ```php
     * // Updating existing robot
     * $success = $connection->updateAsDict(
     *     "robots",
     *     [
     *         "name" => "New Astro Boy",
     *     ],
     *     "id = 101"
     * );
     *
     * // Next SQL sentence is sent to the database system
     * UPDATE `robots` SET `name` = "Astro boy" WHERE id = 101
     * ```
     *
     * @param string $table
     * @param mixed $data
     * @param mixed $whereCondition
     * @param mixed $dataTypes
     * @return bool
     */
    public function updateAsDict(string $table, $data, $whereCondition = null, $dataTypes = null): bool
    {
    }

    /**
     * Check whether the database system requires an explicit value for identity
     * columns
     *
     * @return bool
     */
    public function useExplicitIdValue(): bool
    {
    }

    /**
     * Check whether the database system support the DEFAULT
     * keyword (SQLite does not support it)
     *
     * @deprecated Will re removed in the next version
     * @return bool
     */
    public function supportsDefaultValue(): bool
    {
    }

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * ```php
     * var_dump(
     *     $connection->viewExists("active_users", "posts")
     * );
     * ```
     *
     * @param string $viewName
     * @param string $schemaName
     * @return bool
     */
    public function viewExists(string $viewName, string $schemaName = null): bool
    {
    }
}
