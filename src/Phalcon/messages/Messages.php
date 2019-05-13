<?php

namespace Phalcon\Messages;

use Phalcon\Messages\Message;
use Phalcon\Messages\Exception;
use Phalcon\Messages\MessageInterface;

/**
 * Phalcon\Messages\Messages
 *
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
	 */
	public function __construct(array $messages = [])
	{
	}

	/**
	 * Appends a message to the collection
	 *
	 *<code>
	 * $messages->appendMessage(
	 *     new \Phalcon\Messages\Message("This is a message")
	 * );
	 *</code>
	 */
	public function appendMessage(MessageInterface $message)
	{
	}

	/**
	 * Appends an array of messages to the collection
	 *
	 *<code>
	 * $messages->appendMessages($messagesArray);
	 *</code>
	 *
	 * @param \Phalcon\Messages\MessageInterface[] messages
	 */
	public function appendMessages($messages)
	{
	}

	/**
	 * Returns the number of messages in the list
	 */
	public function count() : int
	{
	}

	/**
	 * Returns the current message in the iterator
	 */
	public function current() : MessageInterface
	{
	}

	/**
	 * Filters the message collection by field name
	 */
	public function filter(string $fieldName) : array
	{
	}

    /**
     * Returns serialised message objects as array for json_encode. Calls
     * jsonSerialize on each object if present
     *
     *<code>
     * $data = $messages->jsonSerialize();
     * echo json_encode($data);
     *</code>
     */
    public function jsonSerialize() : array
    {
    }

	/**
	 * Returns the current position/key in the iterator
	 */
	public function key() : int
	{
	}

	/**
	 * Moves the internal iteration pointer to the next position
	 */
	public function next() : void
	{
	}

	/**
	 * Checks if an index exists
	 *
	 *<code>
	 * var_dump(
	 *     isset($message["database"])
	 * );
	 *</code>
	 *
	 * @param int index
	 */
	public function offsetExists($index) : boolean
	{
	}

	/**
	 * Gets an attribute a message using the array syntax
	 *
	 *<code>
	 * print_r(
	 *     $messages[0]
	 * );
	 *</code>
	 */
	public function offsetGet($index)	{
	}

	/**
	 * Sets an attribute using the array-syntax
	 *
	 *<code>
	 * $messages[0] = new \Phalcon\Messages\Message("This is a message");
	 *</code>
	 *
	 * @param \Phalcon\Messages\Message message
	 */
	public function offsetSet($index, $message) : void
	{
	}

	/**
	 * Removes a message from the list
	 *
	 *<code>
	 * unset($message["database"]);
	 *</code>
	 */
	public function offsetUnset($index) : void
	{
	}

	/**
	 * Rewinds the internal iterator
	 */
	public function rewind() : void
	{
	}

	/**
	 * Check if the current message in the iterator is valid
	 */
	public function valid() : boolean
	{
	}
}
