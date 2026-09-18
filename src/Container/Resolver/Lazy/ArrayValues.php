<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Resolver\Lazy;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Phalcon\Contracts\Container\ContainerTypes;

/**
 * @phpstan-import-type container_values from ContainerTypes
 *
 * @implements ArrayAccess<array-key, mixed>
 * @implements IteratorAggregate<array-key, mixed>
 */
class ArrayValues extends \Phalcon\Container\Resolver\Lazy\Lazy implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @phpstan-var container_values
     */
    protected array $values = [];

    /**
     * @phpstan-param container_values $values
     * @param array $values
     */
    public function __construct(array $values = [])
    {
    }

    /**
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * @return ArrayIterator<array-key, mixed>
     */
    public function getIterator(): ArrayIterator
    {
    }

    /**
     * @param iterable<array-key, mixed> $values
     * @return void
     */
    public function merge($values): void
    {
    }

    /**
     * @phpstan-param array-key $offset
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }

    /**
     * @phpstan-param array-key $offset
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
    }

    /**
     * @phpstan-param array-key|null $offset
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * @phpstan-param array-key $offset
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Resolve to an array, where each element has itself been lazy-resolved.
     *
     * @phpstan-return container_values
     * @param object $ioc
     * @return array
     */
    public function resolve($ioc): array
    {
    }

    /**
     * @param object $ioc
     * @param mixed $value
     * @return mixed
     */
    protected function resolveValue($ioc, $value): mixed
    {
    }

    /**
     * @phpstan-param  container_values $values
     * @phpstan-return container_values
     * @param object $ioc
     * @param array $values
     * @return array
     */
    protected function resolveValues($ioc, array $values): array
    {
    }
}
