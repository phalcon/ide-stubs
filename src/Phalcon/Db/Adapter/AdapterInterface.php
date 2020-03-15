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
use Phalcon\Db\RawValue;

/**
 * Interface for Phalcon\Db adapters
 */
interface AdapterInterface
{

    /**
     * Adds a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @return bool
     */
    public function addColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column): bool;

    /**
     * Adds an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return bool
     */
    public function addIndex(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): bool;

    /**
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): bool;

    /**
     * Adds a primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return bool
     */
    public function addPrimaryKey(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): bool;

    /**
     * Returns the number of affected rows by the last INSERT/UPDATE/DELETE
     * reported by the database system
     *
     * @return int
     */
    public function affectedRows(): int;

    /**
     * Starts a transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function begin(bool $nesting = true): bool;

    /**
     * Closes active connection returning success. Phalcon automatically closes
     * and destroys active connections within Phalcon\Db\Pool
     *
     * @return bool
     */
    public function close(): bool;

    /**
     * Commits the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function commit(bool $nesting = true): bool;

    /**
     * This method is automatically called in \Phalcon\Db\Adapter\Pdo
     * constructor. Call it when you need to restore a database connection
     *
     * @param array $descriptor
     * @return bool
     */
    public function connect(array $descriptor = null): bool;

    /**
     * Creates a new savepoint
     *
     * @param string $name
     * @return bool
     */
    public function createSavepoint(string $name): bool;

    /**
     * Creates a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return bool
     */
    public function createTable(string $tableName, string $schemaName, array $definition): bool;

    /**
     * Creates a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return bool
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): bool;

    /**
     * Deletes data from a table using custom RDBMS SQL syntax
     *
     * @param mixed $table
     * @param mixed $whereCondition
     * @param mixed $placeholders
     * @param mixed $dataTypes
     * @return bool
     */
    public function delete($table, $whereCondition = null, $placeholders = null, $dataTypes = null): bool;

    /**
     * Returns an array of Phalcon\Db\Column objects describing a table
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ColumnInterface[]
     */
    public function describeColumns(string $table, string $schema = null): array;

    /**
     * Lists table indexes
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\IndexInterface[]
     */
    public function describeIndexes(string $table, string $schema = null): array;

    /**
     * Lists table references
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array;

    /**
     * Drops a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return bool
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): bool;

    /**
     * Drops a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return bool
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): bool;

    /**
     * Drop an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $indexName
     * @return bool
     */
    public function dropIndex(string $tableName, string $schemaName, string $indexName): bool;

    /**
     * Drops primary key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): bool;

    /**
     * Drops a table from a schema/database
     *
     * @param string $tableName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropTable(string $tableName, string $schemaName = null, bool $ifExists = true): bool;

    /**
     * Drops a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): bool;

    /**
     * Escapes a column/table/schema name
     *
     * @param mixed $identifier
     * @return string
     */
    public function escapeIdentifier($identifier): string;

    /**
     * Escapes a value to avoid SQL injections
     *
     * @param string $str
     * @return string
     */
    public function escapeString(string $str): string;

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server doesn't
     * return any rows
     *
     * @param string $sqlStatement
     * @param mixed $placeholders
     * @param mixed $dataTypes
     * @return bool
     */
    public function execute(string $sqlStatement, $placeholders = null, $dataTypes = null): bool;

    /**
     * Dumps the complete result of a query into an array
     *
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param mixed $placeholders
     * @return array
     */
    public function fetchAll(string $sqlQuery, int $fetchMode = 2, $placeholders = null): array;

    /**
     * Returns the n'th field of first row in a SQL query result
     *
     * ```php
     * // Getting count of robots
     * $robotsCount = $connection->fetchColumn("SELECT COUNT() FROM robots");
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
    public function fetchColumn(string $sqlQuery, array $placeholders = array(), $column = 0);

    /**
     * Returns the first row in a SQL query result
     *
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param mixed $placeholders
     * @return array
     */
    public function fetchOne(string $sqlQuery, int $fetchMode = 2, $placeholders = null): array;

    /**
     * Returns a SQL modified with a FOR UPDATE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function forUpdate(string $sqlQuery): string;

    /**
     * Returns the SQL column definition from a column
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string;

    /**
     * Gets a list of columns
     *
     * @param mixed $columnList
     * @return string
     */
    public function getColumnList($columnList): string;

    /**
     * Gets the active connection unique identifier
     *
     * @return string
     */
    public function getConnectionId(): string;

    /**
     * Return descriptor used to connect to the active database
     *
     * @return array
     */
    public function getDescriptor(): array;

    /**
     * Returns internal dialect instance
     *
     * @return DialectInterface
     */
    public function getDialect(): DialectInterface;

    /**
     * Returns the name of the dialect used
     *
     * @return string
     */
    public function getDialectType(): string;

    /**
     * Return the default identity value to insert in an identity column
     *
     * @return RawValue
     */
    public function getDefaultIdValue(): RawValue;

    /**
     * Return internal PDO handler
     *
     * @return \PDO
     */
    public function getInternalHandler(): \PDO;

    /**
     * Returns the savepoint name to use for nested transactions
     *
     * @return string
     */
    public function getNestedTransactionSavepointName(): string;

    /**
     * Active SQL statement in the object without replace bound parameters
     *
     * @return string
     */
    public function getRealSQLStatement(): string;

    /**
     * Active SQL statement in the object
     *
     * @return string
     */
    public function getSQLStatement(): string;

    /**
     * Active SQL statement in the object
     *
     * @return array
     */
    public function getSQLBindTypes(): array;

    /**
     * Active SQL statement in the object
     *
     * @return array
     */
    public function getSQLVariables(): array;

    /**
     * Returns type of database system the adapter is used for
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Inserts data into a table using custom RDBMS SQL syntax
     *
     * @param string $table
     * @param array $values
     * @param mixed $fields
     * @param mixed $dataTypes
     * @return bool
     */
    public function insert(string $table, array $values, $fields = null, $dataTypes = null): bool;

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
    public function insertAsDict(string $table, $data, $dataTypes = null): bool;

    /**
     * Returns if nested transactions should use savepoints
     *
     * @return bool
     */
    public function isNestedTransactionsWithSavepoints(): bool;

    /**
     * Checks whether connection is under database transaction
     *
     * @return bool
     */
    public function isUnderTransaction(): bool;

    /**
     * Returns insert id for the auto_increment column inserted in the last SQL
     * statement
     *
     * @param mixed $sequenceName
     */
    public function lastInsertId($sequenceName = null);

    /**
     * Appends a LIMIT clause to sqlQuery argument
     *
     * @param string $sqlQuery
     * @param int $number
     * @return string
     */
    public function limit(string $sqlQuery, int $number): string;

    /**
     * List all tables on a database
     *
     * @param string $schemaName
     * @return array
     */
    public function listTables(string $schemaName = null): array;

    /**
     * List all views on a database
     *
     * @param string $schemaName
     * @return array
     */
    public function listViews(string $schemaName = null): array;

    /**
     * Modifies a table column based on a definition
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return bool
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): bool;

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server returns
     * rows
     *
     * @param string $sqlStatement
     * @param mixed $placeholders
     * @param mixed $dataTypes
     * @return mixed
     */
    public function query(string $sqlStatement, $placeholders = null, $dataTypes = null);

    /**
     * Releases given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function releaseSavepoint(string $name): bool;

    /**
     * Rollbacks the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function rollback(bool $nesting = true): bool;

    /**
     * Rollbacks given savepoint
     *
     * @param string $name
     * @return bool
     */
    public function rollbackSavepoint(string $name): bool;

    /**
     * Returns a SQL modified with a LOCK IN SHARE MODE clause
     *
     * @param string $sqlQuery
     * @return string
     */
    public function sharedLock(string $sqlQuery): string;

    /**
     * Set if nested transactions should use savepoints
     *
     * @param bool $nestedTransactionsWithSavepoints
     * @return AdapterInterface
     */
    public function setNestedTransactionsWithSavepoints(bool $nestedTransactionsWithSavepoints): AdapterInterface;

    /**
     * Check whether the database system requires a sequence to produce
     * auto-numeric values
     *
     * @return bool
     */
    public function supportSequences(): bool;

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return bool
     */
    public function tableExists(string $tableName, string $schemaName = null): bool;

    /**
     * Gets creation options from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return array
     */
    public function tableOptions(string $tableName, string $schemaName = null): array;

    /**
     * Updates data on a table using custom RDBMS SQL syntax
     *
     * @param string $table
     * @param mixed $fields
     * @param mixed $values
     * @param mixed $whereCondition
     * @param mixed $dataTypes
     * @return bool
     */
    public function update(string $table, $fields, $values, $whereCondition = null, $dataTypes = null): bool;

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
    public function updateAsDict(string $table, $data, $whereCondition = null, $dataTypes = null): bool;

    /**
     * Check whether the database system requires an explicit value for identity
     * columns
     *
     * @return bool
     */
    public function useExplicitIdValue(): bool;

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * @param string $viewName
     * @param string $schemaName
     * @return bool
     */
    public function viewExists(string $viewName, string $schemaName = null): bool;
}
