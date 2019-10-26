<?php

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
     */
    public function remove(string $element)
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element
     * @param mixed $value
     */
    public function set(string $element, $value)
    {
    }
}
