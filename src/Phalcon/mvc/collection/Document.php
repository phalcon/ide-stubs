<?php

namespace Phalcon\Mvc\Collection;

/**
 * Phalcon\Mvc\Collection\Document
 *
 * This component allows Phalcon\Mvc\Collection to return rows without an associated entity.
 * This objects implements the ArrayAccess interface to allow access the object as object->x or array[x].
 */
class Document implements \Phalcon\Mvc\EntityInterface, \ArrayAccess
{

    /**
     * Returns the value of a field using the ArrayAccess interfase
     *
     * @param mixed $index
     * @return mixed
     */
    public function offsetGet($index) {}

    /**
     * Checks whether an offset exists in the document
     *
     * @param mixed $index
     * @return bool
     */
    public function offsetExists($index): bool {}

    /**
     * Change a value using the ArrayAccess interface
     *
     * @param mixed $index
     * @param mixed $value
     */
    public function offsetSet($index, $value) {}

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param mixed $index
     */
    public function offsetUnset($index) {}

    /**
     * Reads an attribute value by its name
     *
     * ```php
     *  echo $robot->readAttribute("name");
     * ```
     *
     * @param string $attribute
     * @return mixed|null
     */
    public function readAttribute(string $attribute): ? {}

    /**
     * Returns the instance as an array representation
     *
     * @return array
     */
    public function toArray(): array {}

    /**
     * Writes an attribute value by its name
     *
     * ```php
     *  $robot->writeAttribute("name", "Rosey");
     * ```
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function writeAttribute(string $attribute, $value) {}

}
