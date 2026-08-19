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
 * Sorts a collection of arrays or objects by an attribute of the object. It
 * supports ascending/descending sorts but also flags that are identical to
 * the ones used by `ksort` and `krsort`
 */
class Order
{
    /**
     * @var int
     */
    const int ORDER_ASC = 1;

    /**
     * @var int
     */
    const int ORDER_DESC = 2;


    /**
     * @param array<array-key, mixed> $collection
     *
     * @return array<array-key, mixed>
     * @param mixed $attribute
     * @param int $order
     * @param int $flags
     */
    public function __invoke(array $collection, $attribute, int $order = self::ORDER_ASC, int $flags = 0): array
    {
    }

    /**
     * @param array<array-key, mixed> $sorted
     * @param string                  $attribute
     * @param mixed                   $item
     *
     * @return array<array-key, mixed>
     */
    private function checkNonObject(array $sorted, string $attribute, $item): array
    {
    }

    /**
     * @param array<array-key, mixed> $sorted
     * @param string                  $attribute
     * @param mixed                   $item
     *
     * @return array<array-key, mixed>
     */
    private function checkObject(array $sorted, string $attribute, $item): array
    {
    }
}
