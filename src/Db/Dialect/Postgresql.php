<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Dialect;

use Phalcon\Db\CheckInterface;
use Phalcon\Db\Column;
use Phalcon\Db\ColumnInterface;
use Phalcon\Db\Dialect;
use Phalcon\Db\DialectInterface;
use Phalcon\Db\Exception;
use Phalcon\Db\Exceptions\MissingDefinitionKey;
use Phalcon\Db\Exceptions\ReturningRequiresColumn;
use Phalcon\Db\Exceptions\UnrecognizedDataType;
use Phalcon\Db\IndexInterface;
use Phalcon\Db\RawValue;
use Phalcon\Db\ReferenceInterface;

/**
 * Generates database specific SQL for the PostgreSQL RDBMS
 */
class Postgresql extends Dialect
{
    /**
     * @var string
     */
    protected $escapeChar = '\\\"';

    /**
     * Generates SQL to add a column to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function addColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * Generates SQL to add a CHECK constraint to an existing table.
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\CheckInterface $check
     * @return string
     */
    public function addCheck(string $tableName, string $schemaName, \Phalcon\Db\CheckInterface $check): string
    {
    }

    /**
     * Generates SQL to add an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return string
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): string
    {
    }

    /**
     * Generates SQL to add an index to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return string
     */
    public function addIndex(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): string
    {
    }

    /**
     * Generates SQL to add the primary key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\IndexInterface $index
     * @return string
     */
    public function addPrimaryKey(string $tableName, string $schemaName, \Phalcon\Db\IndexInterface $index): string
    {
    }

    /**
     * Generates SQL to create a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return string
     */
    public function createTable(string $tableName, string $schemaName, array $definition): string
    {
    }

    /**
     * Generates SQL to create a materialized view.
     *
     * @param string $viewName
     * @param array $definition
     * @param string|null $schemaName
     * @return string
     */
    public function createMaterializedView(string $viewName, array $definition, ?string $schemaName = null): string
    {
    }

    /**
     * Generates SQL to create a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string|null $schemaName
     * @return string
     */
    public function createView(string $viewName, array $definition, ?string $schemaName = null): string
    {
    }

    /**
     * Generates SQL describing a table
     *
     * ```php
     * print_r(
     *     $dialect->describeColumns("posts")
     * );
     * ```
     *
     * @param string $table
     * @param string|null $schema
     * @return string
     */
    public function describeColumns(string $table, ?string $schema = null): string
    {
    }

    /**
     * Generates SQL to query indexes on a table
     *
     * @param string $table
     * @param string|null $schema
     * @return string
     */
    public function describeIndexes(string $table, ?string $schema = null): string
    {
    }

    /**
     * Generates SQL to query foreign keys on a table
     *
     * @param string $table
     * @param string|null $schema
     * @return string
     */
    public function describeReferences(string $table, ?string $schema = null): string
    {
    }

    /**
     * Generates SQL to delete a column from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $columnName
     * @return string
     */
    public function dropColumn(string $tableName, string $schemaName, string $columnName): string
    {
    }

    /**
     * Generates SQL to delete a CHECK constraint from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $checkName
     * @return string
     */
    public function dropCheck(string $tableName, string $schemaName, string $checkName): string
    {
    }

    /**
     * Generates SQL to delete a foreign key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $referenceName
     * @return string
     */
    public function dropForeignKey(string $tableName, string $schemaName, string $referenceName): string
    {
    }

    /**
     * Generates SQL to delete an index from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param string $indexName
     * @return string
     */
    public function dropIndex(string $tableName, string $schemaName, string $indexName): string
    {
    }

    /**
     * Generates SQL to delete primary key from a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function dropPrimaryKey(string $tableName, string $schemaName): string
    {
    }

    /**
     * Generates SQL to drop a table
     *
     * @param string $tableName
     * @param string|null $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropTable(string $tableName, ?string $schemaName = null, bool $ifExists = true): string
    {
    }

    /**
     * Generates SQL to drop a materialized view.
     *
     * @param string $viewName
     * @param string|null $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropMaterializedView(string $viewName, ?string $schemaName = null, bool $ifExists = true): string
    {
    }

    /**
     * Generates SQL to drop a view
     *
     * @param string $viewName
     * @param string|null $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropView(string $viewName, ?string $schemaName = null, bool $ifExists = true): string
    {
    }

    /**
     * Generates SQL to refresh a materialized view. When `concurrent` is
     * true, emits `REFRESH MATERIALIZED VIEW CONCURRENTLY ...` (avoids
     * blocking concurrent SELECTs; requires a unique index on the view).
     *
     * @param string $viewName
     * @param string|null $schemaName
     * @param bool $concurrent
     * @return string
     */
    public function refreshMaterializedView(string $viewName, ?string $schemaName = null, bool $concurrent = false): string
    {
    }

    /**
     * Gets the column name in PostgreSQL
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * List all tables in database
     *
     * ```php
     * print_r(
     *     $dialect->listTables("blog")
     * );
     * ```
     *
     * @param string|null $schemaName
     * @return string
     */
    public function listTables(?string $schemaName = null): string
    {
    }

    /**
     * Generates the SQL to list all views of a schema or user
     *
     * @param string|null $schemaName
     * @return string
     */
    public function listViews(?string $schemaName = null): string
    {
    }

    /**
     * Generates SQL to modify a column in a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface|null $currentColumn
     * @return string
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, ?\Phalcon\Db\ColumnInterface $currentColumn = null): string
    {
    }

    /**
     * Appends a `RETURNING` clause to the supplied INSERT/UPDATE/DELETE
     * statement. Pass `[""]` for `RETURNING`, or a list of column names.
     *
     * @param string $sqlQuery
     * @param array $columns
     * @return string
     */
    public function returning(string $sqlQuery, array $columns): string
    {
    }

    /**
     * Returns a SQL modified with a `FOR SHARE` clause — PostgreSQL's
     * equivalent of MySQL's `LOCK IN SHARE MODE`. The optional `modifier`
     * appends a row-lock disposition keyword (pass `Dialect::LOCK_NOWAIT`
     * or `Dialect::LOCK_SKIP_LOCKED`).
     *
     * ```php
     * echo $dialect->sharedLock("SELECT FROM robots");
     * // SELECT FROM robots FOR SHARE
     *
     * echo $dialect->sharedLock(
     *     "SELECT FROM robots",
     *     Dialect::LOCK_NOWAIT
     * );
     * // SELECT FROM robots FOR SHARE NOWAIT
     * ```
     *
     * @param string $sqlQuery
     * @param string $modifier
     * @return string
     */
    public function sharedLock(string $sqlQuery, string $modifier = ''): string
    {
    }

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * ```php
     * echo $dialect->tableExists("posts", "blog");
     *
     * echo $dialect->tableExists("posts");
     * ```
     *
     * @param string $tableName
     * @param string|null $schemaName
     * @return string
     */
    public function tableExists(string $tableName, ?string $schemaName = null): string
    {
    }

    /**
     * Generates the SQL to describe the table creation options
     *
     * @param string $table
     * @param string|null $schema
     * @return string
     */
    public function tableOptions(string $table, ?string $schema = null): string
    {
    }

    /**
     * Generates SQL to truncate a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @return string
     */
    public function truncateTable(string $tableName, string $schemaName): string
    {
    }

    /**
     * Generates SQL checking for the existence of a schema.view
     *
     * @param string $viewName
     * @param string|null $schemaName
     * @return string
     */
    public function viewExists(string $viewName, ?string $schemaName = null): string
    {
    }

    /**
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    protected function castDefault(\Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * @param array $definition
     * @return string
     */
    protected function getTableOptions(array $definition): string
    {
    }
}
