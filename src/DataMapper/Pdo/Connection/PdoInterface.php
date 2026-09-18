<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Connection;

use Phalcon\Contracts\DataMapper\DataMapperTypes;

/**
 * An interface to the native PDO object.
 *
 * @phpstan-import-type datamapper_drivers from DataMapperTypes
 * @phpstan-import-type datamapper_error_info from DataMapperTypes
 * @phpstan-import-type datamapper_pdo_options from DataMapperTypes
 * @phpstan-import-type datamapper_quote_value from DataMapperTypes
 */
interface PdoInterface
{
    /**
     * Return an array of available PDO drivers (empty array if none available)
     *
     * @phpstan-return datamapper_drivers
     * @return array
     */
    public static function getAvailableDrivers(): array;

    /**
     * Begins a transaction. If the profiler is enabled, the operation will
     * be recorded.
     *
     * @return bool
     */
    public function beginTransaction(): bool;

    /**
     * Commits the existing transaction. If the profiler is enabled, the
     * operation will be recorded.
     *
     * @return bool
     */
    public function commit(): bool;

    /**
     * Gets the most recent error code.
     *
     * @return string|null
     */
    public function errorCode(): string|null;

    /**
     * Gets the most recent error info.
     *
     * @phpstan-return datamapper_error_info
     * @return array
     */
    public function errorInfo(): array;

    /**
     * Executes an SQL statement and returns the number of affected rows. If
     * the profiler is enabled, the operation will be recorded.
     *
     * @param string $statement
     * @return int
     */
    public function exec(string $statement): int;

    /**
     * Retrieve a database connection attribute
     *
     * @param int $attribute
     * @return mixed
     */
    public function getAttribute(int $attribute): mixed;

    /**
     * Is a transaction currently active? If the profiler is enabled, the
     * operation will be recorded. If the profiler is enabled, the operation
     * will be recorded.
     *
     * @return bool
     */
    public function inTransaction(): bool;

    /**
     * Returns the last inserted autoincrement sequence value. If the profiler
     * is enabled, the operation will be recorded.
     *
     * @param string|null $name
     * @return string
     */
    public function lastInsertId(?string $name = null): string;

    /**
     * Prepares an SQL statement for execution.
     *
     * @phpstan-param datamapper_pdo_options $options
     * @param string $statement
     * @param array $options
     * @return bool|\PDOStatement
     */
    public function prepare(string $statement, array $options = []): \PDOStatement|bool;

    /**
     * Queries the database and returns a PDOStatement. If the profiler is
     * enabled, the operation will be recorded.
     *
     * @param string $statement
     * @param mixed  ...$fetch
     *
     * @return \PDOStatement|false
     */
    public function query(string $statement): \PDOStatement|bool;

    /**
     * Quotes a value for use in an SQL statement. This differs from
     * `PDO::quote()` in that it will convert an array into a string of
     * comma-separated quoted values. The default type is `PDO::PARAM_STR`
     *
     * @phpstan-param datamapper_quote_value $value
     * @param mixed $value
     * @param int $type
     * @return string
     */
    public function quote($value, int $type = \PDO::PARAM_STR): string;

    /**
     * Rolls back the current transaction, and restores autocommit mode. If the
     * profiler is enabled, the operation will be recorded.
     *
     * @return bool
     */
    public function rollBack(): bool;

    /**
     * Set a database connection attribute
     *
     * @param int $attribute
     * @param mixed $value
     * @return bool
     */
    public function setAttribute(int $attribute, $value): bool;
}
