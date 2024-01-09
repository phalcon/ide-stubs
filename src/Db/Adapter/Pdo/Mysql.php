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
use Phalcon\Db\Reference;
use Phalcon\Db\ReferenceInterface;

/**
 * Specific functions for the MySQL database system
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
class Mysql extends \Phalcon\Db\Adapter\Pdo\AbstractPdo
{
    /**
     * @var string
     */
    protected $dialectType = 'mysql';

    /**
     * @var string
     */
    protected $type = 'mysql';

    /**
     * Adds a foreign key to a table
     *
     * @param string $tableName
     * @param string $schemaName
     * @param \Phalcon\Db\ReferenceInterface $reference
     * @return bool
     */
    public function addForeignKey(string $tableName, string $schemaName, \Phalcon\Db\ReferenceInterface $reference): bool
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
     * Returns PDO adapter DSN defaults as a key-value map.
     *
     * @return array
     */
    protected function getDsnDefaults(): array
    {
    }
}
