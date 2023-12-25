<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use ArrayAccess;
use Closure;
use Countable;
use Iterator;
use JsonSerializable;
use Phalcon\Cache\CacheInterface;
use Phalcon\Db\Enum;
use Phalcon\Messages\MessageInterface;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Storage\Serializer\SerializerInterface;
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
abstract class Resultset implements \Phalcon\Mvc\Model\ResultsetInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess, \Serializable, \JsonSerializable
{
    const HYDRATE_ARRAYS = 1;

    const HYDRATE_OBJECTS = 2;

    const HYDRATE_RECORDS = 0;

    const TYPE_RESULT_FULL = 0;

    const TYPE_RESULT_PARTIAL = 1;

    /**
     * @var mixed|null
     */
    protected $activeRow = null;

    /**
     * @var CacheInterface|null
     */
    protected $cache = null;

    /**
     * @var int
     */
    protected $count = 0;

    /**
     * @var array
     */
    protected $errorMessages = [];

    /**
     * @var int
     */
    protected $hydrateMode = 0;

    /**
     * @var bool
     */
    protected $isFresh = true;

    /**
     * @var int
     */
    protected $pointer = 0;

    /**
     * @var mixed|null
     */
    protected $row = null;

    /**
     * @var array|null
     */
    protected $rows = null;

    /**
     * Phalcon\Db\ResultInterface or false for empty resultset
     *
     * @var ResultInterface|bool
     */
    protected $result;

    /**
     * Phalcon\Mvc\Model\Resultset constructor
     *
     * @param ResultInterface|false $result
     * @param mixed|null            $cache
     */
    public function __construct($result, $cache = null)
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
     * @return CacheInterface|null
     */
    public function getCache(): CacheInterface|null
    {
    }

    /**
     * Get first row in the resultset
     *
     * ```php
     * $model = new Robots();
     * $manager = $model->getModelsManager();
     *
     * // \Robots
     * $manager->createQuery('SELECT FROM Robots')
     *         ->execute()
     *         ->getFirst();
     *
     * // \Phalcon\Mvc\Model\Row
     * $manager->createQuery('SELECT r.id FROM Robots AS r')
     *         ->execute()
     *         ->getFirst();
     *
     * // NULL
     * $manager->createQuery('SELECT r.id FROM Robots AS r WHERE r.name = "NON-EXISTENT"')
     *         ->execute()
     *         ->getFirst();
     * ```
     *
     * @return ModelInterface|Row|null
     */
    public function getFirst(): mixed
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
     * @return ModelInterface|null
     */
    public function getLast(): ModelInterface|null
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
    public function key(): int|null
    {
    }

    /**
     * Moves cursor to next row in the resultset
     *
     * @return void
     */
    public function next(): void
    {
    }

    /**
     * Gets row in a specific position of the resultset
     *
     * @param mixed $index
     * @return mixed
     */
    public function offsetGet($index): mixed
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
     * @param int $offset
     * @param \Phalcon\Mvc\ModelInterface $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Resultsets cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Rewinds resultset to its beginning
     *
     * @return void
     */
    final public function rewind(): void
    {
    }

    /**
     * Changes the internal pointer to a specific position in the resultset.
     * Set the new position if required, and then set this->row
     *
     * @param mixed $position
     * @return void
     */
    final public function seek($position): void
    {
    }

    /**
     * Sets the hydration mode in the resultset
     *
     * @param int $hydrateMode
     * @return ResultsetInterface
     */
    public function setHydrateMode(int $hydrateMode): ResultsetInterface
    {
    }

    /**
     * Set if the resultset is fresh or an old one cached
     *
     * @param bool $isFresh
     * @return ResultsetInterface
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
