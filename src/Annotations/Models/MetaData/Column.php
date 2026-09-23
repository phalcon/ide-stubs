<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations\Models\MetaData;

/**
 * Describes a model column. It is the attribute form of `@Column`.
 *
 * The parameter names are camelCase, because PSR-12 does not allow
 * snake_case. The metadata strategy reads the two spellings. The default
 * value is `defaultValue` and not `default`, because `default` is a Zephir
 * keyword.
 */
#[\Attribute(8)]
class Column
{
    /**
     * @var bool
     */
    public $allowEmptyString;

    /**
     * @var string|null
     */
    public $column;

    /**
     * @var mixed
     */
    public $defaultValue;

    /**
     * @var int|null
     */
    public $length;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var bool
     */
    public $skipOnInsert;

    /**
     * @var bool
     */
    public $skipOnUpdate;

    /**
     * @var string
     */
    public $type;

    /**
     * @param string|null $column
     * @param string $type
     * @param int|null $length
     * @param bool $nullable
     * @param bool $skipOnInsert
     * @param bool $skipOnUpdate
     * @param bool $allowEmptyString
     * @param mixed $defaultValue
     */
    public function __construct(?string $column = null, string $type = 'string', ?int $length = null, bool $nullable = false, bool $skipOnInsert = false, bool $skipOnUpdate = false, bool $allowEmptyString = false, $defaultValue = null)
    {
    }
}
