<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Db;

/**
 * Canonical contract for Phalcon\Db\Column.
 *
 * @todo v7 - these will become required interface members. They are
 *            omitted from the v5 line to avoid breaking third-party
 *            implementors:
 *              - getComment()              : string | null
 *              - getGenerationExpression() : string | null
 *              - isArray()                 : bool
 *              - isGenerated()             : bool
 *              - isGenerationStored()      : bool
 *              - isInvisible()             : bool
 *
 * The dialects call the members above on the interface. They join the
 * interface in the next major; until then the tags below record what all
 * implementations provide.
 *
 * @method string|null getComment()
 * @method string|null getGenerationExpression()
 * @method bool        isArray()
 * @method bool        isGenerated()
 * @method bool        isGenerationStored()
 * @method bool        isInvisible()
 */
interface Column
{
    /**
     * Check whether field absolute to position in table
     *
     * @return string|null
     */
    public function getAfterPosition(): string|null;

    /**
     * Returns the type of bind handling
     *
     * @return int
     */
    public function getBindType(): int;

    /**
     * Returns default value of column
     *
     * @return mixed
     */
    public function getDefault(): mixed;

    /**
     * Returns column name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns column scale
     *
     * @return int
     */
    public function getScale(): int;

    /**
     * Returns column size
     *
     * @return int|string
     */
    public function getSize(): int|string;

    /**
     * Returns column type
     *
     * @return int|string
     */
    public function getType(): int|string;

    /**
     * Returns column type reference
     *
     * @return int
     */
    public function getTypeReference(): int;

    /**
     * Returns column type values
     *
     * @phpstan-return array<array-key, string>|int|string
     * @return array|int|string
     */
    public function getTypeValues(): int|string|array;

    /**
     * Check whether column has default value
     *
     * @return bool
     */
    public function hasDefault(): bool;

    /**
     * Auto-Increment
     *
     * @return bool
     */
    public function isAutoIncrement(): bool;

    /**
     * Check whether the column is the first in table
     *
     * @return bool
     */
    public function isFirst(): bool;

    /**
     * Not null
     *
     * @return bool
     */
    public function isNotNull(): bool;

    /**
     * Check whether column have a numeric type
     *
     * @return bool
     */
    public function isNumeric(): bool;

    /**
     * Column is part of the primary key?
     *
     * @return bool
     */
    public function isPrimary(): bool;

    /**
     * Returns true if number column is unsigned
     *
     * @return bool
     */
    public function isUnsigned(): bool;
}
