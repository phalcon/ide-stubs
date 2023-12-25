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
 * Allows to define columns to be used on create or alter table operations
 *
 * ```php
 * use Phalcon\Db\Column as Column;
 *
 * // Column definition
 * $column = new Column(
 *     "id",
 *     [
 *         "type"          => Column::TYPE_INTEGER,
 *         "size"          => 10,
 *         "unsigned"      => true,
 *         "notNull"       => true,
 *         "autoIncrement" => true,
 *         "first"         => true,
 *         "comment"       => "",
 *     ]
 * );
 *
 * // Add column to existing table
 * $connection->addColumn("robots", null, $column);
 * ```
 */
class Column implements \Phalcon\Db\ColumnInterface
{
    /**
     * Bind Type Blob
     */
    const BIND_PARAM_BLOB = 3;

    /**
     * Bind Type Bool
     */
    const BIND_PARAM_BOOL = 5;

    /**
     * Bind Type Decimal
     */
    const BIND_PARAM_DECIMAL = 32;

    /**
     * Bind Type Integer
     */
    const BIND_PARAM_INT = 1;

    /**
     * Bind Type Null
     */
    const BIND_PARAM_NULL = 0;

    /**
     * Bind Type String
     */
    const BIND_PARAM_STR = 2;

    /**
     * Skip binding by type
     */
    const BIND_SKIP = 1024;

    /**
     * Big integer abstract data type
     */
    const TYPE_BIGINTEGER = 14;

    /**
     * Bit abstract data type
     */
    const TYPE_BIT = 19;

    /**
     * Binary abstract data type
     */
    const TYPE_BINARY = 26;

    /**
     * Blob abstract data type
     */
    const TYPE_BLOB = 11;

    /**
     * Bool abstract data type
     */
    const TYPE_BOOLEAN = 8;

    /**
     * Char abstract data type
     */
    const TYPE_CHAR = 5;

    /**
     * Date abstract data type
     */
    const TYPE_DATE = 1;

    /**
     * Datetime abstract data type
     */
    const TYPE_DATETIME = 4;

    /**
     * Decimal abstract data type
     */
    const TYPE_DECIMAL = 3;

    /**
     * Double abstract data type
     */
    const TYPE_DOUBLE = 9;

    /**
     * Enum abstract data type
     */
    const TYPE_ENUM = 18;

    /**
     * Float abstract data type
     */
    const TYPE_FLOAT = 7;

    /**
     * Int abstract data type
     */
    const TYPE_INTEGER = 0;

    /**
     * Json abstract data type
     */
    const TYPE_JSON = 15;

    /**
     * Jsonb abstract data type
     */
    const TYPE_JSONB = 16;

    /**
     * Longblob abstract data type
     */
    const TYPE_LONGBLOB = 13;

    /**
     * Longtext abstract data type
     */
    const TYPE_LONGTEXT = 24;

    /**
     * Mediumblob abstract data type
     */
    const TYPE_MEDIUMBLOB = 12;

    /**
     * Mediumintegerr abstract data type
     */
    const TYPE_MEDIUMINTEGER = 21;

    /**
     * Mediumtext abstract data type
     */
    const TYPE_MEDIUMTEXT = 23;

    /**
     * Smallint abstract data type
     */
    const TYPE_SMALLINTEGER = 22;

    /**
     * Text abstract data type
     */
    const TYPE_TEXT = 6;

    /**
     * Time abstract data type
     */
    const TYPE_TIME = 20;

    /**
     * Timestamp abstract data type
     */
    const TYPE_TIMESTAMP = 17;

    /**
     * Tinyblob abstract data type
     */
    const TYPE_TINYBLOB = 10;

    /**
     * Tinyint abstract data type
     */
    const TYPE_TINYINTEGER = 26;

    /**
     * Tinytext abstract data type
     */
    const TYPE_TINYTEXT = 25;

    /**
     * Varbinary abstract data type
     */
    const TYPE_VARBINARY = 27;

    /**
     * Varchar abstract data type
     */
    const TYPE_VARCHAR = 2;

    /**
     * Column Position
     *
     * @var string|null
     */
    protected $after = null;

    /**
     * Column is autoIncrement?
     *
     * @var bool
     */
    protected $autoIncrement = false;

    /**
     * Bind Type
     *
     * @var int
     */
    protected $bindType = 2;

    /**
     * Column's comment
     *
     * @var string|null
     */
    protected $comment = null;

    /**
     * Default column value
     *
     * @var mixed|null
     */
    protected $defaultValue = null;

    /**
     * Position is first
     *
     * @var bool
     */
    protected $first = false;

    /**
     * The column have some numeric type?
     *
     * @var bool
     */
    protected $isNumeric = false;

    /**
     * Column's name
     *
     * @var string
     */
    protected $name;

    /**
     * Column not nullable?
     *
     * Default SQL definition is NOT NULL.
     *
     * @var bool
     */
    protected $notNull = true;

    /**
     * Column is part of the primary key?
     *
     * @var bool
     */
    protected $primary = false;

    /**
     * Integer column number scale
     *
     * @var int
     */
    protected $scale = 0;

    /**
     * Integer column size
     *
     * @var int|string
     */
    protected $size = 0;

    /**
     * Column data type
     *
     * @var int
     */
    protected $type;

    /**
     * Column data type reference
     *
     * @var int
     */
    protected $typeReference = -1;

    /**
     * Column data type values
     *
     * @var array|string
     */
    protected $typeValues;

    /**
     * Integer column unsigned?
     *
     * @var bool
     */
    protected $unsigned = false;

    /**
     * Phalcon\Db\Column constructor
     *
     * @param string $name
     * @param array $definition
     */
    public function __construct(string $name, array $definition)
    {
    }

    /**
     * Check whether field absolute to position in table
     *
     * @return string|null
     */
    public function getAfterPosition(): string|null
    {
    }

    /**
     * Returns the type of bind handling
     *
     * @return int
     */
    public function getBindType(): int
    {
    }

    /**
     * Column's comment
     *
     * @return string|null
     */
    public function getComment(): string|null
    {
    }

    /**
     * Default column value
     *
     * @return mixed
     */
    public function getDefault(): mixed
    {
    }

    /**
     * Column's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Integer column number scale
     *
     * @return int
     */
    public function getScale(): int
    {
    }

    /**
     * Integer column size
     *
     * @return int|string
     */
    public function getSize(): int|string
    {
    }

    /**
     * Column data type
     *
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * Column data type reference
     *
     * @return int
     */
    public function getTypeReference(): int
    {
    }

    /**
     * Column data type values
     *
     * @return array|string
     */
    public function getTypeValues(): string|array
    {
    }

    /**
     * Check whether column has default value
     *
     * @return bool
     */
    public function hasDefault(): bool
    {
    }

    /**
     * Auto-Increment
     *
     * @return bool
     */
    public function isAutoIncrement(): bool
    {
    }

    /**
     * Check whether column have first position in table
     *
     * @return bool
     */
    public function isFirst(): bool
    {
    }

    /**
     * Not null
     *
     * @return bool
     */
    public function isNotNull(): bool
    {
    }

    /**
     * Check whether column have an numeric type
     *
     * @return bool
     */
    public function isNumeric(): bool
    {
    }

    /**
     * Column is part of the primary key?
     *
     * @return bool
     */
    public function isPrimary(): bool
    {
    }

    /**
     * Returns true if number column is unsigned
     *
     * @return bool
     */
    public function isUnsigned(): bool
    {
    }
}
