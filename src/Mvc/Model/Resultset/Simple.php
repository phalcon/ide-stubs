<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Resultset;

use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Eager\Loader;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\Exceptions\InvalidContainer;
use Phalcon\Mvc\Model\Exceptions\InvalidSerializationData;
use Phalcon\Mvc\Model\Exceptions\ResultsetColumnNotInMap;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Mvc\Model\Row;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Storage\Serializer\SerializerInterface;
use Phalcon\Support\Settings;

/**
 * Phalcon\Mvc\Model\Resultset\Simple
 *
 * Simple resultsets only contains a complete objects
 * This class builds every complete object as it is required
 *
 * @template TKey of int
 * @template TValue of \Phalcon\Mvc\ModelInterface
 */
class Simple extends Resultset
{
    /**
     * @var array|string
     */
    protected $columnMap;

    /**
     * @var array|null
     */
    protected $eagerMap = null;

    /**
     * @var ModelInterface|Row
     */
    protected $model;

    /**
     * @var bool
     */
    protected $keepSnapshots = false;

    /**
     * Phalcon\Mvc\Model\Resultset\Simple constructor
     *
     * @param array $columnMap
     * @param ModelInterface|Row $model
     * @param \Phalcon\Db\ResultInterface|false $result
     * @param mixed|null $cache
     * @param bool $keepSnapshots false
     */
    public function __construct($columnMap, $model, $result, $cache = null, bool $keepSnapshots = false)
    {
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * Returns current row in the resultset
     *
     * @return TValue
     */
    final public function current(): ModelInterface|Row|null
    {
    }

    /**
     * Serializing a resultset will dump all related rows into a big array
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Attaches a pre-loaded relation map, applied to every record as it is
     * hydrated.
     *
     * Records in a resultset are transient - seek() clears activeRow on every
     * move and current() re-hydrates from the raw row - so hydration is the
     * only durable point at which relations can be stamped.
     *
     * @param array $eagerMap
     * @return void
     */
    public function setEagerMap(array $eagerMap): void
    {
    }

    /**
     * Builds a new resultset of the same concrete class over the rows at the
     * given positions, preserving the column map, record prototype and
     * snapshot behavior of this resultset.
     *
     * @param array $indexes zero-based row positions, in the desired order
     * @return Simple
     */
    public function sliceRows(array $indexes): Simple
    {
    }

    /**
     * Returns a complete resultset as an array, if the resultset has a big
     * number of rows it could consume more memory than currently it does.
     * Export the resultset to an array couldn't be faster with a large number
     * of records
     *
     * @param bool $renameColumns
     * @return array
     */
    public function toArray(bool $renameColumns = true): array
    {
    }

    /**
     * Unserializing a resultset will allow to only works on the rows present in
     * the saved state
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void
    {
    }
}
