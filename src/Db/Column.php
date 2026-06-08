<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

use Phalcon\Db\Exceptions\ColumnTypeRejectsAutoIncrement;
use Phalcon\Db\Exceptions\ColumnTypeRejectsScale;
use Phalcon\Db\Exceptions\ColumnTypeRequired;
use Phalcon\Db\Exceptions\GeneratedAutoIncrementConflict;
use Phalcon\Db\Exceptions\GeneratedDefaultConflict;
use Phalcon\Db\Exceptions\InvalidGenerationExpression;

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
    const int BIND_PARAM_BLOB = 3;

    /**
     * Bind Type Bool
     *
     * @var int
     */
    const int BIND_PARAM_BOOL = 5;

    /**
     * Bind Type Decimal
     *
     * @var int
     */
    const int BIND_PARAM_DECIMAL = 32;

    /**
     * Bind Type Integer
     *
     * @var int
     */
    const int BIND_PARAM_INT = 1;

    /**
     * Bind Type Null
     *
     * @var int
     */
    const int BIND_PARAM_NULL = 0;

    /**
     * Bind Type String
     *
     * @var int
     */
    const int BIND_PARAM_STR = 2;

    /**
     * Skip binding by type
     *
     * @var int
     */
    const int BIND_SKIP = 1024;

    /**
     * Big integer abstract data type
     *
     * @var int
     */
    const int TYPE_BIGINTEGER = 14;

    /**
     * Bit abstract data type
     *
     * @var int
     */
    const int TYPE_BIT = 19;

    /**
     * Binary abstract data type
     *
     * @var int
     */
    const int TYPE_BINARY = 27;

    /**
     * Blob abstract data type
     *
     * @var int
     */
    const int TYPE_BLOB = 11;

    /**
     * Bool abstract data type
     *
     * @var int
     */
    const int TYPE_BOOLEAN = 8;

    /**
     * Char abstract data type
     *
     * @var int
     */
    const int TYPE_CHAR = 5;

    /**
     * Date abstract data type
     *
     * @var int
     */
    const int TYPE_DATE = 1;

    /**
     * Datetime abstract data type
     *
     * @var int
     */
    const int TYPE_DATETIME = 4;

    /**
     * Decimal abstract data type
     *
     * @var int
     */
    const int TYPE_DECIMAL = 3;

    /**
     * Double abstract data type
     *
     * @var int
     */
    const int TYPE_DOUBLE = 9;

    /**
     * Enum abstract data type
     *
     * @var int
     */
    const int TYPE_ENUM = 18;

    /**
     * Float abstract data type
     *
     * @var int
     */
    const int TYPE_FLOAT = 7;

    /**
     * Int abstract data type
     *
     * @var int
     */
    const int TYPE_INTEGER = 0;

    /**
     * Json abstract data type
     *
     * @var int
     */
    const int TYPE_JSON = 15;

    /**
     * Jsonb abstract data type
     *
     * @var int
     */
    const int TYPE_JSONB = 16;

    /**
     * Longblob abstract data type
     *
     * @var int
     */
    const int TYPE_LONGBLOB = 13;

    /**
     * Longtext abstract data type
     *
     * @var int
     */
    const int TYPE_LONGTEXT = 24;

    /**
     * Mediumblob abstract data type
     *
     * @var int
     */
    const int TYPE_MEDIUMBLOB = 12;

    /**
     * Mediumintegerr abstract data type
     *
     * @var int
     */
    const int TYPE_MEDIUMINTEGER = 21;

    /**
     * Mediumtext abstract data type
     *
     * @var int
     */
    const int TYPE_MEDIUMTEXT = 23;

    /**
     * Smallint abstract data type
     *
     * @var int
     */
    const int TYPE_SMALLINTEGER = 22;

    /**
     * Text abstract data type
     *
     * @var int
     */
    const int TYPE_TEXT = 6;

    /**
     * Time abstract data type
     *
     * @var int
     */
    const int TYPE_TIME = 20;

    /**
     * Timestamp abstract data type
     *
     * @var int
     */
    const int TYPE_TIMESTAMP = 17;

    /**
     * Tinyblob abstract data type
     *
     * @var int
     */
    const int TYPE_TINYBLOB = 10;

    /**
     * Tinyint abstract data type
     *
     * @var int
     */
    const int TYPE_TINYINTEGER = 26;

    /**
     * Tinytext abstract data type
     *
     * @var int
     */
    const int TYPE_TINYTEXT = 25;

    /**
     * UUID abstract data type
     *
     * @var int
     */
    const int TYPE_UUID = 29;

    /**
     * Varbinary abstract data type
     *
     * @var int
     */
    const int TYPE_VARBINARY = 28;

    /**
     * Varchar abstract data type
     *
     * @var int
     */
    const int TYPE_VARCHAR = 2;

    /**
     * PostgreSQL `BYTEA` binary type
     *
     * @var int
     */
    const int TYPE_BYTEA = 30;

    /**
     * PostgreSQL `INET` IPv4/IPv6 address type
     *
     * @var int
     */
    const int TYPE_INET = 31;

    /**
     * PostgreSQL `CIDR` network-address type
     *
     * @var int
     */
    const int TYPE_CIDR = 32;

    /**
     * PostgreSQL `MACADDR` MAC-address type
     *
     * @var int
     */
    const int TYPE_MACADDR = 33;

    /**
     * PostgreSQL `INT4RANGE` range-of-integer type
     *
     * @var int
     */
    const int TYPE_INT4RANGE = 34;

    /**
     * PostgreSQL `INT8RANGE` range-of-bigint type
     *
     * @var int
     */
    const int TYPE_INT8RANGE = 35;

    /**
     * PostgreSQL `NUMRANGE` range-of-numeric type
     *
     * @var int
     */
    const int TYPE_NUMRANGE = 36;

    /**
     * PostgreSQL `TSRANGE` range-of-timestamp (without time zone) type
     *
     * @var int
     */
    const int TYPE_TSRANGE = 37;

    /**
     * PostgreSQL `TSTZRANGE` range-of-timestamp (with time zone) type
     *
     * @var int
     */
    const int TYPE_TSTZRANGE = 38;

    /**
     * PostgreSQL `DATERANGE` range-of-date type
     *
     * @var int
     */
    const int TYPE_DATERANGE = 39;

    /**
     * Spatial `GEOMETRY` base type (MySQL 5.7+; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_GEOMETRY = 40;

    /**
     * Spatial `POINT` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_POINT = 41;

    /**
     * Spatial `LINESTRING` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_LINESTRING = 42;

    /**
     * Spatial `POLYGON` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_POLYGON = 43;

    /**
     * Spatial `MULTIPOINT` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_MULTIPOINT = 44;

    /**
     * Spatial `MULTILINESTRING` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_MULTILINESTRING = 45;

    /**
     * Spatial `MULTIPOLYGON` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_MULTIPOLYGON = 46;

    /**
     * Spatial `GEOMETRYCOLLECTION` type (MySQL; PostgreSQL + PostGIS)
     *
     * @var int
     */
    const int TYPE_GEOMETRYCOLLECTION = 47;

    /**
     * Column Position
     *
     * @var string|null
     */
    protected $after = null;

    /**
     * Whether the column is an array of its base type. Recognized by the
     * PostgreSQL dialect (e.g. `INTEGER[]`, `TEXT[]`). MySQL and SQLite
     * ignore the flag.
     *
     * @var bool
     */
    protected $isArray = false;

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
     * Generation expression for `GENERATED ALWAYS AS (...)`. Null when the
     * column is not a generated/computed column.
     *
     * @var string|null
     */
    protected $generated = null;

    /**
     * Whether a generated column is `STORED` (true) or `VIRTUAL` (false).
     * Ignored when the column is not generated. PostgreSQL only supports
     * `STORED` and emits it regardless of this flag.
     *
     * @var bool
     */
    protected $generationStored = false;

    /**
     * The column have some numeric type?
     *
     * @var bool
     */
    protected $isNumeric = false;

    /**
     * Whether the column is `INVISIBLE` (MySQL 8.0.23+). Invisible columns
     * are excluded from `SELECT` expansion but can still be referenced
     * explicitly.
     *
     * @var bool
     */
    protected $invisible = false;

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
     * Returns the generation expression for a generated/computed column.
     * Returns `null` when the column is not generated.
     *
     * @return string|null
     */
    public function getGenerationExpression(): string|null
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
     * @return int|string
     */
    public function getType(): int|string
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
     * Whether the column is an array of its base type. Recognized by the
     * PostgreSQL dialect (e.g. `INTEGER[]`, `TEXT[]`); MySQL and SQLite
     * ignore the flag.
     *
     * @return bool
     */
    public function isArray(): bool
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
     * Whether the column is a generated/computed column.
     *
     * @return bool
     */
    public function isGenerated(): bool
    {
    }

    /**
     * Whether a generated column is `STORED`. `false` means `VIRTUAL`.
     * Always meaningful only when `isGenerated()` is `true`.
     *
     * @return bool
     */
    public function isGenerationStored(): bool
    {
    }

    /**
     * Whether the column is declared `INVISIBLE` (MySQL 8.0.23+). Invisible
     * columns are excluded from `SELECT` expansion but can still be
     * referenced explicitly. PostgreSQL and SQLite have no equivalent and
     * dialects targeting them ignore the flag.
     *
     * @return bool
     */
    public function isInvisible(): bool
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
