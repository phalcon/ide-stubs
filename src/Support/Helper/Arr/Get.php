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
 * Gets an array element by key and if it does not exist returns the default.
 * It also allows for casting the returned value to a specific type using
 * `settype` internally
 */
class Get
{
    /**
     * @param array       $collection
     * @param mixed       $index
     * @param mixed|null  $defaultValue
     * @param string|null $cast
     *
     * @return mixed|null
     */
    public function __invoke(array $collection, $index, $defaultValue = null, string $cast = null): mixed
    {
    }
}
