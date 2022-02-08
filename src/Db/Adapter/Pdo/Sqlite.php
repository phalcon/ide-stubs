<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Adapter\Pdo;

use Phalcon\Db\Adapter\Pdo\AbstractPdo as PdoAdapter;
use Phalcon\Db\Column;
use Phalcon\Db\ColumnInterface;
use Phalcon\Db\Enum;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\IndexInterface;
use Phalcon\Db\RawValue;
use Phalcon\Db\Reference;
use Phalcon\Db\ReferenceInterface;

/**
 * Specific functions for the SQLite database system
 *
 * ```php
 * use Phalcon\Db\Adapter\Pdo\Sqlite;
 *
 * $connection = new Sqlite(
 *     [
 *         "dbname" => "/tmp/test.sqlite",
 *     ]
 * );
 * ```
 */
class Sqlite extends \Phalcon\Db\Adapter\Pdo\AbstractPdo
{
    /**
     * @var string
     */
    protected $dialectType = 'sqlite';

    /**
     * @var string
     */
    protected $type = 'sqlite';

    /**
     * Constructor for Phalcon\Db\Adapter\Pdo\Sqlite
     *
     * @param array $descriptor
     */
    public function __construct(array $descriptor)
    {
    }

    /**
     * This method is automatically called in Phalcon\Db\Adapter\Pdo
     * constructor. Call it when you need to restore a database connection.
     *
     * @param array $descriptor
     * @return void
     */
    public function connect(array $descriptor = []): void
    {
    }

    /**
     * Returns an array of Phalcon\Db\Column objects describing a table
     *
     * ```php
     * print_r(
     *     $connection->describeColumns("posts")
     * );
     * ```
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ColumnInterface[]
     */
    public function describeColumns(string $table, string $schema = null): array
    {
    }

    /**
     * Lists table indexes
     *
     * ```php
     * print_r(
     *     $connection->describeIndexes("robots_parts")
     * );
     * ```
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\IndexInterface[]
     */
    public function describeIndexes(string $table, string $schema = null): array
    {
    }

    /**
     * Lists table references
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array
    {
    }

    /**
     * Returns the default value to make the RBDM use the default value declared
     * in the table definition
     *
     * ```php
     * // Inserting a new robot with a valid default value for the column 'year'
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         "Astro Boy",
     *         $connection->getDefaultValue(),
     *     ],
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     * ```
     *
     * @return RawValue
     */
    public function getDefaultValue(): RawValue
    {
    }

    /**
     * Check whether the database system requires an explicit value for identity
     * columns
     *
     * @return bool
     */
    public function useExplicitIdValue(): bool
    {
    }

    /**
     * SQLite does not support the DEFAULT keyword
     *
     * @deprecated Will re removed in the next version
     * @return bool
     */
    public function supportsDefaultValue(): bool
    {
    }

    /**
     * Returns PDO adapter DSN defaults as a key-value map.
     *
     * @return array
     */
    protected function getDsnDefaults(): array
    {
    }
}
