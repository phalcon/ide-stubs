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
use Phalcon\Db\RawValue;
use Phalcon\Db\Reference;
use Phalcon\Db\ReferenceInterface;
use Throwable;

/**
 * Specific functions for the PostgreSQL database system
 *
 * ```php
 * use Phalcon\Db\Adapter\Pdo\Postgresql;
 *
 * $config = [
 *     "host"     => "localhost",
 *     "dbname"   => "blog",
 *     "port"     => 5432,
 *     "username" => "postgres",
 *     "password" => "secret",
 * ];
 *
 * $connection = new Postgresql($config);
 * ```
 */
class Postgresql extends \Phalcon\Db\Adapter\Pdo\AbstractPdo
{
    /**
     * @var string
     */
    protected $dialectType = 'postgresql';

    /**
     * @var string
     */
    protected $type = 'pgsql';

    /**
     * Constructor for Phalcon\Db\Adapter\Pdo\Postgresql
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
     * Creates a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param array $definition
     * @return bool
     */
    public function createTable(string $tableName, string $schemaName, array $definition): bool
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
     * Lists table references
     *
     * ```php
     * print_r(
     *     $connection->describeReferences("robots_parts")
     * );
     * ```
     *
     * @param string $table
     * @param string $schema
     * @return array|\Phalcon\Db\ReferenceInterface[]
     */
    public function describeReferences(string $table, string $schema = null): array
    {
    }

    /**
     * Returns the default identity value to be inserted in an identity column
     *
     * ```php
     * // Inserting a new robot with a valid default value for the column 'id'
     * $success = $connection->insert(
     *     "robots",
     *     [
     *         $connection->getDefaultIdValue(),
     *         "Astro Boy",
     *         1952,
     *     ],
     *     [
     *         "id",
     *         "name",
     *         "year",
     *     ]
     * );
     * ```
     *
     * @return RawValue
     */
    public function getDefaultIdValue(): RawValue
    {
    }

    /**
     * Modifies a table column based on a definition
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ColumnInterface $column
     * @param \Phalcon\Db\ColumnInterface $currentColumn
     * @return bool
     */
    public function modifyColumn(string $tableName, string $schemaName, \Phalcon\Db\ColumnInterface $column, \Phalcon\Db\ColumnInterface $currentColumn = null): bool
    {
    }

    /**
     * Check whether the database system requires a sequence to produce
     * auto-numeric values
     *
     * @return bool
     */
    public function supportSequences(): bool
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
     * Returns PDO adapter DSN defaults as a key-value map.
     *
     * @return array
     */
    protected function getDsnDefaults(): array
    {
    }
}
