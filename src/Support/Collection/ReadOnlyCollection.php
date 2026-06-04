<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Collection;

use Phalcon\Support\Collection;
use Phalcon\Support\Collection\Exceptions\ReadOnlyViolation;

/**
 * A read only Collection object
 */
class ReadOnlyCollection extends Collection
{
    /**
     * @var bool
     */
    protected $constructed = false;

    /**
     * ReadOnlyCollection constructor.
     *
     * @param array<int|string, mixed> $data
     * @param bool                     $insensitive
     * @param bool                     $strictNull
     * @param string|null              $type
     */
    public function __construct(array $data = [], bool $insensitive = true, bool $strictNull = false, ?string $type = null)
    {
    }

    /**
     * Restores the collection state during unserialization.
     *
     * Temporarily disables the read-only guard so the parent class can restore
     * the collection state. The guard is re-enabled before the method returns.
     *
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * @throws ReadOnlyViolation
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * @throws ReadOnlyViolation
     * @param array $data
     * @return void
     */
    public function init(array $data = []): void
    {
    }

    /**
     * Delete the element from the collection
     *
     * @param string $element Name of the element
     *
     * @throws ReadOnlyViolation
     * @return void
     */
    public function remove(string $element): void
    {
    }

    /**
     * Replaces the collection data with a new array
     *
     * @param array<int|string, mixed> $data
     *
     * @throws ReadOnlyViolation
     * @return void
     */
    public function replace(array $data): void
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element Name of the element
     * @param mixed  $value   Value to store for the element
     *
     * @throws ReadOnlyViolation
     * @return void
     */
    public function set(string $element, $value): void
    {
    }
}
