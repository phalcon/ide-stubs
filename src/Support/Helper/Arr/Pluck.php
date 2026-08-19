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
 * Returns a subset of the collection based on the values of the collection
 */
class Pluck
{
    /**
     * @param array<array-key, mixed> $collection
     * @param string                  $element
     *
     * @return array<array-key, mixed>
     */
    public function __invoke(array $collection, string $element): array
    {
    }

    /**
     * @param array<array-key, mixed> $filtered
     * @param string                  $element
     * @param mixed                   $item
     *
     * @return array<array-key, mixed>
     */
    private function checkArray(array $filtered, string $element, $item): array
    {
    }

    /**
     * @param array<array-key, mixed> $filtered
     * @param string                  $element
     * @param mixed                   $item
     *
     * @return array<array-key, mixed>
     */
    private function checkObject(array $filtered, string $element, $item): array
    {
    }
}
