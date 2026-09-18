<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use Phalcon\Contracts\DataMapper\DataMapperTypes;
use Phalcon\DataMapper\Pdo\Connection;

/**
 * Class AbstractQuery
 *
 * @phpstan-import-type datamapper_bind_store from DataMapperTypes
 * @phpstan-import-type datamapper_bind_values from DataMapperTypes
 * @phpstan-import-type datamapper_clauses from DataMapperTypes
 * @phpstan-import-type datamapper_query_store from DataMapperTypes
 */
abstract class AbstractQuery
{
    protected Bind $bind;

    protected \Phalcon\DataMapper\Pdo\Connection $connection;

    /**
     * @var array
     *
     * @phpstan-var datamapper_query_store
     * @psalm-suppress InvalidPropertyAssignmentValue
     */
    protected array $store = [];

    /**
     * AbstractQuery constructor.
     *
     * @param Connection $connection
     * @param Bind       $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Binds a value inline
     *
     * @param mixed $value
     * @param int $type
     * @return string
     */
    public function bindInline($value, int $type = -1): string
    {
    }

    /**
     * Binds a value - auto-detects the type if necessary
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $type
     *
     * @return AbstractQuery
     */
    public function bindValue(string $key, $value, int $type = -1): AbstractQuery
    {
    }

    /**
     * Binds an array of values
     *
     * @param array $values
     *
     * @return AbstractQuery
     *
     * @phpstan-param datamapper_bind_values $values
     */
    public function bindValues(array $values): AbstractQuery
    {
    }

    /**
     * Returns all the bound values
     *
     * @phpstan-return datamapper_bind_store
     * @return array
     */
    public function getBindValues(): array
    {
    }

    /**
     * Return the generated statement
     *
     * @return string
     */
    abstract public function getStatement(): string;

    /**
     * Performs a statement in the connection
     *
     * @return \PDOStatement
     */
    public function perform()
    {
    }

    /**
     * Quotes the identifier
     *
     * @param string $name
     * @param int $type
     * @return string
     */
    public function quoteIdentifier(string $name, int $type = \PDO::PARAM_STR): string
    {
    }

    /**
     * Resets the internal array
     *
     * @return void
     */
    public function reset(): void
    {
    }

    /**
     * Resets the columns
     *
     * @return void
     */
    public function resetColumns(): void
    {
    }

    /**
     * Resets the flags
     *
     * @return void
     */
    public function resetFlags(): void
    {
    }

    /**
     * Resets the from
     *
     * @return void
     */
    public function resetFrom(): void
    {
    }

    /**
     * Resets the group by
     *
     * @return void
     */
    public function resetGroupBy(): void
    {
    }

    /**
     * Resets the having
     *
     * @return void
     */
    public function resetHaving(): void
    {
    }

    /**
     * Resets the limit and offset
     *
     * @return void
     */
    public function resetLimit(): void
    {
    }

    /**
     * Resets the order by
     *
     * @return void
     */
    public function resetOrderBy(): void
    {
    }

    /**
     * Resets the where
     *
     * @return void
     */
    public function resetWhere(): void
    {
    }

    /**
     * Sets a flag for the query such as "DISTINCT"
     *
     * @param string $flag
     * @param bool $enable
     * @return void
     */
    public function setFlag(string $flag, bool $enable = true): void
    {
    }

    /**
     * Builds the flags statement(s)
     *
     * @return string
     */
    protected function buildFlags()
    {
    }

    /**
     * Builds the `RETURNING` clause
     *
     * @return string
     */
    protected function buildReturning(): string
    {
    }

    /**
     * Indents a collection
     *
     * @phpstan-param datamapper_clauses $collection
     * @param array $collection
     * @param string $glue
     * @return string
     */
    protected function indent(array $collection, string $glue = ''): string
    {
    }
}
