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
 * Sets an array element. Using a key is optional
 */
class Set
{
    /**
     * @param array<array-key, mixed> $collection
     *
     * @return array<array-key, mixed>
     * @param mixed $value
     * @param mixed $index
     */
    public function __invoke(array $collection, $value, $index = null): array
    {
    }

    /**
     * @param array<array-key, mixed> $collection
     *
     * @return array<array-key, mixed>
     * @param mixed $value
     * @param mixed $index
     */
    private function checkNotNull(array $collection, $value, $index): array
    {
    }

    /**
     * @param array<array-key, mixed> $collection
     *
     * @return array<array-key, mixed>
     * @param mixed $value
     * @param mixed $index
     */
    private function checkNull(array $collection, $value, $index): array
    {
    }
}
