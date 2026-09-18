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
use PDO;
use PDOException;
use PDOStatement;
use Phalcon\Contracts\DataMapper\DataMapperTypes;
use Phalcon\Contracts\Events\EventsAware;
use Phalcon\DataMapper\Pdo\Events;
use Phalcon\DataMapper\Pdo\Exception\OperationCancelled;
use Phalcon\DataMapper\Pdo\Exception\UnknownDriverMethod;
use Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;
use stdClass;
use Throwable;

/**
 * Provides array quoting, profiling, a new `perform()` method, new `fetch()`
 * methods
 *
 * Connections fire the lifecycle events in Phalcon\DataMapper\Pdo\Events when
 * an events manager is set. ConnectionInterface does not declare the events
 * manager methods; the EventsAware contract is applied here so that existing
 * implementations of the interface keep working.
 *
 * @phpstan-import-type datamapper_assoc_rows from DataMapperTypes
 * @phpstan-import-type datamapper_call_arguments from DataMapperTypes
 * @phpstan-import-type datamapper_column from DataMapperTypes
 * @phpstan-import-type datamapper_constructor_arguments from DataMapperTypes
 * @phpstan-import-type datamapper_drivers from DataMapperTypes
 * @phpstan-import-type datamapper_error_info from DataMapperTypes
 * @phpstan-import-type datamapper_fetch_arguments from DataMapperTypes
 * @phpstan-import-type datamapper_fetch_result from DataMapperTypes
 * @phpstan-import-type datamapper_grouped_rows from DataMapperTypes
 * @phpstan-import-type datamapper_objects from DataMapperTypes
 * @phpstan-import-type datamapper_pairs from DataMapperTypes
 * @phpstan-import-type datamapper_pdo_options from DataMapperTypes
 * @phpstan-import-type datamapper_quote_names from DataMapperTypes
 * @phpstan-import-type datamapper_quote_value from DataMapperTypes
 * @phpstan-import-type datamapper_row from DataMapperTypes
 * @phpstan-import-type datamapper_rows from DataMapperTypes
 * @phpstan-import-type datamapper_values from DataMapperTypes
 */
abstract class AbstractConnection implements \Phalcon\DataMapper\Pdo\Connection\ConnectionInterface, \Phalcon\Contracts\Events\EventsAware
{
    use \Phalcon\Events\Traits\EventsAwareTrait;


    /**
     * Whether to transparently reconnect and retry once when a statement fails
     * because the connection was lost. Opt-in; off by default.
     */
    protected bool $autoReconnect = false;

    /**
     * @var \PDO|null
     */
    protected $pdo;

    protected \Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface $profiler;

    /**
     * Current transaction nesting level. Tracked locally rather than via
     * PDO::inTransaction() because some drivers report a broken connection as
     * being "in transaction".
     */
    protected int $transactionLevel = 0;

    /**
     * Proxies to PDO methods created for specific drivers; in particular,
     * `sqlite` and `pgsql`.
     *
     * @param string $name
     * @phpstan-param datamapper_call_arguments $arguments
     *
     * @return mixed
     * @throws BadMethodCallException
     * @param array $arguments
     */
    public function __call($name, array $arguments)
    {
    }

    /**
     * Return an array of available PDO drivers (empty array if none available)
     *
     * @phpstan-return datamapper_drivers
     * @return array
     */
    public static function getAvailableDrivers(): array
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
     * @phpstan-assert !null $this->pdo
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
     * Ensures the connection is alive, reconnecting in place if it is not.
     * disconnect() is required first because connect() is idempotent and will
     * not rebuild a dead-but-present handle.
     *
     * @return void
     */
    public function ensureConnection(): void
    {
    }

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
     * @phpstan-return datamapper_error_info
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
     * @return int
     */
    public function exec(string $statement): int
    {
    }

    /**
     * Performs a statement and returns the number of affected rows.
     *
     * @phpstan-param datamapper_values $values
     * @param string $statement
     * @param array $values
     * @return int
     */
    public function fetchAffected(string $statement, array $values = []): int
    {
    }

    /**
     * Fetches a sequential array of rows from the database; the rows are
     * returned as associative arrays.
     *
     * @phpstan-param datamapper_values $values
     *
     * @phpstan-return datamapper_rows
     * @param string $statement
     * @param array $values
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
     * @phpstan-param datamapper_values $values
     *
     * @phpstan-return datamapper_assoc_rows
     * @param string $statement
     * @param array $values
     * @return array
     */
    public function fetchAssoc(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches a column of rows as a sequential array (default first one).
     *
     * @phpstan-param datamapper_values $values
     *
     * @phpstan-return datamapper_column
     * @param string $statement
     * @param array $values
     * @param int $column
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
     * @phpstan-param datamapper_values $values
     *
     * @phpstan-return datamapper_grouped_rows
     * @param string $statement
     * @param array $values
     * @param int $flags
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
     * PDOStatement::fetchObject() returns false when there is no row. The
     * interface declares `object`, so an empty `stdClass` is returned
     * instead. The `object|false` return type lands in v7.
     *
     * @phpstan-param datamapper_values                $values
     * @phpstan-param class-string|'stdClass'          $className
     * @phpstan-param datamapper_constructor_arguments $arguments
     * @param string $statement
     * @param array $values
     * @param string $className
     * @param array $arguments
     * @return object
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
     * @phpstan-param datamapper_values                $values
     * @phpstan-param class-string|'stdClass'          $className
     * @phpstan-param datamapper_constructor_arguments $arguments
     *
     * @phpstan-return datamapper_objects
     * @param string $statement
     * @param array $values
     * @param string $className
     * @param array $arguments
     * @return array
     */
    public function fetchObjects(string $statement, array $values = [], string $className = 'stdClass', array $arguments = []): array
    {
    }

    /**
     * Fetches one row from the database as an associative array.
     *
     * @phpstan-param datamapper_values $values
     *
     * @phpstan-return datamapper_row
     * @param string $statement
     * @param array $values
     * @return array
     */
    public function fetchOne(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches an associative array of rows as key-value pairs (first column is
     * the key, second column is the value).
     *
     * @phpstan-param datamapper_values $values
     *
     * @phpstan-return datamapper_pairs
     * @param string $statement
     * @param array $values
     * @return array
     */
    public function fetchPairs(string $statement, array $values = []): array
    {
    }

    /**
     * Fetches the very first value (i.e., first column of the first row).
     *
     * @return mixed
     *
     * @phpstan-param datamapper_values $values
     * @param string $statement
     * @param array $values
     */
    public function fetchValue(string $statement, array $values = [])
    {
    }

    /**
     * Return the inner PDO (if any)
     *
     * @return PDO
     */
    public function getAdapter(): \PDO
    {
    }

    /**
     * Retrieve a database connection attribute
     *
     * @return mixed
     * @param int $attribute
     */
    public function getAttribute(int $attribute): mixed
    {
    }

    /**
     * Returns whether transparent auto-reconnect is enabled.
     *
     * @return bool
     */
    public function getAutoReconnect(): bool
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
     * @phpstan-return datamapper_quote_names
     * @param string $driver
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
     * @param string|null $name
     * @return string
     */
    public function lastInsertId(?string $name = null): string
    {
    }

    /**
     * Performs a query with bound values and returns the resulting
     * PDOStatement; array values will be passed through `quote()` and their
     * respective placeholders will be replaced in the query string. If the
     * profiler is enabled, the operation will be recorded.
     *
     * @phpstan-param datamapper_values $values
     * @param string $statement
     * @param array $values
     * @return PDOStatement
     */
    public function perform(string $statement, array $values = []): \PDOStatement
    {
    }

    /**
     * Checks whether the underlying connection is still alive by issuing a
     * trivial query. Returns false if there is no handle or the probe fails.
     *
     * @return bool
     */
    public function ping(): bool
    {
    }

    /**
     * Prepares an SQL statement for execution.
     *
     * @phpstan-param datamapper_pdo_options $options
     * @param string $statement
     * @param array $options
     * @return bool|\PDOStatement
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
     *
     * @phpstan-param datamapper_quote_value $value
     * @param int $type
     * @return string
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
     * @param mixed $value
     * @param int $attribute
     * @return bool
     */
    public function setAttribute(int $attribute, $value): bool
    {
    }

    /**
     * Enables or disables transparent auto-reconnect on a lost connection.
     *
     * @param bool $autoReconnect
     * @return static
     */
    public function setAutoReconnect(bool $autoReconnect): static
    {
    }

    /**
     * Sets the Profiler instance.
     *
     * @param \Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface $profiler
     * @return static
     */
    public function setProfiler(\Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface $profiler): static
    {
    }

    /**
     * Helper method to get data from PDO based on the method passed
     *
     * @phpstan-param 'fetch'|'fetchAll'         $method
     * @phpstan-param datamapper_fetch_arguments $arguments
     * @phpstan-param datamapper_values          $values
     *
     * @phpstan-return datamapper_fetch_result
     * @param string $method
     * @param array $arguments
     * @param string $statement
     * @param array $values
     * @return array
     */
    protected function fetchData(string $method, array $arguments, string $statement, array $values = []): array
    {
    }

    /**
     * Fires a cancelable "before" event. A listener cancels by stopping the
     * event and returning false; see Phalcon\DataMapper\Pdo\Events for the
     * required idiom. The operation does not run when it is canceled.
     *
     * @param string     $eventName
     * @param mixed|null $data
     *
     * @throws OperationCancelled
     * @return void
     */
    protected function fireBefore(string $eventName, $data = null): void
    {
    }

    /**
     * Recognizes a lost ("gone away") connection. Detection is driver-agnostic:
     * the driver name is not queried because the underlying connection may be
     * dead by this point. The MySQL error codes and PostgreSQL SQLSTATEs do not
     * overlap, so all known signatures are checked unconditionally.
     *
     * @param \Throwable $exception
     * @return bool
     */
    protected function isConnectionError(\Throwable $exception): bool
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
     * Whether a failed statement may be transparently retried after
     * reconnecting. Only when auto-reconnect is on, a handle exists, we are
     * not in a transaction, and the failure is a recognized connection loss.
     *
     * @param \Throwable $exception
     * @return bool
     */
    private function canReconnect(\Throwable $exception): bool
    {
    }

    /**
     * Prepares, binds, and executes a statement, returning the PDOStatement.
     *
     * @phpstan-param datamapper_values $values
     * @param string $statement
     * @param array $values
     * @return PDOStatement
     */
    private function performStatement(string $statement, array $values): \PDOStatement
    {
    }

    /**
     * Drops the dead handle and rebuilds it. disconnect() first is required
     * because connect() is idempotent.
     *
     * @phpstan-assert !null $this->pdo
     * @return void
     */
    private function reconnect(): void
    {
    }
}
