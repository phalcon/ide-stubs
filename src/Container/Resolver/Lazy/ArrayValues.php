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

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been heavily influenced by CapsulePHP.
 * Additionally, there are implementations from ioc-interop, which is a
 * Composer dependency, and from service-interop and resolver-interop. The
 * latter two are copied and re-implemented here: service-interop is not yet
 * published on Packagist, and resolver-interop requires PHP 8.4 (this project
 * targets PHP 8.1). Once both packages become available and compatible, the
 * copies will be replaced with the actual Composer dependencies.
 *
 * @link    https://github.com/capsulephp/di
 * @license https://github.com/capsulephp/di/blob/3.x/LICENSE.md
 *
 * @link    https://github.com/ioc-interop/interface
 * @license https://github.com/ioc-interop/interface/blob/1.x/LICENSE.md
 *
 * @link    https://github.com/service-interop/interface
 * @license https://github.com/service-interop/interface/blob/1.x/LICENSE.md
 *
 * @link    https://github.com/resolver-interop/interface/tree/1.x
 * @license https://github.com/resolver-interop/interface/blob/1.x/LICENSE.md
 */
class ArrayValues extends \Phalcon\Container\Resolver\Lazy\Lazy implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var array<array-key, mixed>
     */
    protected $values = [];

    /**
     * @param array<array-key, mixed> $values
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
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
    }

    /**
     * @param iterable<array-key, mixed> $values
     *
     * @return void
     */
    public function merge($values): void
    {
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Resolve to an array, where each element has itself been lazy-resolved.
     *
     * @param object $ioc
     *
     * @return array<array-key, mixed>
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
     * @param object                  $ioc
     * @param array<array-key, mixed> $values
     *
     * @return array
     */
    protected function resolveValues($ioc, array $values): array
    {
    }
}
