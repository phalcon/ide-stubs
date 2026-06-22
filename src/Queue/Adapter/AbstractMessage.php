<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter;

use Phalcon\Contracts\Queue\Message as MessageInterface;

/**
 * Shared implementation of every Message getter/setter, plus the
 * correlation-id / message-id / timestamp / reply-to header conveniences.
 * Concrete adapter messages extend this base.
 *
 * The convenience accessors are stored as transport headers under fixed keys
 * for binary compatibility with the wider interop ecosystem.
 */
abstract class AbstractMessage implements MessageInterface
{
    /**
     * @var string
     */
    protected $body = '';

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var array
     */
    protected $properties = [];

    /**
     * @var bool
     */
    protected $redelivered = false;

    /**
     * AbstractMessage constructor.
     *
     * @param string $body
     * @param array $properties
     * @param array $headers
     */
    public function __construct(string $body = '', array $properties = [], array $headers = [])
    {
    }

    /**
     * Returns the message body.
     *
     * @return string
     */
    public function getBody(): string
    {
    }

    /**
     * Returns the correlation id used to correlate request/reply messages.
     *
     * @return string|null
     */
    public function getCorrelationId(): string|null
    {
    }

    /**
     * Returns a single header value, or the default when it is not set.
     *
     * @param string $name
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getHeader(string $name, $defaultValue = null): mixed
    {
    }

    /**
     * Returns all transport headers.
     *
     * @return array
     */
    public function getHeaders(): array
    {
    }

    /**
     * Returns the message id.
     *
     * @return string|null
     */
    public function getMessageId(): string|null
    {
    }

    /**
     * Returns all application properties.
     *
     * @return array
     */
    public function getProperties(): array
    {
    }

    /**
     * Returns a single property value, or the default when it is not set.
     *
     * @param string $name
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getProperty(string $name, $defaultValue = null): mixed
    {
    }

    /**
     * Returns the reply-to destination name.
     *
     * @return string|null
     */
    public function getReplyTo(): string|null
    {
    }

    /**
     * Returns the timestamp (in milliseconds) or null when it is not set.
     *
     * @return int|null
     */
    public function getTimestamp(): int|null
    {
    }

    /**
     * Whether the message has been redelivered.
     *
     * @return bool
     */
    public function isRedelivered(): bool
    {
    }

    /**
     * Sets the message body.
     *
     * @param string $body
     * @return void
     */
    public function setBody(string $body): void
    {
    }

    /**
     * Sets the correlation id.
     *
     * @param string $correlationId
     * @return void
     */
    public function setCorrelationId(string $correlationId): void
    {
    }

    /**
     * Sets a single transport header.
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function setHeader(string $name, $value): void
    {
    }

    /**
     * Replaces all transport headers.
     *
     * @param array $headers
     * @return void
     */
    public function setHeaders(array $headers): void
    {
    }

    /**
     * Sets the message id.
     *
     * @param string $messageId
     * @return void
     */
    public function setMessageId(string $messageId): void
    {
    }

    /**
     * Replaces all application properties.
     *
     * @param array $properties
     * @return void
     */
    public function setProperties(array $properties): void
    {
    }

    /**
     * Sets a single application property.
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function setProperty(string $name, $value): void
    {
    }

    /**
     * Marks the message as redelivered.
     *
     * @param bool $redelivered
     * @return void
     */
    public function setRedelivered(bool $redelivered): void
    {
    }

    /**
     * Sets the reply-to destination name.
     *
     * @param string $replyTo
     * @return void
     */
    public function setReplyTo(string $replyTo): void
    {
    }

    /**
     * Sets the timestamp (in milliseconds).
     *
     * @param int $timestamp
     * @return void
     */
    public function setTimestamp(int $timestamp): void
    {
    }
}
