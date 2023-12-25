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
 * Returns the last element of the collection. If a callable is passed, the
 * element returned is the first that validates true
 */
class Last extends \Phalcon\Support\Helper\Arr\AbstractArr
{
    /**
     * @param array         $collection
     * @param callable|null $method
     *
     * @return mixed
     */
    public function __invoke(array $collection, $method = null): mixed
    {
    }
}
