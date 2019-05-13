<?php

namespace Phalcon\Messages;

use Phalcon\Messages\MessageInterface;

/**
 * Phalcon\Messages\Message
 *
 * Stores a message from various components
 */
class Message implements MessageInterface, \JsonSerializable
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
	 */
	public function __construct(string $message, $field = "", string $type = "", int $code = 0, array $metaData = [])
	{
	}

	/**
	 * Returns the message code
	 */
	public function getCode() : int
	{
	}

	/**
	 * Returns field name related to message
	 *
	 * @return mixed
	 */
	public function getField()
	{
	}

	/**
	 * Returns verbose message
	 */
	public function getMessage() : string
	{
	}

	/**
	 * Returns message type
	 */
	public function getType() : string
	{
	}

	/**
	 * Returns message metadata
	 */
	public function getMetaData() : array
	{
	}

    /**
    * Serializes the object for json_encode
    */
	public function jsonSerialize() : array
	{
	}

	/**
	 * Sets code for the message
	 */
	public function setCode(int $code) : MessageInterface
	{
	}

	/**
	 * Sets field name related to message
	 */
	public function setField($field) : MessageInterface
	{
	}

	/**
	 * Sets verbose message
	 */
	public function setMessage(string $message) : MessageInterface
	{
	}

	/**
	 * Sets message type
	 */
	public function setType(string $type) : MessageInterface
	{
	}

	/**
	 * Sets message metadata
	 */
	public function setMetaData(array $metaData) : MessageInterface
	{
	}

	/**
	 * Magic __toString method returns verbose message
	 */
	public function __toString() : string
	{
	}

	/**
	 * Magic __set_state helps to re-build messages variable exporting
	 */
	public static function __set_state(array $message) : MessageInterface
	{
	}
}
