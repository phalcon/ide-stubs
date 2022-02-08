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
 * White list filter by key: obtain elements of an array filtering by the keys
 * obtained from the elements of a whitelist
 */
class Whitelist extends \Phalcon\Support\Helper\Arr\AbstractArr
{
    /**
     * @param array $collection
     * @param array $whiteList
     *
     * @return array
     */
    public function __invoke(array $collection, array $whiteList): array
    {
    }
}
