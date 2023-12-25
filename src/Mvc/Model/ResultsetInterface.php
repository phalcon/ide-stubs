<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Closure;
use Phalcon\Messages\MessageInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\ResultsetInterface
 *
 * Interface for Phalcon\Mvc\Model\Resultset
 */
interface ResultsetInterface
{
    /**
     * Deletes every record in the resultset
     *
     * @param \Closure $conditionCallback
     * @return bool
     */
    public function delete(\Closure $conditionCallback = null): bool;

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
    public function filter($filter): array;

    /**
     * Returns the associated cache for the resultset
     *
     * @return mixed|null
     */
    public function getCache(): mixed;

    /**
     * Get first row in the resultset
     *
     * @return ModelInterface|Row|null
     */
    public function getFirst(): mixed;

    /**
     * Returns the current hydration mode
     *
     * @return int
     */
    public function getHydrateMode(): int;

    /**
     * Get last row in the resultset
     *
     * @return ModelInterface|null
     */
    public function getLast(): ModelInterface|null;

    /**
     * Returns the error messages produced by a batch operation
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Returns the internal type of data retrieval that the resultset is using
     *
     * @return int
     */
    public function getType(): int;

    /**
     * Tell if the resultset if fresh or an old one cached
     *
     * @return bool
     */
    public function isFresh(): bool;

    /**
     * Sets the hydration mode in the resultset
     *
     * @param int $hydrateMode
     * @return ResultsetInterface
     */
    public function setHydrateMode(int $hydrateMode): ResultsetInterface;

    /**
     * Set if the resultset is fresh or an old one cached
     *
     * @param bool $isFresh
     * @return ResultsetInterface
     */
    public function setIsFresh(bool $isFresh): ResultsetInterface;

    /**
     * Returns a complete resultset as an array, if the resultset has a big number of rows
     * it could consume more memory than currently it does.
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Updates every record in the resultset
     *
     * @param array $data
     * @param \Closure $conditionCallback
     * @return bool
     */
    public function update($data, \Closure $conditionCallback = null): bool;
}
