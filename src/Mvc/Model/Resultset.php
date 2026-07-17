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
use Phalcon\Mvc\Model\Exceptions\CursorIsImmutable;
use Phalcon\Mvc\Model\Exceptions\IndexNotInCursor;
use Phalcon\Mvc\Model\Exceptions\InvalidResultsetCacheService;
use Phalcon\Mvc\Model\Exceptions\InvalidReturnedRecord;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Storage\Serializer\SerializerInterface;
use Phalcon\Support\Settings;
use SeekableIterator;

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
 * $invoices = Invoices::find(
 *     [
 *         "inv_status_flag = 1",
 *         "order" => "inv_title",
 *     ]
 * );
 *
 * foreach ($invoices as invoice) {
 *     echo invoice->inv_title, "\n";
 * }
 *
 * // Using a while
 * $invoices = Invoices::find(
 *     [
 *         "inv_status_flag = 1",
 *         "order" => "inv_title",
 *     ]
 * );
 *
 * $invoices->rewind();
 *
 * while ($invoices->valid()) {
 *     $invoice = $invoices->current();
 *
 *     echo $invoice->inv_title, "\n";
 *
 *     $invoices->next();
 * }
 * ```
 *
 * @template TKey
 * @template TValue
 * @implements Iterator<TKey, TValue>
 * @implements ArrayAccess<TKey, TValue>
 */
abstract class Resultset implements \Phalcon\Mvc\Model\ResultsetInterface, \Iterator, \SeekableIterator, \Countable, \ArrayAccess, \JsonSerializable
{
    /**
     * @var int
     */
    const int HYDRATE_ARRAYS = 1;

    /**
     * @var int
     */
    const int HYDRATE_OBJECTS = 2;

    /**
     * @var int
     */
    const int HYDRATE_RECORDS = 0;

    /**
     * @var int
     */
    const int TYPE_RESULT_FULL = 0;

    /**
     * @var int
     */
    const int TYPE_RESULT_PARTIAL = 1;

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
     * @param \Closure|null $conditionCallback
     * @return bool
     */
    public function delete(?\Closure $conditionCallback = null): bool
    {
    }

    /**
     * Filters a resultset returning only those the developer requires
     *
     * ```php
     * $filtered = $invoices->filter(
     *     function ($invoice) {
     *         if ($invoice->inv_id < 3) {
     *             return $invoice;
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
     * $model = new Invoices();
     * $manager = $model->getModelsManager();
     *
     * // \Invoices
     * $manager->createQuery('SELECT FROM Invoices')
     *         ->execute()
     *         ->getFirst();
     *
     * // \Phalcon\Mvc\Model\Row
     * $manager->createQuery('SELECT r.inv_id FROM Invoices AS r')
     *         ->execute()
     *         ->getFirst();
     *
     * // NULL
     * $manager->createQuery('SELECT r.inv_id FROM Invoices AS r WHERE r.inv_title = "NON-EXISTENT"')
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
     * $invoices = Invoices::find();
     *
     * echo json_encode($invoices);
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
     * @return TKey|null
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
     * Checks whether offset exists in the resultset
     *
     * @param mixed $index
     * @return bool
     */
    public function offsetExists($index): bool
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
     * @param \Closure|null $conditionCallback
     * @return bool
     */
    public function update($data, ?\Closure $conditionCallback = null): bool
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

    /**
     * @return bool
     */
    public function refresh(): bool
    {
    }

    /**
     * @return mixed
     */
    public function getResult(): mixed
    {
    }
}
