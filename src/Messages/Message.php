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

/**
 * Phalcon\Messages\Message
 *
 * Stores a message from various components
 */
class Message implements \Phalcon\Messages\MessageInterface, \JsonSerializable
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $field;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $metaData = [];

    /**
     * Phalcon\Messages\Message constructor
     *
     * @param string $message
     * @param mixed $field
     * @param string $type
     * @param int $code
     * @param array $metaData
     */
    public function __construct(string $message, $field = '', string $type = '', int $code = 0, array $metaData = [])
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
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * @return array
     */
    public function getMetaData(): array
    {
    }

    /**
     * Serializes the object for json_encode
     *
     * @return array
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
     * @param mixed $field
     * @return MessageInterface
     */
    public function setField($field): MessageInterface
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
     * @param array $metaData
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
