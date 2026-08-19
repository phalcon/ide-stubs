<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Messages;

use Iterator;
use JsonSerializable;
use Phalcon\Contracts\Messages\Messages as MessagesContract;
use Phalcon\Contracts\Messages\MessagesTypes;
use Phalcon\Messages\Exceptions\MessageNotObject;
use Phalcon\Messages\Exceptions\MessagesNotIterable;
use Phalcon\Messages\Traits\MessagesHelperTrait;
use Traversable;

/**
 * Represents a collection of messages
 *
 * Messages are stored and iterated by integer position. An entry added under a
 * string key through the ArrayAccess interface (for example
 * `$messages["database"] = $message`) stays reachable by that offset but is not
 * visited during iteration (`foreach`), which walks the integer sequence only.
 * Use the append methods (`appendMessage()` / `appendMessages()`) when entries
 * must take part in iteration.
 *
 * @phpstan-import-type messages_list from MessagesTypes
 * @phpstan-import-type messages_serialized from MessagesTypes
 */
class Messages implements MessagesContract, \JsonSerializable
{
    use \Phalcon\Messages\Traits\MessagesHelperTrait;



    /**
     * Phalcon\Messages\Messages constructor
     *
     * @param messages_list $messages
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
     * @return void
     */
    public function appendMessage(MessageInterface $message): void
    {
    }

    /**
     * Appends an array of messages to the collection
     *
     * ```php
     * $messages->appendMessages($messagesArray);
     * ```
     *
     * Accepts an array of MessageInterface objects or an Iterator yielding
     * them. The parameter stays untyped so that a non-iterable argument
     * reaches the guard below and raises MessagesNotIterable rather than a
     * TypeError.
     *
     * @param mixed $messages
     *
     * @return void
     * @throws MessagesNotIterable
     */
    public function appendMessages($messages)
    {
    }

    /**
     * Filters the message collection by field name
     *
     * @return messages_list
     * @param string $fieldName
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
     * @return messages_serialized
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    private function checkSerializable($value): mixed
    {
    }
}
