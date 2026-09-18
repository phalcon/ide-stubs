<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Db\Adapter;

use PDOStatement;
use Phalcon\Contracts\Db\DbTypes;
use Phalcon\Db\ColumnInterface;
use Phalcon\Db\DialectInterface;
use Phalcon\Db\IndexInterface;
use Phalcon\Db\RawValue;
use Phalcon\Db\ReferenceInterface;
use Phalcon\Db\ResultInterface;

/**
 * Canonical contract for Phalcon\Db adapters.
 *
 * @phpstan-import-type db_bind_params from DbTypes
 * @phpstan-import-type db_bind_types from DbTypes
 * @phpstan-import-type db_column_list from DbTypes
 * @phpstan-import-type db_column_names from DbTypes
 * @phpstan-import-type db_descriptor from DbTypes
 * @phpstan-import-type db_dict from DbTypes
 * @phpstan-import-type db_identifier from DbTypes
 * @phpstan-import-type db_limit_number from DbTypes
 * @phpstan-import-type db_row from DbTypes
 * @phpstan-import-type db_rows from DbTypes
 * @phpstan-import-type db_table_definition from DbTypes
 * @phpstan-import-type db_table_identifier from DbTypes
 * @phpstan-import-type db_table_names from DbTypes
 * @phpstan-import-type db_table_options from DbTypes
 * @phpstan-import-type db_view_definition from DbTypes
 * @phpstan-import-type db_where_condition from DbTypes
 *
 * @todo v7 - these will become required interface members. They are
 *            omitted from the v5 line to avoid breaking third-party
 *            implementors:
 *              - addCheck()                : bool
 *              - createMaterializedView()  : bool
 *              - dropCheck()               : bool
 *              - dropMaterializedView()    : bool
 *              - executePrepared()         : PDOStatement
 *              - onConflictUpdate()        : string
 *              - prepare()                 : PDOStatement
 *              - refreshMaterializedView() : bool
 *              - returning()               : string
 *
 * The PDO adapters carry the two statement members above and the framework
 * calls them on the interface. They join the interface in the next major;
 * until then the tags below record what they provide.
 *
 * @method PDOStatement executePrepared(PDOStatement $statement, db_bind_params $placeholders, db_bind_types $dataTypes)
 * @method PDOStatement prepare(string $sqlStatement)
 */
interface Adapter
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
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): bool;

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
     * @return void
     */
    public function close(): void;

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
     * @phpstan-param db_descriptor $descriptor
     * @param array $descriptor
     * @return void
     */
    public function connect(array $descriptor = []): void;

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
     * @phpstan-param db_table_definition $definition
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return bool
     */
    public function createTable(string $tableName, string $schemaName, array $definition): bool;

    /**
     * Creates a view
     *
     * @phpstan-param db_view_definition $definition
     * @param string $viewName
     * @param array $definition
     * @param string|null $schemaName
     * @return bool
     */
    public function createView(string $viewName, array $definition, ?string $schemaName = null): bool;

    /**
     * Deletes data from a table using custom RDBMS SQL syntax
     *
     * @phpstan-param db_table_identifier $table
     * @phpstan-param db_bind_params $placeholders
     * @phpstan-param db_bind_types  $dataTypes
     * @param mixed $table
     * @param string|null $whereCondition
     * @param array $placeholders
     * @param array $dataTypes
     * @return bool
     */
    public function delete($table, ?string $whereCondition = null, array $placeholders = [], array $dataTypes = []): bool;

    /**
     * Returns an array of Phalcon\Db\Column objects describing a table
     *
     * @param string $table
     * @param string|null $schema
     * @return array|\Phalcon\Db\ColumnInterface[]
     */
    public function describeColumns(string $table, ?string $schema = null): array;

    /**
     * Lists table indexes
     *
     * @param string $table
     * @param string|null $schema
     * @return array|\Phalcon\Db\IndexInterface[]
     */
    public function describeIndexes(string $table, ?string $schema = null): array;

    /**
     * Lists table references
     *
     * @param string $table
     * @param string|null $schema
     * @return array|\Phalcon\Db\ReferenceInterface[]
     */
    public function describeReferences(string $table, ?string $schema = null): array;

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
     * @param string|null $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropTable(string $tableName, ?string $schemaName = null, bool $ifExists = true): bool;

    /**
     * Drops a view
     *
     * @param string $viewName
     * @param string|null $schemaName
     * @param bool $ifExists
     * @return bool
     */
    public function dropView(string $viewName, ?string $schemaName = null, bool $ifExists = true): bool;

    /**
     * Escapes a column/table/schema name
     *
     * @phpstan-param db_identifier $identifier
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
     * Use this method only when the SQL statement sent to the server does not
     * return any rows
     *
     * @phpstan-param db_bind_params $bindParams
     * @phpstan-param db_bind_types  $bindTypes
     * @param string $sqlStatement
     * @param array $bindParams
     * @param array $bindTypes
     * @return bool
     */
    public function execute(string $sqlStatement, array $bindParams = [], array $bindTypes = []): bool;

    /**
     * Dumps the complete result of a query into an array
     *
     * @phpstan-param db_bind_params $bindParams
     * @phpstan-param db_bind_types  $bindTypes
     *
     * @phpstan-return db_rows
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param array $bindParams
     * @param array $bindTypes
     * @return array
     */
    public function fetchAll(string $sqlQuery, int $fetchMode = 2, array $bindParams = [], array $bindTypes = []): array;

    /**
     * Returns the n'th field of first row in a SQL query result
     *
     * ```php
     * // Getting count of invoices
     * $invoicesCount = $connection->fetchColumn("SELECT COUNT() FROM co_invoices");
     * print_r($invoicesCount);
     *
     * // Getting the title of the last created invoice
     * $invoice = $connection->fetchColumn(
     *     "SELECT inv_id, inv_title FROM co_invoices ORDER BY inv_created_at DESC",
     *     1
     * );
     * print_r($invoice);
     * ```
     *
     * @phpstan-param db_bind_params $placeholders
     *
     * @phpstan-param int|string $column
     * @param string $sqlQuery
     * @param array $placeholders
     * @param mixed $column
     * @return string|bool
     */
    public function fetchColumn(string $sqlQuery, array $placeholders = [], $column = 0): bool|string;

    /**
     * Returns the first row in a SQL query result
     *
     * @phpstan-param db_bind_params $bindParams
     * @phpstan-param db_bind_types  $bindTypes
     *
     * @phpstan-return db_row
     * @param string $sqlQuery
     * @param int $fetchMode
     * @param array $bindParams
     * @param array $bindTypes
     * @return array
     */
    public function fetchOne(string $sqlQuery, int $fetchMode = 2, array $bindParams = [], array $bindTypes = []): array;

    /**
     * Returns a SQL modified with a FOR UPDATE clause. The optional `modifier`
     * appends a row-lock disposition keyword - pass `Dialect::LOCK_NOWAIT`
     * or `Dialect::LOCK_SKIP_LOCKED` (or leave as `Dialect::LOCK_NONE`).
     *
     * @param string $sqlQuery
     * @param string $modifier
     * @return string
     */
    public function forUpdate(string $sqlQuery, string $modifier = ''): string;

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
     * @phpstan-param db_column_list $columnList
     * @param mixed $columnList
     * @return string
     */
    public function getColumnList($columnList): string;

    /**
     * Gets the active connection unique identifier
     *
     * @return int
     */
    public function getConnectionId(): int;

    /**
     * Return the default identity value to insert in an identity column
     *
     * @return RawValue
     */
    public function getDefaultIdValue(): RawValue;

    /**
     * Returns the default value to make the RBDM use the default value declared
     * in the table definition
     *
     * ```php
     * // Inserting a new invoice with a valid default value for the column 'inv_total'
     * $success = $connection->insert(
     *     "co_invoices",
     *     [
     *         "Test Invoice",
     *         $connection->getDefaultValue()
     *     ],
     *     [
     *         "inv_title",
     *         "inv_total",
     *     ]
     * );
     * ```
     *
     * @todo Return NULL if this is not supported by the adapter
     * @return RawValue|null
     */
    public function getDefaultValue(): RawValue|null;

    /**
     * Return descriptor used to connect to the active database
     *
     * @phpstan-return db_descriptor
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
     * Return internal PDO handler
     *
     * @return mixed
     */
    public function getInternalHandler(): mixed;

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
     * @phpstan-return db_bind_types
     * @return array
     */
    public function getSQLBindTypes(): array;

    /**
     * Active SQL statement in the object
     *
     * @return string
     */
    public function getSQLStatement(): string;

    /**
     * Active SQL statement in the object
     *
     * @phpstan-return db_bind_params
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
     * @phpstan-param db_bind_params      $values
     * @phpstan-param db_column_names|null $fields
     * @phpstan-param db_bind_types       $dataTypes
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
     * // Inserting a new invoice
     * $success = $connection->insertAsDict(
     *     "co_invoices",
     *     [
     *         "inv_title" => "Test Invoice",
     *         "inv_total" => 100,
     *     ]
     * );
     *
     * // Next SQL sentence is sent to the database system
     * INSERT INTO `co_invoices` (`inv_title`, `inv_total`) VALUES ("Test Invoice", 100);
     * ```
     *
     * @phpstan-param db_dict       $data
     * @phpstan-param db_bind_types $dataTypes
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
     * @param string|null $name Name of the sequence object from which the ID
     *                          should be returned.
     * @return bool|string
     */
    public function lastInsertId(?string $name = null): bool|string;

    /**
     * Appends a LIMIT clause to sqlQuery argument
     *
     * @phpstan-param db_limit_number $number
     * @param string $sqlQuery
     * @param mixed $number
     * @return string
     */
    public function limit(string $sqlQuery, $number): string;

    /**
     * List all tables on a database
     *
     * @phpstan-return db_table_names
     * @param string|null $schemaName
     * @return array
     */
    public function listTables(?string $schemaName = null): array;

    /**
     * List all views on a database
     *
     * @phpstan-return db_table_names
     * @param string|null $schemaName
     * @return array
     */
    public function listViews(?string $schemaName = null): array;

    /**
     * Modifies a table column based on a definition
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface|null $currentColumn
     * @return bool
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, ?\Phalcon\Db\ColumnInterface $currentColumn = null): bool;

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server returns
     * rows
     *
     * @phpstan-param db_bind_params $bindParams
     * @phpstan-param db_bind_types  $bindTypes
     * @param string $sqlStatement
     * @param array $bindParams
     * @param array $bindTypes
     * @return bool|ResultInterface
     */
    public function query(string $sqlStatement, array $bindParams = [], array $bindTypes = []): ResultInterface|bool;

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
     * Set if nested transactions should use savepoints
     *
     * @param bool $nestedTransactionsWithSavepoints
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    public function setNestedTransactionsWithSavepoints(bool $nestedTransactionsWithSavepoints): \Phalcon\Db\Adapter\AdapterInterface;

    /**
     * Returns a SQL modified with a shared-lock clause. See the dialect's
     * `sharedLock()` for per-engine semantics. The optional `modifier` is
     * passed straight through (use `Dialect::LOCK_NOWAIT` /
     * `Dialect::LOCK_SKIP_LOCKED` for PostgreSQL).
     *
     * @param string $sqlQuery
     * @param string $modifier
     * @return string
     */
    public function sharedLock(string $sqlQuery, string $modifier = ''): string;

    /**
     * SQLite does not support the DEFAULT keyword
     *
     * @deprecated Will re removed in the next version
     * @return bool
     */
    public function supportsDefaultValue(): bool;

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
     * @param string|null $schemaName
     * @return bool
     */
    public function tableExists(string $tableName, ?string $schemaName = null): bool;

    /**
     * Gets creation options from a table
     *
     * @phpstan-return db_table_options
     * @param string $tableName
     * @param string|null $schemaName
     * @return array
     */
    public function tableOptions(string $tableName, ?string $schemaName = null): array;

    /**
     * Updates data on a table using custom RDBMS SQL syntax
     *
     * @phpstan-param db_column_names    $fields
     * @phpstan-param db_bind_params     $values
     * @phpstan-param db_where_condition $whereCondition
     * @phpstan-param db_bind_types      $dataTypes
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
     * // Updating existing invoice
     * $success = $connection->updateAsDict(
     *     "co_invoices",
     *     [
     *         "inv_title" => "New Test Invoice",
     *     ],
     *     "inv_id = 101"
     * );
     *
     * // Next SQL sentence is sent to the database system
     * UPDATE `co_invoices` SET `inv_title` = "New Test Invoice" WHERE inv_id = 101
     * ```
     *
     * @phpstan-param db_dict           $data
     * @phpstan-param db_where_condition $whereCondition
     * @phpstan-param db_bind_types     $dataTypes
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
     * @param string|null $schemaName
     * @return bool
     */
    public function viewExists(string $viewName, ?string $schemaName = null): bool;
}
