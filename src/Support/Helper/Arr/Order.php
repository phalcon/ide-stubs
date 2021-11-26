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
    const ORDER_ASC = 1;

    const ORDER_DESC = 2;


    /**
     * @param array $collection
     * @param mixed $attribute
     * @param int   $order
     * @param int   $flags
     *
     * @return array
     */
    public function __invoke(array $collection, $attribute, int $order = self::ORDER_ASC, int $flags = 0): array
    {
    }

    /**
     * @param array $sorted
     * @param mixed $attribute
     * @param mixed $item
     *
     * @return array
     */
    private function checkObject(array $sorted, $attribute, $item): array
    {
    }

    /**
     * @param array $sorted
     * @param mixed $attribute
     * @param mixed $item
     *
     * @return array
     */
    private function checkNonObject(array $sorted, $attribute, $item): array
    {
    }
}
