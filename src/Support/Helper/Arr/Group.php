<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Arr;

use Phalcon\Traits\Php\InfoTrait;

/**
 * Groups the elements of an array based on the passed callable
 */
class Group
{
    use \Phalcon\Traits\Php\InfoTrait;



    /**
     * @param array<array-key, mixed> $collection
     * @param callable|string         $method
     *
     * @return array<array-key, list<mixed>>
     */
    public function __invoke(array $collection, $method): array
    {
    }

    /**
     * @param mixed $method
     * @return bool
     */
    private function isCallable($method): bool
    {
    }

    /**
     * @param mixed $element
     *
     * @return bool
     */
    private function isObject($element): bool
    {
    }

    /**
     * @param array<array-key, mixed> $filtered
     * @param callable|string         $method
     * @param mixed                   $element
     *
     * @return array<array-key, mixed>
     */
    private function processCallable(array $filtered, $method, $element): array
    {
    }

    /**
     * @param array<array-key, mixed> $filtered
     * @param callable|string         $method
     * @param mixed                   $element
     *
     * @return array<array-key, mixed>
     */
    private function processObject(array $filtered, $method, $element): array
    {
    }

    /**
     * @param array<array-key, mixed> $filtered
     * @param callable|string         $method
     * @param mixed                   $element
     *
     * @return array<array-key, mixed>
     */
    private function processOther(array $filtered, $method, $element): array
    {
    }
}
