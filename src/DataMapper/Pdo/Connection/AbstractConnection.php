<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Connection;

use BadMethodCallException;
use Phalcon\DataMapper\Pdo\Exception\CannotBindValue;
use Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface;

/**
 * Provides array quoting, profiling, a new `perform()` method, new `fetch()`
 * methods
 */
abstract class AbstractConnection implements \Phalcon\DataMapper\Pdo\Connection\ConnectionInterface
{
    /**
     * @var \PDO
     */
    protected $pdo;

    /**
     * @var ProfilerInterface
     */
    protected $profiler;

    /**
     * Proxies to PDO methods created for specific drivers; in particular,
     * `sqlite` and `pgsql`.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     * @throws BadMethodCallException
     */
    public function __call($name, array $arguments)
    {
    }

    /**
     * Begins a transaction. If the profiler is enabled, the operation will
     * be recorded.
     *
     * @return bool
     */
    public function beginTransaction(): bool
    {
    }

    /**
     * Commits the existing transaction. If the profiler is enabled, the
     * operation will be recorded.
     *
     * @return bool
     */
    public function commit(): bool
    {
    }

    /**
     * Connects to the database.
     *
     * @return void
     */
    abstract public function connect(): void;

    /**
     * Disconnects from the database.
     *
     * @return void
     */
    abstract public function disconnect(): void;

    /**
     * Gets the most recent error code.
     *
     * @return string|null
     */
    public function errorCode(): string|null
    {
    }

    /**
     * Gets the most recent error info.
     *
     * @return array
     */
    public function errorInfo(): array
    {
    }

    /**
     * Executes an SQL statement and returns the number of affected rows. If
     * the profiler is enabled, the operation will be recorded.
     *
     * @param string $statement
     *
     * @return int
     */
    public function exec(string $statement): int
    {
    }

    /**
     * Performs a statement and returns the number of affected rows.
     *
     * @param string $statement
     * @param array  $values
     *
     * @return int
     */
    public function fetchAffected(string $statement, array $values = []): int
    {
    }

    /**
     * Fetches a sequential array of rows from the database; the rows are
     * returned as associative arrays.
     *
     * @param string $statement
     * @param array  $values
     *
     * @return array
     */
    public function fetchAll(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches an associative array of rows from the database; the rows are
     * returned as associative arrays, and the array of rows is keyed on the
     * first column of each row.
     *
     * If multiple rows have the same first column value, the last row with
     * that value will overwrite earlier rows. This method is more resource
     * intensive and should be avoided if possible.
     *
     * @param string $statement
     * @param array  $values
     *
     * @return array
     */
    public function fetchAssoc(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches a column of rows as a sequential array (default first one).
     *
     * @param string $statement
     * @param array  $values
     * @param int    $column
     *
     * @return array
     */
    public function fetchColumn(string $statement, array $values = [], int $column = 0): array
    {
    }

    /**
     * Fetches multiple from the database as an associative array. The first
     * column will be the index key. The default flags are
     * PDO::FETCH_ASSOC | PDO::FETCH_GROUP
     *
     * @param string $statement
     * @param array  $values
     * @param int    $flags
     *
     * @return array
     */
    public function fetchGroup(string $statement, array $values = [], int $flags = \PDO::FETCH_ASSOC): array
    {
    }

    /**
     * Fetches one row from the database as an object where the column values
     * are mapped to object properties.
     *
     * Since PDO injects property values before invoking the constructor, any
     * initializations for defaults that you potentially have in your object's
     * constructor, will override the values that have been injected by
     * `fetchObject`. The default object returned is `\stdClass`
     *
     * @param string $statement
     * @param array  $values
     * @param string $class
     * @param array  $arguments
     *
     * @return object
     * @param string $className
     */
    public function fetchObject(string $statement, array $values = [], string $className = 'stdClass', array $arguments = []): object
    {
    }

    /**
     * Fetches a sequential array of rows from the database; the rows are
     * returned as objects where the column values are mapped to object
     * properties.
     *
     * Since PDO injects property values before invoking the constructor, any
     * initializations for defaults that you potentially have in your object's
     * constructor, will override the values that have been injected by
     * `fetchObject`. The default object returned is `\stdClass`
     *
     * @param string $statement
     * @param array  $values
     * @param string $class
     * @param array  $arguments
     *
     * @return array
     * @param string $className
     */
    public function fetchObjects(string $statement, array $values = [], string $className = 'stdClass', array $arguments = []): array
    {
    }

    /**
     * Fetches one row from the database as an associative array.
     *
     * @param string $statement
     * @param array  $values
     *
     * @return array
     */
    public function fetchOne(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches an associative array of rows as key-value pairs (first column is
     * the key, second column is the value).
     *
     * @param string $statement
     * @param array  $values
     *
     * @return array
     */
    public function fetchPairs(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches the very first value (i.e., first column of the first row).
     *
     * @param string $statement
     * @param array  $values
     *
     * @return mixed
     */
    public function fetchValue(string $statement, array $values = [])
    {
    }

    /**
     * Return the inner PDO (if any)
     *
     * @return \PDO
     */
    public function getAdapter(): \PDO
    {
    }

    /**
     * Retrieve a database connection attribute
     *
     * @param int $attribute
     *
     * @return mixed
     */
    public function getAttribute(int $attribute): mixed
    {
    }

    /**
     * Return an array of available PDO drivers (empty array if none available)
     *
     * @return array
     */
    public static function getAvailableDrivers(): array
    {
    }

    /**
     * Return the driver name
     *
     * @return string
     */
    public function getDriverName(): string
    {
    }

    /**
     * Returns the Profiler instance.
     *
     * @return ProfilerInterface
     */
    public function getProfiler(): ProfilerInterface
    {
    }

    /**
     * Gets the quote parameters based on the driver
     *
     * @param string $driver
     *
     * @return array
     */
    public function getQuoteNames(string $driver = ''): array
    {
    }

    /**
     * Is a transaction currently active? If the profiler is enabled, the
     * operation will be recorded. If the profiler is enabled, the operation
     * will be recorded.
     *
     * @return bool
     */
    public function inTransaction(): bool
    {
    }

    /**
     * Is the PDO connection active?
     *
     * @return bool
     */
    public function isConnected(): bool
    {
    }

    /**
     * Returns the last inserted autoincrement sequence value. If the profiler
     * is enabled, the operation will be recorded.
     *
     * @param string $name
     *
     * @return string
     */
    public function lastInsertId(string $name = null): string
    {
    }

    /**
     * Performs a query with bound values and returns the resulting
     * PDOStatement; array values will be passed through `quote()` and their
     * respective placeholders will be replaced in the query string. If the
     * profiler is enabled, the operation will be recorded.
     *
     * @param string $statement
     * @param array  $values
     *
     * @return \PDOStatement
     */
    public function perform(string $statement, array $values = []): \PDOStatement
    {
    }

    /**
     * Prepares an SQL statement for execution.
     *
     * @param string $statement
     * @param array  $options
     *
     * @return \PDOStatement|false
     */
    public function prepare(string $statement, array $options = []): \PDOStatement|bool
    {
    }

    /**
     * Queries the database and returns a PDOStatement. If the profiler is
     * enabled, the operation will be recorded.
     *
     * @param string $statement
     * @param mixed  ...$fetch
     *
     * @return \PDOStatement|false
     */
    public function query(string $statement): \PDOStatement|bool
    {
    }

    /**
     * Quotes a value for use in an SQL statement. This differs from
     * `PDO::quote()` in that it will convert an array into a string of
     * comma-separated quoted values. The default type is `PDO::PARAM_STR`
     *
     * @param mixed $value
     * @param int   $type
     *
     * @return string The quoted value.
     */
    public function quote($value, int $type = \PDO::PARAM_STR): string
    {
    }

    /**
     * Rolls back the current transaction, and restores autocommit mode. If the
     * profiler is enabled, the operation will be recorded.
     *
     * @return bool
     */
    public function rollBack(): bool
    {
    }

    /**
     * Set a database connection attribute
     *
     * @param int   $attribute
     * @param mixed $value
     *
     * @return bool
     */
    public function setAttribute(int $attribute, $value): bool
    {
    }

    /**
     * Sets the Profiler instance.
     *
     * @param ProfilerInterface $profiler
     */
    public function setProfiler(\Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface $profiler)
    {
    }

    /**
     * Bind a value using the proper PDO::PARAM_ type.
     *
     * @param \PDOStatement $statement
     * @param mixed         $name
     * @param mixed         $arguments
     * @return void
     */
    protected function performBind(\PDOStatement $statement, $name, $arguments): void
    {
    }

    /**
     * Helper method to get data from PDO based on the method passed
     *
     * @param string $method
     * @param array  $arguments
     * @param string $statement
     * @param array  $values
     *
     * @return array
     */
    protected function fetchData(string $method, array $arguments, string $statement, array $values = []): array
    {
    }
}
