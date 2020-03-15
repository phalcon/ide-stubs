<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Collection;

use Phalcon\Collection;

/**
 * Phalcon\Collection\ReadOnly is a read only Collection object
 */
class ReadOnly extends Collection
{

    /**
     * Delete the element from the collection
     *
     * @param string $element
     * @return void
     */
    public function remove(string $element)
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value)
    {
    }
}
