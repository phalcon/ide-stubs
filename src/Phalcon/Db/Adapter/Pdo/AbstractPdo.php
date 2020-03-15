<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Adapter\Pdo;

use Phalcon\Db\Adapter\AbstractAdapter;

/**
 * Phalcon\Db\Adapter\Pdo is the Phalcon\Db that internally uses PDO to connect
 * to a database
 *
 * ```php
 * use Phalcon\Db\Adapter\Pdo\Mysql;
 *
 * $config = [
 *     "host"     => "localhost",
 *     "dbname"   => "blog",
 *     "port"     => 3306,
 *     "username" => "sigma",
 *     "password" => "secret",
 * ];
 *
 * $connection = new Mysql($config);
 * ```
 */
abstract class AbstractPdo extends AbstractAdapter
{
    /**
     * Last affected rows
     */
    protected $affectedRows;

    /**
     * PDO Handler
     *
     * @var \PDO
     */
    protected $pdo;


    /**
     * Constructor for Phalcon\Db\Adapter\Pdo
     *
     * @param array|\Phalcon\Config $descriptor = [
     *     'host' => 'localhost',
     *     'port' => '3306',
     *     'dbname' => 'blog',
     *     'username' => 'sigma'
     *     'password' => 'secret'
     *     'dialectClass' => null,
     *     'options' => [],
     *     'dsn' => null,
     *     'charset' => 'utf8mb4'
     * ]
     */
    public function __construct(array $descriptor)
    {
    }

    /**
     * Returns the number of affected rows by the latest INSERT/UPDATE/DELETE
     * executed in the database system
     *
     * ```php
     * $connection->execute(
     *     "DELETE FROM robots"
     * );
     *
     * echo $connection->affectedRows(), " were deleted";
     * ```
     *
     * @return int
     */
    public function affectedRows(): int
    {
    }

    /**
     * Starts a transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function begin(bool $nesting = true): bool
    {
    }

    /**
     * Commits the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function commit(bool $nesting = true): bool
    {
    }

    /**
     * Closes the active connection returning success. Phalcon automatically
     * closes and destroys active connections when the request ends
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * This method is automatically called in \Phalcon\Db\Adapter\Pdo
     * constructor.
     *
     * Call it when you need to restore a database connection.
     *
     * ```php
     * use Phalcon\Db\Adapter\Pdo\Mysql;
     *
     * // Make a connection
     * $connection = new Mysql(
     *     [
     *         "host"     => "localhost",
     *         "username" => "sigma",
     *         "password" => "secret",
     *         "dbname"   => "blog",
     *         "port"     => 3306,
     *     ]
     * );
     *
     * // Reconnect
     * $connection->connect();
     * ```
     *
     * @param array $descriptor
     * @return bool
     */
    public function connect(array $descriptor = null): bool
    {
    }

    /**
     * Converts bound parameters such as :name: or ?1 into PDO bind params ?
     *
     * ```php
     * print_r(
     *     $connection->convertBoundParams(
     *         "SELECT FROM robots WHERE name = :name:",
     *         [
     *             "Bender",
     *         ]
     *     )
     * );
     * ```
     *
     * @param string $sql
     * @param array $params
     * @return array
     */
    public function convertBoundParams(string $sql, array $params = array()): array
    {
    }

    /**
     * Escapes a value to avoid SQL injections according to the active charset
     * in the connection
     *
     * ```php
     * $escapedStr = $connection->escapeString("some dangerous value");
     * ```
     *
     * @param string $str
     * @return string
     */
    public function escapeString(string $str): string
    {
    }

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server doesn't
     * return any rows
     *
     * ```php
     * // Inserting data
     * $success = $connection->execute(
     *     "INSERT INTO robots VALUES (1, 'Astro Boy')"
     * );
     *
     * $success = $connection->execute(
     *     "INSERT INTO robots VALUES (?, ?)",
     *     [
     *         1,
     *         "Astro Boy",
     *     ]
     * );
     * ```
     *
     * @param string $sqlStatement
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return bool
     */
    public function execute(string $sqlStatement, $bindParams = null, $bindTypes = null): bool
    {
    }

    /**
     * Executes a prepared statement binding. This function uses integer indexes
     * starting from zero
     *
     * ```php
     * use Phalcon\Db\Column;
     *
     * $statement = $db->prepare(
     *     "SELECT FROM robots WHERE name = :name"
     * );
     *
     * $result = $connection->executePrepared(
     *     $statement,
     *     [
     *         "name" => "Voltron",
     *     ],
     *     [
     *         "name" => Column::BIND_PARAM_INT,
     *     ]
     * );
     * ```
     *
     * @param \PDOStatement $statement
     * @param array $placeholders
     * @param mixed $dataTypes
     * @return \PDOStatement
     */
    public function executePrepared(\PDOStatement $statement, array $placeholders, $dataTypes): \PDOStatement
    {
    }

    /**
     * Return the error info, if any
     */
    public function getErrorInfo()
    {
    }

    /**
     * Return internal PDO handler
     *
     * @return \PDO
     */
    public function getInternalHandler(): \PDO
    {
    }

    /**
     * Returns the current transaction nesting level
     *
     * @return int
     */
    public function getTransactionLevel(): int
    {
    }

    /**
     * Checks whether the connection is under a transaction
     *
     * ```php
     * $connection->begin();
     *
     * // true
     * var_dump(
     *     $connection->isUnderTransaction()
     * );
     * ```
     *
     * @return bool
     */
    public function isUnderTransaction(): bool
    {
    }

    /**
     * Returns the insert id for the auto_increment/serial column inserted in
     * the latest executed SQL statement
     *
     * ```php
     * // Inserting a new robot
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         "Astro Boy",
     *         1952,
     *     ],
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     *
     * // Getting the generated id
     * $id = $connection->lastInsertId();
     * ```
     *
     * @param mixed $sequenceName
     * @return int|bool
     */
    public function lastInsertId($sequenceName = null)
    {
    }

    /**
     * Returns a PDO prepared statement to be executed with 'executePrepared'
     *
     * ```php
     * use Phalcon\Db\Column;
     *
     * $statement = $db->prepare(
     *     "SELECT FROM robots WHERE name = :name"
     * );
     *
     * $result = $connection->executePrepared(
     *     $statement,
     *     [
     *         "name" => "Voltron",
     *     ],
     *     [
     *         "name" => Column::BIND_PARAM_INT,
     *     ]
     * );
     * ```
     *
     * @param string $sqlStatement
     * @return \PDOStatement
     */
    public function prepare(string $sqlStatement): \PDOStatement
    {
    }

    /**
     * Sends SQL statements to the database server returning the success state.
     * Use this method only when the SQL statement sent to the server is
     * returning rows
     *
     * ```php
     * // Querying data
     * $resultset = $connection->query(
     *     "SELECT FROM robots WHERE type = 'mechanical'"
     * );
     *
     * $resultset = $connection->query(
     *     "SELECT FROM robots WHERE type = ?",
     *     [
     *         "mechanical",
     *     ]
     * );
     * ```
     *
     * @param string $sqlStatement
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return mixed
     */
    public function query(string $sqlStatement, $bindParams = null, $bindTypes = null)
    {
    }

    /**
     * Rollbacks the active transaction in the connection
     *
     * @param bool $nesting
     * @return bool
     */
    public function rollback(bool $nesting = true): bool
    {
    }

    /**
     * Returns PDO adapter DSN defaults as a key-value map.
     *
     * @return array
     */
    abstract protected function getDsnDefaults(): array;
}
