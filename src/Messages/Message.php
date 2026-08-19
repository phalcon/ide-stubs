<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Messages;

use JsonSerializable;
use Phalcon\Contracts\Messages\MessagesTypes;

/**
 * Class Message
 *
 * Stores a message from various components
 *
 * @phpstan-import-type messages_message from MessagesTypes
 * @phpstan-import-type messages_metadata from MessagesTypes
 */
class Message implements \Phalcon\Messages\MessageInterface, \JsonSerializable
{
    protected int $code = 0;

    protected string $field = '';

    protected string $message;

    protected array $metaData = [];

    protected string $type = '';

    /**
     * Phalcon\Messages\Message constructor
     *
     * @param messages_metadata $metaData
     * @param string $message
     * @param string $field
     * @param string $type
     * @param int $code
     */
    public function __construct(string $message, string $field = '', string $type = '', int $code = 0, array $metaData = [])
    {
    }

    /**
     * Magic __toString method returns verbose message
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
    }

    /**
     * @return string
     */
    public function getField(): string
    {
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * @return messages_metadata
     */
    public function getMetaData(): array
    {
    }

    /**
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Serializes the object for json_encode
     *
     * @return messages_message
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Sets code for the message
     *
     * @param int $code
     * @return MessageInterface
     */
    public function setCode(int $code): MessageInterface
    {
    }

    /**
     * Sets field name related to message
     *
     * @param string $field
     * @return MessageInterface
     */
    public function setField(string $field): MessageInterface
    {
    }

    /**
     * Sets verbose message
     *
     * @param string $message
     * @return MessageInterface
     */
    public function setMessage(string $message): MessageInterface
    {
    }

    /**
     * Sets message metadata
     *
     * @param messages_metadata $metaData
     * @return MessageInterface
     */
    public function setMetaData(array $metaData): MessageInterface
    {
    }

    /**
     * Sets message type
     *
     * @param string $type
     * @return MessageInterface
     */
    public function setType(string $type): MessageInterface
    {
    }
}
