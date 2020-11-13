<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Result;

use Phalcon\Db\Enum;

/**
 * Encapsulates the resultset internals
 *
 * ```php
 * $result = $connection->query("SELECT FROM robots ORDER BY name");
 *
 * $result->setFetchMode(
 *     \Phalcon\Db\Enum::FETCH_NUM
 * );
 *
 * while ($robot = $result->fetchArray()) {
 *     print_r($robot);
 * }
 * ```
 */
class Pdo implements \Phalcon\Db\ResultInterface
{

    protected $bindParams;


    protected $bindTypes;


    protected $connection;

    /**
     * Active fetch mode
     */
    protected $fetchMode = Enum::FETCH_OBJ;

    /**
     * Internal resultset
     *
     * @var \PDOStatement
     */
    protected $pdoStatement;


    protected $result;


    protected $rowCount = false;


    protected $sqlStatement;


    /**
     * Phalcon\Db\Result\Pdo constructor
     *
     * @param \Phalcon\Db\Adapter\AdapterInterface $connection
     * @param \PDOStatement $result
     * @param mixed $sqlStatement
     * @param mixed $bindParams
     * @param mixed $bindTypes
     */
    public function __construct(\Phalcon\Db\Adapter\AdapterInterface $connection, \PDOStatement $result, $sqlStatement = null, $bindParams = null, $bindTypes = null)
    {
    }

    /**
     * Moves internal resultset cursor to another position letting us to fetch a
     * certain row
     *
     * ```php
     * $result = $connection->query(
     *     "SELECT FROM robots ORDER BY name"
     * );
     *
     * // Move to third row on result
     * $result->dataSeek(2);
     *
     * // Fetch third row
     * $row = $result->fetch();
     * ```
     *
     * @param int $number
     *
     * @return void
     */
    public function dataSeek(int $number)
    {
    }

    /**
     * Allows to execute the statement again. Some database systems don't
     * support scrollable cursors. So, as cursors are forward only, we need to
     * execute the cursor again to fetch rows from the beginning
     *
     * @return bool
     */
    public function execute(): bool
    {
    }

    /**
     * Fetches an array/object of strings that corresponds to the fetched row,
     * or FALSE if there are no more rows. This method is affected by the active
     * fetch flag set using `Phalcon\Db\Result\Pdo::setFetchMode()`
     *
     * ```php
     * $result = $connection->query("SELECT FROM robots ORDER BY name");
     *
     * $result->setFetchMode(
     *     \Phalcon\Enum::FETCH_OBJ
     * );
     *
     * while ($robot = $result->fetch()) {
     *     echo $robot->name;
     * }
     * ```
     *
     * @param mixed $fetchStyle
     * @param mixed $cursorOrientation
     * @param mixed $cursorOffset
     */
    public function fetch($fetchStyle = null, $cursorOrientation = null, $cursorOffset = null)
    {
    }

    /**
     * Returns an array of arrays containing all the records in the result
     * This method is affected by the active fetch flag set using
     * `Phalcon\Db\Result\Pdo::setFetchMode()`
     *
     * ```php
     * $result = $connection->query(
     *     "SELECT FROM robots ORDER BY name"
     * );
     *
     * $robots = $result->fetchAll();
     * ```
     *
     * @param mixed $fetchStyle
     * @param mixed $fetchArgument
     * @param mixed $ctorArgs
     * @return array
     */
    public function fetchAll($fetchStyle = null, $fetchArgument = null, $ctorArgs = null): array
    {
    }

    /**
     * Returns an array of strings that corresponds to the fetched row, or FALSE
     * if there are no more rows. This method is affected by the active fetch
     * flag set using `Phalcon\Db\Result\Pdo::setFetchMode()`
     *
     * ```php
     * $result = $connection->query("SELECT FROM robots ORDER BY name");
     *
     * $result->setFetchMode(
     *     \Phalcon\Enum::FETCH_NUM
     * );
     *
     * while ($robot = result->fetchArray()) {
     *     print_r($robot);
     * }
     * ```
     */
    public function fetchArray()
    {
    }

    /**
     * Gets the internal PDO result object
     *
     * @return \PDOStatement
     */
    public function getInternalResult(): \PDOStatement
    {
    }

    /**
     * Gets number of rows returned by a resultset
     *
     * ```php
     * $result = $connection->query(
     *     "SELECT FROM robots ORDER BY name"
     * );
     *
     * echo "There are ", $result->numRows(), " rows in the resultset";
     * ```
     *
     * @return int
     */
    public function numRows(): int
    {
    }

    /**
     * Changes the fetching mode affecting Phalcon\Db\Result\Pdo::fetch()
     *
     * ```php
     * // Return array with integer indexes
     * $result->setFetchMode(
     *     \Phalcon\Enum::FETCH_NUM
     * );
     *
     * // Return associative array without integer indexes
     * $result->setFetchMode(
     *     \Phalcon\Enum::FETCH_ASSOC
     * );
     *
     * // Return associative array together with integer indexes
     * $result->setFetchMode(
     *     \Phalcon\Enum::FETCH_BOTH
     * );
     *
     * // Return an object
     * $result->setFetchMode(
     *     \Phalcon\Enum::FETCH_OBJ
     * );
     * ```
     *
     * @param int $fetchMode
     * @param mixed $colNoOrClassNameOrObject
     * @param mixed $ctorargs
     * @return bool
     */
    public function setFetchMode(int $fetchMode, $colNoOrClassNameOrObject = null, $ctorargs = null): bool
    {
    }
}
