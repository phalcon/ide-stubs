<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

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
     * @param string $escapeChar
     * @return string
     */
    final public function escape(string $str, string $escapeChar = null): string
    {
    }

    /**
     * Escape Schema
     *
     * @param string $str
     * @param string $escapeChar
     * @return string
     */
    final public function escapeSchema(string $str, string $escapeChar = null): string
    {
    }

    /**
     * Returns a SQL modified with a FOR UPDATE clause
     *
     * ```php
     * $sql = $dialect->forUpdate("SELECT FROM robots");
     *
     * echo $sql; // SELECT FROM robots FOR UPDATE
     * ```
     *
     * @param string $sqlQuery
     * @return string
     */
    public function forUpdate(string $sqlQuery): string
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
     * @param string $escapeChar
     * @param array $bindCounts
     * @return string
     */
    final public function getColumnList(array $columnList, string $escapeChar = null, array $bindCounts = []): string
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
    final public function getSqlColumn($column, string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Transforms an intermediate representation for an expression into a database system valid expression
     *
     * @param array $expression
     * @param string $escapeChar
     * @param array $bindCounts
     * @return string
     */
    public function getSqlExpression(array $expression, string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Transform an intermediate representation of a schema/table into a
     * database system valid expression
     *
     * @param mixed $table
     * @param string $escapeChar
     * @return string
     */
    final public function getSqlTable($table, string $escapeChar = null): string
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
     * @return Dialect
     */
    public function registerCustomFunction(string $name, $customFunction): Dialect
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
     * Resolve
     *
     * @param array $expression
     * @param string $escapeChar
     * @return string
     */
    final protected function getSqlExpressionAll(array $expression, string $escapeChar = null): string
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
    final protected function getSqlExpressionBinaryOperations(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionCase(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionCastValue(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionConvertValue(array $expression, string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve a FROM clause
     *
     * @param mixed $expression
     * @param string $escapeChar
     * @return string
     */
    final protected function getSqlExpressionFrom($expression, string $escapeChar = null): string
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
    final protected function getSqlExpressionFunctionCall(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionGroupBy($expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionHaving(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionJoins($expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionLimit($expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionList(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionObject(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionOrderBy($expression, string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Resolve qualified expressions
     *
     * @param array $expression
     * @param string $escapeChar
     * @return string
     */
    final protected function getSqlExpressionQualified(array $expression, string $escapeChar = null): string
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
    final protected function getSqlExpressionScalar(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionUnaryOperations(array $expression, string $escapeChar = null, array $bindCounts = []): string
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
    final protected function getSqlExpressionWhere($expression, string $escapeChar = null, array $bindCounts = []): string
    {
    }

    /**
     * Prepares column for this RDBMS
     *
     * @param string $qualified
     * @param string $alias
     * @param string $escapeChar
     * @return string
     */
    protected function prepareColumnAlias(string $qualified, string $alias = null, string $escapeChar = null): string
    {
    }

    /**
     * Prepares table for this RDBMS
     *
     * @param string $table
     * @param string $schema
     * @param string $alias
     * @param string $escapeChar
     * @return string
     */
    protected function prepareTable(string $table, string $schema = null, string $alias = null, string $escapeChar = null): string
    {
    }

    /**
     * Prepares qualified for this RDBMS
     *
     * @param string $column
     * @param string $domain
     * @param string $escapeChar
     * @return string
     */
    protected function prepareQualified(string $column, string $domain = null, string $escapeChar = null): string
    {
    }
}
