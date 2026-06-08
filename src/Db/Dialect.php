<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

use Phalcon\Db\Exceptions\ConflictTargetColumnRequired;
use Phalcon\Db\Exceptions\ConflictUpdateColumnRequired;
use Phalcon\Db\Exceptions\InvalidGroupByExpression;
use Phalcon\Db\Exceptions\InvalidListExpression;
use Phalcon\Db\Exceptions\InvalidOrderByExpression;
use Phalcon\Db\Exceptions\InvalidSqlExpression;
use Phalcon\Db\Exceptions\InvalidSqlExpressionType;
use Phalcon\Db\Exceptions\InvalidUnaryExpression;
use Phalcon\Db\Exceptions\MaterializedViewsNotSupported;
use Phalcon\Db\Exceptions\MissingDefinitionKey;
use Phalcon\Db\Exceptions\ReturningNotSupported;
use Phalcon\Support\Settings;

/**
 * This is the base class to each database dialect. This implements
 * common methods to transform intermediate code into its RDBMS related syntax
 */
abstract class Dialect implements \Phalcon\Db\DialectInterface
{
    /**
     * @var string
     */
    protected $escapeChar;

    /**
     * @var array
     */
    protected $customFunctions = [];

    /**
     * Generate SQL to create a new savepoint
     *
     * @param string $name
     * @return string
     */
    public function createSavepoint(string $name): string
    {
    }

    /**
     * Escape identifiers
     *
     * @param string $str
     * @param string|null $escapeChar
     * @return string
     */
    final public function escape(string $str, ?string $escapeChar = null): string
    {
    }

    /**
     * Escape Schema
     *
     * @param string $str
     * @param string|null $escapeChar
     * @return string
     */
    final public function escapeSchema(string $str, ?string $escapeChar = null): string
    {
    }

    /**
     * Returns a SQL modified with a FOR UPDATE clause. The optional `modifier`
     * appends a row-lock disposition keyword.
     *
     * ```php
     * $sql = $dialect->forUpdate("SELECT FROM robots");
     * echo $sql; // SELECT FROM robots FOR UPDATE
     *
     * $sql = $dialect->forUpdate(
     *     "SELECT FROM robots",
     *     Dialect::LOCK_NOWAIT
     * );
     * echo $sql; // SELECT FROM robots FOR UPDATE NOWAIT
     *
     * $sql = $dialect->forUpdate(
     *     "SELECT FROM robots",
     *     Dialect::LOCK_SKIP_LOCKED
     * );
     * echo $sql; // SELECT FROM robots FOR UPDATE SKIP LOCKED
     * ```
     *
     * @param string $sqlQuery
     * @param string $modifier
     * @return string
     */
    public function forUpdate(string $sqlQuery, string $modifier = ''): string
    {
    }

    /**
     * Gets a list of columns with escaped identifiers
     *
     * ```php
     * echo $dialect->getColumnList(
     *     [
     *         "column1",
     *         "column",
     *     ]
     * );
     * ```
     *
     * @param array $columnList
     * @param string|null $escapeChar
     * @param array $bindCounts
     * @return string
     */
    final public function getColumnList(array $columnList, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Returns registered functions
     *
     * @return array
     */
    public function getCustomFunctions(): array
    {
    }

    /**
     * Resolve Column expressions
     *
     * @param array|string $column
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final public function getSqlColumn($column, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Transforms an intermediate representation for an expression into a database system valid expression
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts
     * @return string
     */
    public function getSqlExpression(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Transform an intermediate representation of a schema/table into a
     * database system valid expression
     *
     * @param mixed $table
     * @param string|null $escapeChar
     * @return string
     */
    final public function getSqlTable($table, ?string $escapeChar = null): string
    {
    }

    /**
     * Generates the SQL for LIMIT clause
     *
     * ```php
     * // SELECT FROM robots LIMIT 10
     * echo $dialect->limit(
     *     "SELECT FROM robots",
     *     10
     * );
     *
     * // SELECT FROM robots LIMIT 10 OFFSET 50
     * echo $dialect->limit(
     *     "SELECT FROM robots",
     *     [10, 50]
     * );
     * ```
     *
     * @param string $sqlQuery
     * @param mixed $number
     * @return string
     */
    public function limit(string $sqlQuery, $number): string
    {
    }

    /**
     * Registers custom SQL functions
     *
     * @param string $name
     * @param callable $customFunction
     * @return static
     */
    public function registerCustomFunction(string $name, $customFunction): static
    {
    }

    /**
     * Generates SQL to create a materialized view. Supported by PostgreSQL
     * (`CREATE MATERIALIZED VIEW name AS <sql>`). Other dialects inherit
     * this throw - MySQL and SQLite have no materialized-view concept.
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
     * Generates SQL to drop a materialized view. Supported by PostgreSQL.
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
     * Generates SQL to refresh a materialized view. Supported by
     * PostgreSQL. Pass `concurrent = true` for `REFRESH MATERIALIZED VIEW
     * CONCURRENTLY ...`, which avoids blocking concurrent SELECTs (requires
     * the view to have a unique index).
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
     * Appends an `ON CONFLICT (col, ...) DO UPDATE SET col = excluded.col`
     * upsert clause to the supplied INSERT statement. The syntax is the
     * SQL standard form recognized by PostgreSQL (9.5+) and SQLite (3.24+).
     * MySQL overrides this method to throw because its `ON DUPLICATE KEY
     * UPDATE` has a different shape (deferred to parser item #23).
     *
     * @param string $sqlQuery
     * @param array $conflictColumns
     * @param array $updateColumns
     * @return string
     */
    public function onConflictUpdate(string $sqlQuery, array $conflictColumns, array $updateColumns): string
    {
    }

    /**
     * Returns a SQL statement extended with a `RETURNING` clause so the
     * INSERT/UPDATE/DELETE returns rows. Supported by PostgreSQL and
     * SQLite 3.35+. Pass `[""]` for `RETURNING`, or a list of column
     * names. The base implementation throws - MySQL inherits it because
     * MySQL has no RETURNING construct.
     *
     * @param string $sqlQuery
     * @param array $columns
     * @return string
     */
    public function returning(string $sqlQuery, array $columns): string
    {
    }

    /**
     * Generate SQL to release a savepoint
     *
     * @param string $name
     * @return string
     */
    public function releaseSavepoint(string $name): string
    {
    }

    /**
     * Generate SQL to rollback a savepoint
     *
     * @param string $name
     * @return string
     */
    public function rollbackSavepoint(string $name): string
    {
    }

    /**
     * Builds a SELECT statement
     *
     * @param array $definition
     * @return string
     */
    public function select(array $definition): string
    {
    }

    /**
     * Checks whether the platform supports savepoints
     *
     * @return bool
     */
    public function supportsSavepoints(): bool
    {
    }

    /**
     * Checks whether the platform supports releasing savepoints.
     *
     * @return bool
     */
    public function supportsReleaseSavepoints(): bool
    {
    }

    /**
     * Returns the size of the column enclosed in parentheses
     *
     * @param ColumnInterface $column
     * @return string
     */
    protected function getColumnSize(ColumnInterface $column): string
    {
    }

    /**
     * Returns the column size and scale enclosed in parentheses
     *
     * @param ColumnInterface $column
     * @return string
     */
    protected function getColumnSizeAndScale(ColumnInterface $column): string
    {
    }

    /**
     * Checks the column type and if not string it returns the type reference
     *
     * @param ColumnInterface $column
     * @return string
     */
    protected function checkColumnType(ColumnInterface $column): string
    {
    }

    /**
     * Checks the column type and returns the updated SQL statement
     *
     * @param ColumnInterface $column
     * @return string
     */
    protected function checkColumnTypeSql(ColumnInterface $column): string
    {
    }

    /**
     * Builds a CHECK constraint clause from a `CheckInterface`, using the
     * provided escape character for the constraint name (so each dialect
     * gets its native quoting). Returns the clause body - the dialect's
     * `createTable()` / `addCheck()` is expected to prefix `ADD` or place
     * the result on its own line as appropriate.
     *
     * @param CheckInterface $check
     * @param string $escapeChar
     * @return string
     */
    protected function getCheckClause(CheckInterface $check, string $escapeChar = '`'): string
    {
    }

    /**
     * Builds the per-index parenthesized column list, honoring per-column
     * sort directions when the index declares any. Returns the bare
     * comma-separated `getColumnList()` output when no directions are set,
     * preserving the legacy rendering exactly. When directions are set,
     * each column is followed by ` ASC` or ` DESC`; trailing positions
     * absent from the directions array default to `ASC`.
     *
     * @param IndexInterface $index
     * @param bool $wrapExpressions
     * @return string
     */
    protected function getIndexColumnList(IndexInterface $index, bool $wrapExpressions = true): string
    {
    }

    /**
     * Builds the `GENERATED ALWAYS AS (<expr>) VIRTUAL|STORED` clause for a
     * generated/computed column. Returns an empty string when the column is
     * not generated. When `forceStored` is `true` the clause is always emitted
     * as `STORED` regardless of the column's `isGenerationStored()` flag -
     * PostgreSQL uses this since it only supports stored generated columns.
     *
     * @param ColumnInterface $column
     * @param bool $forceStored
     * @return string
     */
    protected function getGeneratedClause(ColumnInterface $column, bool $forceStored = false): string
    {
    }

    /**
     * Resolve
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @return string
     */
    final protected function getSqlExpressionAll(array $expression, ?string $escapeChar = null): string
    {
    }

    /**
     * Resolve binary operations expressions
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionBinaryOperations(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve CASE expressions
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionCase(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve CAST of values
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionCastValue(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve CONVERT of values encodings
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionConvertValue(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a FROM clause
     *
     * @param mixed $expression
     * @param string|null $escapeChar
     * @return string
     */
    final protected function getSqlExpressionFrom($expression, ?string $escapeChar = null): string
    {
    }

    /**
     * Resolve function calls
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionFunctionCall(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a GROUP BY clause
     *
     * @param array|string $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionGroupBy($expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a HAVING clause
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionHaving(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a JOINs clause
     *
     * @param array|string $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionJoins($expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a LIMIT clause
     *
     * @param array|string $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionLimit($expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve Lists
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionList(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve object expressions
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionObject(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve an ORDER BY clause
     *
     * @param array|string $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionOrderBy($expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve qualified expressions
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @return string
     */
    final protected function getSqlExpressionQualified(array $expression, ?string $escapeChar = null): string
    {
    }

    /**
     * Resolve Column expressions
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts
     * @return string
     */
    final protected function getSqlExpressionScalar(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve unary operations expressions
     *
     * @param array $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionUnaryOperations(array $expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a WHERE clause
     *
     * @param array|string $expression
     * @param string|null $escapeChar
     * @param array $bindCounts *
     * @return string
     */
    final protected function getSqlExpressionWhere($expression, ?string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Prepares column for this RDBMS
     *
     * @param string $qualified
     * @param string|null $alias
     * @param string|null $escapeChar
     * @return string
     */
    protected function prepareColumnAlias(string $qualified, ?string $alias = null, ?string $escapeChar = null): string
    {
    }

    /**
     * Prepares table for this RDBMS
     *
     * @param string $table
     * @param string|null $schema
     * @param string|null $alias
     * @param string|null $escapeChar
     * @return string
     */
    protected function prepareTable(string $table, ?string $schema = null, ?string $alias = null, ?string $escapeChar = null): string
    {
    }

    /**
     * Prepares qualified for this RDBMS
     *
     * @param string $column
     * @param string|null $domain
     * @param string|null $escapeChar
     * @return string
     */
    protected function prepareQualified(string $column, ?string $domain = null, ?string $escapeChar = null): string
    {
    }
}
