<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

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
 */
class Reference implements \Phalcon\Db\ReferenceInterface
{
    /**
     * Local reference columns
     *
     * @var array
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
     * @param string $name
     * @param array $definition
     */
    public function __construct(string $name, array $definition)
    {
    }

    /**
     * Local reference columns
     *
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
     * @return array
     */
    public function getReferencedColumns(): array
    {
    }

    /**
     * Referenced Schema
     *
     * @return string
     */
    public function getReferencedSchema(): string
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
     * @return string
     */
    public function getSchemaName(): string
    {
    }

    /**
     * ON DELETE
     *
     * @return string
     */
    public function getOnDelete(): string
    {
    }

    /**
     * ON UPDATE
     *
     * @return string
     */
    public function getOnUpdate(): string
    {
    }
}
