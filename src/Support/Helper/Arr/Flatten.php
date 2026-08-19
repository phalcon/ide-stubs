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
 * Flattens an array up to the one level depth, unless `$deep` is set to
 * `true`
 */
class Flatten
{
    /**
     * @param array<array-key, mixed> $collection
     * @param bool                    $deep
     *
     * @return array<array-key, mixed>
     */
    public function __invoke(array $collection, bool $deep = false): array
    {
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<array-key, mixed>
     * @param mixed $item
     * @param bool $deep
     */
    private function processArray(array $data, $item, bool $deep): array
    {
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<array-key, mixed>
     * @param mixed $item
     * @param bool $deep
     */
    private function processArrayDeep(array $data, $item, bool $deep): array
    {
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<array-key, mixed>
     * @param mixed $item
     */
    private function processNotArray(array $data, $item): array
    {
    }
}
