<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Db;

use Phalcon\Db\ColumnInterface;
use Phalcon\Db\IndexInterface;
use Phalcon\Db\ReferenceInterface;

/**
 * Canonical contract for Phalcon\Db dialects.
 *
 * @todo v7 — these will become required interface members. They are
 *            omitted from the v5 line to avoid breaking third-party
 *            implementors:
 *              - addCheck()                : string
 *              - createMaterializedView()  : string
 *              - dropCheck()               : string
 *              - dropMaterializedView()    : string
 *              - onConflictUpdate()        : string
 *              - refreshMaterializedView() : string
 *              - returning()               : string
 */
interface Dialect
{
    /**
     * No row-lock modifier — the default behavior for `forUpdate()`.
     */
    const LOCK_NONE = '';

    /**
     * Append `NOWAIT` to the `FOR UPDATE` clause — the query fails immediately
     * if a row it needs is locked instead of blocking. MySQL 8.0+ and
     * PostgreSQL 9.5+ recognize this. SQLite has no row-level locking and
     * silently ignores the modifier.
     */
    const LOCK_NOWAIT = 'NOWAIT';

    /**
     * Append `SKIP LOCKED` to the `FOR UPDATE` clause — the query returns
     * rows that are not currently locked and silently skips ones that are.
     * MySQL 8.0+ and PostgreSQL 9.5+ recognize this. SQLite ignores it.
     */
    const LOCK_SKIP_LOCKED = 'SKIP LOCKED';


    /**
     * Generates SQL to add a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function addColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column): string;

    /**
     * Generates SQL to add an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return string
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): string;

    /**
     * Generates SQL to add an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return string
     */
    public function addIndex(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): string;

    /**
     * Generates SQL to add the primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return string
     */
    public function addPrimaryKey(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): string;

    /**
     * Generate SQL to create a new savepoint
     *
     * @param string $name
     * @return string
     */
    public function createSavepoint(string $name): string;

    /**
     * Generates SQL to create a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return string
     */
    public function createTable(string $tableName, string $schemaName, array $definition): string;

    /**
     * Generates SQL to create a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return string
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): string;

    /**
     * Generates SQL to describe a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeColumns(string $table, string $schema = null): string;

    /**
     * Generates SQL to query indexes on a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeIndexes(string $table, string $schema = null): string;

    /**
     * Generates SQL to query foreign keys on a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeReferences(string $table, string $schema = null): string;

    /**
     * Generates SQL to delete a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return string
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): string;

    /**
     * Generates SQL to delete a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return string
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): string;

    /**
     * Generates SQL to delete an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $indexName
     * @return string
     */
    public function dropIndex(string $tableName, string $schemaName, string $indexName): string;

    /**
     * Generates SQL to delete primary key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): string;

    /**
     * Generates SQL to drop a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropTable(string $tableName, string $schemaName, bool $ifExists = true): string;

    /**
     * Generates SQL to drop a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): string;

    /**
     * Returns a SQL modified with a FOR UPDATE clause. The optional `modifier`
     * appends a row-lock disposition keyword — pass `Dialect::LOCK_NOWAIT`
     * or `Dialect::LOCK_SKIP_LOCKED` (or leave as `Dialect::LOCK_NONE`).
     *
     * @param string $sqlQuery
     * @param string $modifier
     * @return string
     */
    public function forUpdate(string $sqlQuery, string $modifier = ''): string;

    /**
     * Gets the column name in RDBMS
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string;

    /**
     * Gets a list of columns
     *
     * @param array $columnList
     * @return string
     */
    public function getColumnList(array $columnList): string;

    /**
     * Returns registered functions
     *
     * @return array
     */
    public function getCustomFunctions(): array;

    /**
     * Transforms an intermediate representation for an expression into a
     * database system valid expression
     *
     * @param array $expression
     * @param string $escapeChar
     * @param array $bindCounts
     * @return string
     */
    public function getSqlExpression(array $expression, string $escapeChar = null, array $bindCounts = []): string;

    /**
     * Generates the SQL for LIMIT clause
     *
     * @param string $sqlQuery
     * @param mixed $number
     * @return string
     */
    public function limit(string $sqlQuery, $number): string;

    /**
     * List all tables in database
     *
     * @param string $schemaName
     * @return string
     */
    public function listTables(string $schemaName = null): string;

    /**
     * Generates SQL to modify a column in a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return string
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): string;

    /**
     * Registers custom SQL functions
     *
     * @param string $name
     * @param callable $customFunction
     * @return \Phalcon\Db\Dialect
     */
    public function registerCustomFunction(string $name, $customFunction): \Phalcon\Db\Dialect;

    /**
     * Generate SQL to release a savepoint
     *
     * @param string $name
     * @return string
     */
    public function releaseSavepoint(string $name): string;

    /**
     * Generate SQL to rollback a savepoint
     *
     * @param string $name
     * @return string
     */
    public function rollbackSavepoint(string $name): string;

    /**
     * Builds a SELECT statement
     *
     * @param array $definition
     * @return string
     */
    public function select(array $definition): string;

    /**
     * Returns a SQL modified with a shared-lock clause. MySQL emits
     * `LOCK IN SHARE MODE`; PostgreSQL emits `FOR SHARE`; SQLite returns the
     * original query unchanged. The optional `modifier` appends a row-lock
     * disposition keyword (`Dialect::LOCK_NOWAIT` / `Dialect::LOCK_SKIP_LOCKED`)
     * for PostgreSQL — MySQL's legacy `LOCK IN SHARE MODE` does not support
     * modifiers, so non-empty values are silently ignored on MySQL.
     *
     * @param string $sqlQuery
     * @param string $modifier
     * @return string
     */
    public function sharedLock(string $sqlQuery, string $modifier = ''): string;

    /**
     * Checks whether the platform supports releasing savepoints.
     *
     * @return bool
     */
    public function supportsReleaseSavepoints(): bool;

    /**
     * Checks whether the platform supports savepoints
     *
     * @return bool
     */
    public function supportsSavepoints(): bool;

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function tableExists(string $tableName, string $schemaName = null): string;

    /**
     * Generates the SQL to describe the table creation options
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function tableOptions(string $table, string $schema = null): string;

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * @param string $viewName
     * @param string $schemaName
     * @return string
     */
    public function viewExists(string $viewName, string $schemaName = null): string;
}
