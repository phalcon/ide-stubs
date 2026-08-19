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
 *
 * @phpstan-template T
 *
 * @extends Collection<T>
 */
class ReadOnlyCollection extends Collection
{
    protected bool $constructed = false;

    /**
     * ReadOnlyCollection constructor.
     *
     * @param array<int|string, mixed> $data
     * @param bool $insensitive
     * @param bool $strictNull
     * @param string|null $type
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
     * @param array<array-key, mixed> $data
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
     * @throws ReadOnlyViolation
     * @param string $element
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
     * @throws ReadOnlyViolation
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value): void
    {
    }
}
