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
     *
     * @var int
     */
    const BIND_PARAM_BLOB = 3;

    /**
     * Bind Type Bool
     *
     * @var int
     */
    const BIND_PARAM_BOOL = 5;

    /**
     * Bind Type Decimal
     *
     * @var int
     */
    const BIND_PARAM_DECIMAL = 32;

    /**
     * Bind Type Integer
     *
     * @var int
     */
    const BIND_PARAM_INT = 1;

    /**
     * Bind Type Null
     *
     * @var int
     */
    const BIND_PARAM_NULL = 0;

    /**
     * Bind Type String
     *
     * @var int
     */
    const BIND_PARAM_STR = 2;

    /**
     * Skip binding by type
     *
     * @var int
     */
    const BIND_SKIP = 1024;

    /**
     * Big integer abstract data type
     *
     * @var int
     */
    const TYPE_BIGINTEGER = 14;

    /**
     * Bit abstract data type
     *
     * @var int
     */
    const TYPE_BIT = 19;

    /**
     * Binary abstract data type
     *
     * @var int
     */
    const TYPE_BINARY = 27;

    /**
     * Blob abstract data type
     *
     * @var int
     */
    const TYPE_BLOB = 11;

    /**
     * Bool abstract data type
     *
     * @var int
     */
    const TYPE_BOOLEAN = 8;

    /**
     * Char abstract data type
     *
     * @var int
     */
    const TYPE_CHAR = 5;

    /**
     * Date abstract data type
     *
     * @var int
     */
    const TYPE_DATE = 1;

    /**
     * Datetime abstract data type
     *
     * @var int
     */
    const TYPE_DATETIME = 4;

    /**
     * Decimal abstract data type
     *
     * @var int
     */
    const TYPE_DECIMAL = 3;

    /**
     * Double abstract data type
     *
     * @var int
     */
    const TYPE_DOUBLE = 9;

    /**
     * Enum abstract data type
     *
     * @var int
     */
    const TYPE_ENUM = 18;

    /**
     * Float abstract data type
     *
     * @var int
     */
    const TYPE_FLOAT = 7;

    /**
     * Int abstract data type
     *
     * @var int
     */
    const TYPE_INTEGER = 0;

    /**
     * Json abstract data type
     *
     * @var int
     */
    const TYPE_JSON = 15;

    /**
     * Jsonb abstract data type
     *
     * @var int
     */
    const TYPE_JSONB = 16;

    /**
     * Longblob abstract data type
     *
     * @var int
     */
    const TYPE_LONGBLOB = 13;

    /**
     * Longtext abstract data type
     *
     * @var int
     */
    const TYPE_LONGTEXT = 24;

    /**
     * Mediumblob abstract data type
     *
     * @var int
     */
    const TYPE_MEDIUMBLOB = 12;

    /**
     * Mediumintegerr abstract data type
     *
     * @var int
     */
    const TYPE_MEDIUMINTEGER = 21;

    /**
     * Mediumtext abstract data type
     *
     * @var int
     */
    const TYPE_MEDIUMTEXT = 23;

    /**
     * Smallint abstract data type
     *
     * @var int
     */
    const TYPE_SMALLINTEGER = 22;

    /**
     * Text abstract data type
     *
     * @var int
     */
    const TYPE_TEXT = 6;

    /**
     * Time abstract data type
     *
     * @var int
     */
    const TYPE_TIME = 20;

    /**
     * Timestamp abstract data type
     *
     * @var int
     */
    const TYPE_TIMESTAMP = 17;

    /**
     * Tinyblob abstract data type
     *
     * @var int
     */
    const TYPE_TINYBLOB = 10;

    /**
     * Tinyint abstract data type
     *
     * @var int
     */
    const TYPE_TINYINTEGER = 26;

    /**
     * Tinytext abstract data type
     *
     * @var int
     */
    const TYPE_TINYTEXT = 25;

    /**
     * Varbinary abstract data type
     *
     * @var int
     */
    const TYPE_VARBINARY = 28;

    /**
     * Varchar abstract data type
     *
     * @var int
     */
    const TYPE_VARCHAR = 2;

    /**
     * Column Position
     *
     * @var string
     */
    protected $after = '';

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
    protected $typeValues = [];

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
     * @return string
     */
    public function getAfterPosition(): string
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
