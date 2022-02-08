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
     * @param array $collection
     * @param mixed $value
     * @param mixed $index
     *
     * @return array
     */
    public function __invoke(array $collection, $value, $index = null): array
    {
    }

    /**
     * @param array $collection
     * @param mixed $value
     * @param mixed $index
     *
     * @return array
     */
    private function checkNull(array $collection, $value, $index): array
    {
    }

    /**
     * @param array $collection
     * @param mixed $value
     * @param mixed $index
     *
     * @return array<int|string,mixed>
     */
    private function checkNotNull(array $collection, $value, $index): array
    {
    }
}
