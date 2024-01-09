<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use Phalcon\DataMapper\Pdo\Connection;

/**
 * Class AbstractQuery
 */
abstract class AbstractQuery
{
    /**
     * @var Bind
     */
    protected $bind;

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var array
     */
    protected $store = [];

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
     * @param int   $type
     *
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
     */
    public function bindValues(array $values): AbstractQuery
    {
    }

    /**
     * Returns all the bound values
     *
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
     * Sets a flag for the query such as "DISTINCT"
     *
     * @param string $flag
     * @param bool   $enable
     * @return void
     */
    public function setFlag(string $flag, bool $enable = true): void
    {
    }

    /**
     * Quotes the identifier
     *
     * @param string $name
     * @param int    $type
     *
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
     * Resets the from
     *
     * @return void
     */
    public function resetFrom(): void
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
     * Resets the order by
     *
     * @return void
     */
    public function resetOrderBy(): void
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
     * Resets the flags
     *
     * @return void
     */
    public function resetFlags(): void
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
     * @param array  $collection
     * @param string $glue
     *
     * @return string
     */
    protected function indent(array $collection, string $glue = ''): string
    {
    }
}
