<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Arr;

/**
 * Groups the elements of an array based on the passed callable
 */
class Group
{
    /**
     * @param array           $collection
     * @param callable|string $method
     *
     * @return array
     */
    public function __invoke(array $collection, $method): array
    {
    }

    /**
     * @param mixed $method
     *
     * @return bool
     */
    private function isCallable($method): bool
    {
    }

    /**
     * @param array           $filtered
     * @param callable|string $method
     * @param mixed           $element
     *
     * @return array
     */
    private function processCallable(array $filtered, $method, $element): array
    {
    }

    /**
     * @param array           $filtered
     * @param callable|string $method
     * @param mixed           $element
     *
     * @return array
     */
    private function processObject(array $filtered, $method, $element): array
    {
    }

    /**
     * @param array           $filtered
     * @param callable|string $method
     * @param mixed           $element
     *
     * @return array
     */
    private function processOther(array $filtered, $method, $element): array
    {
    }
}
