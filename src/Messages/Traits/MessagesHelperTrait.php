<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Messages\Traits;

use Phalcon\Contracts\Messages\MessagesTypes;
use Phalcon\Messages\Exceptions\MessageNotObject;
use Phalcon\Messages\MessageInterface;

/**
 * Trait MessagesHelperTrait
 *
 * @phpstan-import-type messages_list from MessagesTypes
 */
trait MessagesHelperTrait
{
    /**
     * @var messages_list
     */
    protected array $messages = [];

    protected int $position = 0;

    /**
     * Returns the number of messages in the list
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Returns the current message in the iterator
     *
     * @return MessageInterface
     */
    public function current(): MessageInterface
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     *
     * @return void
     */
    public function next(): void
    {
    }

    /**
     * Checks if an index exists
     *
     * ```php
     * var_dump(
     *     isset($message["database"])
     * );
     * ```
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }

    /**
     * Gets an attribute a message using the array syntax
     *
     * ```php
     * print_r(
     *     $messages[0]
     * );
     * ```
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
    }

    /**
     * Sets an attribute using the array-syntax
     *
     * ```php
     * $messages[0] = new \Phalcon\Messages\Message("This is a message");
     * ```
     *
     * @throws MessageNotObject
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Removes a message from the list
     *
     * ```php
     * unset($message["database"]);
     * ```
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Rewinds the internal iterator
     *
     * @return void
     */
    public function rewind(): void
    {
    }

    /**
     * Check if the current message in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }
}
