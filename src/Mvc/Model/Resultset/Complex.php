<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Resultset;

use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Db\ResultInterface;
use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\Exceptions\CorruptColumnType;
use Phalcon\Mvc\Model\Exceptions\InvalidContainer;
use Phalcon\Mvc\Model\Exceptions\InvalidSerializationData;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Row;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Storage\Serializer\SerializerInterface;
use Phalcon\Support\Settings;
use stdClass;

/**
 * Complex resultsets may include complete objects and scalar values.
 * This class builds every complex row as it is required
 *
 * @template TKey of int
 * @template TValue of mixed
 *
 * @phpstan-import-type mvc_resultset_complex_state from MvcTypes
 * @phpstan-import-type mvc_resultset_object_column from MvcTypes
 * @phpstan-import-type mvc_resultset_scalar_column from MvcTypes
 */
class Complex extends Resultset
{
    /**
     * @var array
     */
    protected $columnTypes;

    /**
     * Unserialized result-set hydrated all rows already. unserialize() sets
     * disableHydration to true
     */
    protected bool $disableHydration = false;

    protected string $resultsetRowClass = '';

    /**
     * Phalcon\Mvc\Model\Resultset\Complex constructor
     *
     * @param array                $columnTypes
     * @param ResultInterface|null $result
     * @param mixed|null           $cache
     * @param string               $resultsetRowClass
     */
    public function __construct($columnTypes, ?\Phalcon\Db\ResultInterface $result = null, $cache = null, string $resultsetRowClass = '')
    {
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * @phpstan-param mvc_resultset_complex_state $data
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * Returns current row in the resultset
     *
     * @phpstan-return mixed
     * @return mixed
     */
    final public function current(): mixed
    {
    }

    /**
     * Serializing a resultset will dump all related rows into a big array,
     * serialize it and return the resulting string
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Returns a complete resultset as an array, if the resultset has a big
     * number of rows it could consume more memory than currently it does.
     *
     * @phpstan-return array<array-key, mixed>
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Unserializing a resultset will allow to only works on the rows present
     * in the saved state
     *
     * @phpstan-param string $data
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void
    {
    }
}
