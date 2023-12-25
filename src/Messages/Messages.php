<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Messages;

use ArrayAccess;
use Countable;
use Iterator;
use JsonSerializable;

/**
 * Represents a collection of messages
 */
class Messages implements \ArrayAccess, \Countable, \Iterator, \JsonSerializable
{
    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @var array
     */
    protected $messages;

    /**
     * Phalcon\Messages\Messages constructor
     *
     * @param array $messages
     */
    public function __construct(array $messages = [])
    {
    }

    /**
     * Appends a message to the collection
     *
     * ```php
     * $messages->appendMessage(
     *     new \Phalcon\Messages\Message("This is a message")
     * );
     * ```
     *
     * @param MessageInterface $message
     */
    public function appendMessage(MessageInterface $message)
    {
    }

    /**
     * Appends an array of messages to the collection
     *
     * ```php
     * $messages->appendMessages($messagesArray);
     * ```
     *
     * @param \Phalcon\Messages\MessageInterface[] $messages
     */
    public function appendMessages($messages)
    {
    }

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
     * Filters the message collection by field name
     *
     * @param string $fieldName
     * @return array
     */
    public function filter(string $fieldName): array
    {
    }

    /**
     * Returns serialised message objects as array for json_encode. Calls
     * jsonSerialize on each object if present
     *
     * ```php
     * $data = $messages->jsonSerialize();
     * echo json_encode($data);
     * ```
     *
     * @return array
     */
    public function jsonSerialize(): array
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
     * @param int $index
     * @return bool
     */
    public function offsetExists($index): bool
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
     * @param mixed $index
     * @return mixed
     */
    public function offsetGet($index): mixed
    {
    }

    /**
     * Sets an attribute using the array-syntax
     *
     * ```php
     * $messages[0] = new \Phalcon\Messages\Message("This is a message");
     * ```
     *
     * @param \Phalcon\Messages\Message $message
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
     * @param mixed $index
     * @return void
     */
    public function offsetUnset($index): void
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
