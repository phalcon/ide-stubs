<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Mvc\Model;

use ArrayAccess;
use Countable;
use Iterator;
use JsonSerializable;
use Phalcon\Cache\Adapter\AdapterInterface;
use Phalcon\Mvc\ModelInterface;
use SeekableIterator;
use Serializable;

/**
 * Phalcon\Mvc\Model\Resultset
 *
 * This component allows to Phalcon\Mvc\Model returns large resultsets with the minimum memory consumption
 * Resultsets can be traversed using a standard foreach or a while statement. If a resultset is serialized
 * it will dump all the rows into a big array. Then unserialize will retrieve the rows as they were before
 * serializing.
 *
 * ```php
 *
 * // Using a standard foreach
 * $robots = Robots::find(
 *     [
 *         "type = 'virtual'",
 *         "order" => "name",
 *     ]
 * );
 *
 * foreach ($robots as robot) {
 *     echo robot->name, "\n";
 * }
 *
 * // Using a while
 * $robots = Robots::find(
 *     [
 *         "type = 'virtual'",
 *         "order" => "name",
 *     ]
 * );
 *
 * $robots->rewind();
 *
 * while ($robots->valid()) {
 *     $robot = $robots->current();
 *
 *     echo $robot->name, "\n";
 *
 *     $robots->next();
 * }
 * ```
 */
abstract class Resultset implements ResultsetInterface, Iterator, SeekableIterator, Countable, ArrayAccess, Serializable, JsonSerializable
{

    const HYDRATE_ARRAYS = 1;


    const HYDRATE_OBJECTS = 2;


    const HYDRATE_RECORDS = 0;


    const TYPE_RESULT_FULL = 0;


    const TYPE_RESULT_PARTIAL = 1;


    protected $activeRow = null;


    protected $cache;


    protected $count;


    protected $errorMessages;


    protected $hydrateMode = 0;


    protected $isFresh = true;


    protected $pointer = 0;


    protected $row = null;


    protected $rows = null;

    /**
     * Phalcon\Db\ResultInterface or false for empty resultset
     */
    protected $result;


    /**
     * Phalcon\Mvc\Model\Resultset constructor
     *
     * @param \Phalcon\Db\ResultInterface|false $result
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     */
    public function __construct($result, \Phalcon\Cache\Adapter\AdapterInterface $cache = null)
    {
    }

    /**
     * Counts how many rows are in the resultset
     *
     * @return int
     */
    final public function count(): int
    {
    }

    /**
     * Deletes every record in the resultset
     *
     * @param \Closure $conditionCallback
     * @return bool
     */
    public function delete(\Closure $conditionCallback = null): bool
    {
    }

    /**
     * Filters a resultset returning only those the developer requires
     *
     * ```php
     * $filtered = $robots->filter(
     *     function ($robot) {
     *         if ($robot->id < 3) {
     *             return $robot;
     *         }
     *     }
     * );
     * ```
     *
     * @param callable $filter
     * @return array|\Phalcon\Mvc\ModelInterface[]
     */
    public function filter($filter): array
    {
    }

    /**
     * Returns the associated cache for the resultset
     *
     * @return \Phalcon\Cache\Adapter\AdapterInterface
     */
    public function getCache(): AdapterInterface
    {
    }

    /**
     * Get first row in the resultset
     *
     * @return null|\Phalcon\Mvc\ModelInterface
     */
    public function getFirst(): ?ModelInterface
    {
    }

    /**
     * Returns the current hydration mode
     *
     * @return int
     */
    public function getHydrateMode(): int
    {
    }

    /**
     * Get last row in the resultset
     *
     * @return null|\Phalcon\Mvc\ModelInterface
     */
    public function getLast(): ?ModelInterface
    {
    }

    /**
     * Returns the error messages produced by a batch operation
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array
    {
    }

    /**
     * Returns the internal type of data retrieval that the resultset is using
     *
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * Tell if the resultset if fresh or an old one cached
     *
     * @return bool
     */
    public function isFresh(): bool
    {
    }

    /**
     * Returns serialised model objects as array for json_encode.
     * Calls jsonSerialize on each object if present
     *
     * ```php
     * $robots = Robots::find();
     *
     * echo json_encode($robots);
     * ```
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Gets pointer number of active row in the resultset
     *
     * @return int|null
     */
    public function key(): ?int
    {
    }

    /**
     * Moves cursor to next row in the resultset
     */
    public function next()
    {
    }

    /**
     * Gets row in a specific position of the resultset
     *
     * @param mixed $index
     * @return bool|\Phalcon\Mvc\ModelInterface
     */
    public function offsetGet($index)
    {
    }

    /**
     * Checks whether offset exists in the resultset
     *
     * @param mixed $index
     * @return bool
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Resultsets cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param int $index
     * @param \Phalcon\Mvc\ModelInterface $value
     */
    public function offsetSet($index, $value)
    {
    }

    /**
     * Resultsets cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Rewinds resultset to its beginning
     */
    final public function rewind()
    {
    }

    /**
     * Changes the internal pointer to a specific position in the resultset.
     * Set the new position if required, and then set this->row
     *
     * @param mixed $position
     */
    final public function seek($position)
    {
    }

    /**
     * Sets the hydration mode in the resultset
     *
     * @param int $hydrateMode
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function setHydrateMode(int $hydrateMode): ResultsetInterface
    {
    }

    /**
     * Set if the resultset is fresh or an old one cached
     *
     * @param bool $isFresh
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function setIsFresh(bool $isFresh): ResultsetInterface
    {
    }

    /**
     * Updates every record in the resultset
     *
     * @param array $data
     * @param \Closure $conditionCallback
     * @return bool
     */
    public function update($data, \Closure $conditionCallback = null): bool
    {
    }

    /**
     * Check whether internal resource has rows to fetch
     *
     * @return bool
     */
    public function valid(): bool
    {
    }
}
