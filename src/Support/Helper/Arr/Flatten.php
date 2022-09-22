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
     * @param array $collection
     * @param bool  $deep
     *
     * @return array
     */
    public function __invoke(array $collection, bool $deep = false): array
    {
    }

    /**
     * @param array $data
     * @param mixed $item
     *
     * @return array
     */
    private function processNotArray(array $data, $item): array
    {
    }

    /**
     * @param array $data
     * @param mixed $item
     * @param bool  $deep
     *
     * @return array
     */
    private function processArray(array $data, $item, bool $deep): array
    {
    }

    /**
     * @param array $data
     * @param mixed $item
     * @param bool  $deep
     *
     * @return array
     */
    private function processArrayDeep(array $data, $item, bool $deep): array
    {
    }
}
