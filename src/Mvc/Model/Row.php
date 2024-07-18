<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use ArrayAccess;
use JsonSerializable;
use Phalcon\Mvc\EntityInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * This component allows Phalcon\Mvc\Model to return rows without an associated entity.
 * This objects implements the ArrayAccess interface to allow access the object as object->x or array[x].
 */
class Row extends \stdClass implements \Phalcon\Mvc\EntityInterface, \Phalcon\Mvc\Model\ResultInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Serializes the object for json_encode
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Gets a record in a specific position of the row
     *
     * @param string|int $index *
     * @return string|ModelInterface
     */
    public function offsetGet($index): mixed
    {
    }

    /**
     * Checks whether offset exists in the row
     *
     * @param string|int $index
     * @return bool
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param string|int $offsetSet
     * @param ModelInterface $value
     * @param mixed $offset
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Rows cannot be changed. It has only been implemented to meet the definition of the ArrayAccess interface
     *
     * @param string|int $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Reads an attribute value by its name
     *
     * ```php
     * echo $robot->readAttribute("name");
     * ```
     *
     * @return mixed
     * @param string $attribute
     */
    public function readAttribute(string $attribute)
    {
    }

    /**
     * Set the current object's state
     *
     * @param int $dirtyState
     * @return bool|ModelInterface
     */
    public function setDirtyState(int $dirtyState): ModelInterface|bool
    {
    }

    /**
     * Returns the instance as an array representation
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Writes an attribute value by its name
     *
     * ```php
     * $robot->writeAttribute("name", "Rosey");
     * ```
     *
     * @param mixed $value
     * @param string $attribute
     * @return void
     */
    public function writeAttribute(string $attribute, $value): void
    {
    }
}
