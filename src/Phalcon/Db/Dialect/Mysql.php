<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Dialect;

use Phalcon\Db\Dialect;

/**
 * Generates database specific SQL for the MySQL RDBMS
 */
class Mysql extends Dialect
{
    /**
     * @var string
     */
    protected $escapeChar = '`';


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
     * Generates SQL to create a view
     *
     * @param string $viewName
     * @param array $definition
     * @param string $schemaName
     * @return string
     */
    public function createView(string $viewName, array $definition, string $schemaName = null): string
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
     * @param string $schema
     * @return string
     */
    public function describeColumns(string $table, string $schema = null): string
    {
    }

    /**
     * Generates SQL to query indexes on a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeIndexes(string $table, string $schema = null): string
    {
    }

    /**
     * Generates SQL to query foreign keys on a table
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function describeReferences(string $table, string $schema = null): string
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
     * @param string $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropTable(string $tableName, string $schemaName = null, bool $ifExists = true): string
    {
    }

    /**
     * Generates SQL to drop a view
     *
     * @param string $viewName
     * @param string $schemaName
     * @param bool $ifExists
     * @return string
     */
    public function dropView(string $viewName, string $schemaName = null, bool $ifExists = true): string
    {
    }

    /**
     * Gets the column name in MySQL
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    public function getColumnDefinition(\Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * Generates SQL to check DB parameter FOREIGN_KEY_CHECKS.
     *
     * @return string
     */
    public function getForeignKeyChecks(): string
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
     * @param string $schemaName
     * @return string
     */
    public function listTables(string $schemaName = null): string
    {
    }

    /**
     * Generates the SQL to list all views of a schema or user
     *
     * @param string $schemaName
     * @return string
     */
    public function listViews(string $schemaName = null): string
    {
    }

    /**
     * Generates SQL to modify a column in a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return string
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): string
    {
    }

    /**
     * Returns a SQL modified with a LOCK IN SHARE MODE clause
     *
     * ```php
     * $sql = $dialect->sharedLock("SELECT FROM robots");
     *
     * echo $sql; // SELECT FROM robots LOCK IN SHARE MODE
     * ```
     *
     * @param string $sqlQuery
     * @return string
     */
    public function sharedLock(string $sqlQuery): string
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
     * @param string $schemaName
     * @return string
     */
    public function tableExists(string $tableName, string $schemaName = null): string
    {
    }

    /**
     * Generates the SQL to describe the table creation options
     *
     * @param string $table
     * @param string $schema
     * @return string
     */
    public function tableOptions(string $table, string $schema = null): string
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
     * @param string $schemaName
     * @return string
     */
    public function viewExists(string $viewName, string $schemaName = null): string
    {
    }

    /**
     * Generates SQL to add the table creation options
     *
     * @param array $definition
     * @return string
     */
    protected function getTableOptions(array $definition): string
    {
    }

    /**
     * Checks if the size and/or scale are present and encloses those values
     * in parentheses if need be
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    private function checkColumnSizeAndScale(\Phalcon\Db\ColumnInterface $column): string
    {
    }

    /**
     * Checks if a column is unsigned or not and returns the relevant SQL syntax
     *
     * @param \Phalcon\Db\ColumnInterface $column
     * @return string
     */
    private function checkColumnUnsigned(\Phalcon\Db\ColumnInterface $column): string
    {
    }
}
