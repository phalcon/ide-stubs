<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

use Phalcon\Contracts\Db\DbTypes;
use Phalcon\Db\Exceptions\ForeignKeyColumnsRequired;
use Phalcon\Db\Exceptions\ReferencedColumnCountMismatch;
use Phalcon\Db\Exceptions\ReferencedColumnsRequired;
use Phalcon\Db\Exceptions\ReferencedTableRequired;

/**
 * Allows to define reference constraints on tables
 *
 * ```php
 * $reference = new \Phalcon\Db\Reference(
 *     "field_fk",
 *     [
 *         "referencedSchema"  => "invoicing",
 *         "referencedTable"   => "products",
 *         "columns"           => [
 *             "producttype",
 *             "product_code",
 *         ],
 *         "referencedColumns" => [
 *             "type",
 *             "code",
 *         ],
 *     ]
 * );
 * ```
 *
 * @phpstan-import-type db_column_names from DbTypes
 * @phpstan-import-type db_reference_definition from DbTypes
 */
class Reference implements \Phalcon\Db\ReferenceInterface
{
    /**
     * Local reference columns
     *
     * @var array
     *
     * @phpstan-var db_column_names
     */
    protected $columns;

    /**
     * Constraint name
     *
     * @var string
     */
    protected $name;

    /**
     * Referenced Columns
     *
     * @var array
     *
     * @phpstan-var db_column_names
     */
    protected $referencedColumns;

    /**
     * Referenced Schema
     *
     * @var string
     */
    protected $referencedSchema;

    /**
     * Referenced Table
     *
     * @var string
     */
    protected $referencedTable;

    /**
     * Schema name
     *
     * @var string
     */
    protected $schemaName;

    /**
     * ON DELETE
     *
     * @var string
     */
    protected $onDelete;

    /**
     * ON UPDATE
     *
     * @var string
     */
    protected $onUpdate;

    /**
     * Phalcon\Db\Reference constructor
     *
     * @phpstan-param db_reference_definition $definition
     * @param string $name
     * @param array $definition
     */
    public function __construct(string $name, array $definition)
    {
    }

    /**
     * Local reference columns
     *
     * @phpstan-return db_column_names
     * @return array
     */
    public function getColumns(): array
    {
    }

    /**
     * Constraint name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Referenced Columns
     *
     * @phpstan-return db_column_names
     * @return array
     */
    public function getReferencedColumns(): array
    {
    }

    /**
     * Referenced Schema
     *
     * @return string|null
     */
    public function getReferencedSchema(): string|null
    {
    }

    /**
     * Referenced Table
     *
     * @return string
     */
    public function getReferencedTable(): string
    {
    }

    /**
     * Schema name
     *
     * @return string|null
     */
    public function getSchemaName(): string|null
    {
    }

    /**
     * ON DELETE
     *
     * @return string|null
     */
    public function getOnDelete(): string|null
    {
    }

    /**
     * ON UPDATE
     *
     * @return string|null
     */
    public function getOnUpdate(): string|null
    {
    }
}
