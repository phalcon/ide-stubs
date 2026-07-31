<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Payload;

use Phalcon\Contracts\ADR\Payload\Payload as PayloadContract;
use Throwable;

/**
 * Immutable payload produced by the domain layer.
 *
 * Every `with()` method returns a new instance, leaving the receiver
 * unchanged. Named factories provide a concise way to create a payload for the
 * commonly used statuses.
 */
class Payload implements PayloadContract
{
    /**
     * @var Throwable|null
     */
    protected $exception = null;

    /**
     * @var mixed
     */
    protected $extras = null;

    /**
     * @var mixed
     */
    protected $input = null;

    /**
     * @var mixed
     */
    protected $messages = null;

    /**
     * @var mixed
     */
    protected $result = null;

    /**
     * @var mixed
     */
    protected $status = null;

    /**
     * Creates a payload with the `ACCEPTED` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function accepted($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `AUTHENTICATED` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function authenticated($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `AUTHORIZED` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function authorized($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `CREATED` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function created($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `DELETED` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function deleted($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `ERROR` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function error($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_AUTHORIZED` status (authenticated but
     * not allowed - HTTP 403).
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function forbidden($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `FOUND` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function found($result = null): PayloadContract
    {
    }

    /**
     * Gets the exception thrown in the domain layer, if any.
     *
     * @return Throwable|null
     */
    public function getException(): Throwable|null
    {
    }

    /**
     * Gets the arbitrary extra domain information.
     *
     * @return mixed
     */
    public function getExtras(): mixed
    {
    }

    /**
     * Gets the domain input.
     *
     * @return mixed
     */
    public function getInput(): mixed
    {
    }

    /**
     * Gets the domain messages.
     *
     * @return mixed
     */
    public function getMessages(): mixed
    {
    }

    /**
     * Gets the domain result.
     *
     * @return mixed
     */
    public function getResult(): mixed
    {
    }

    /**
     * Gets the payload status.
     *
     * @return mixed
     */
    public function getStatus(): mixed
    {
    }

    /**
     * Creates a payload with the `NOT_VALID` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function invalid($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_ACCEPTED` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function notAccepted($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_CREATED` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function notCreated($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_DELETED` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function notDeleted($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_FOUND` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function notFound($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_UPDATED` status.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function notUpdated($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `PROCESSING` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function processing($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `SUCCESS` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function success($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `NOT_AUTHENTICATED` status (identity not
     * established - HTTP 401).
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public static function unauthenticated($messages = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `UPDATED` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function updated($result = null): PayloadContract
    {
    }

    /**
     * Creates a payload with the `VALID` status.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public static function valid($result = null): PayloadContract
    {
    }

    /**
     * Returns a copy of the payload with the given exception.
     *
     * @param \Throwable $exception
     * @return PayloadContract
     */
    public function withException(\Throwable $exception): PayloadContract
    {
    }

    /**
     * Returns a copy of the payload with the given extras.
     *
     * @param mixed $extras
     * @return PayloadContract
     */
    public function withExtras($extras): PayloadContract
    {
    }

    /**
     * Returns a copy of the payload with the given input.
     *
     * @param mixed $input
     * @return PayloadContract
     */
    public function withInput($input): PayloadContract
    {
    }

    /**
     * Returns a copy of the payload with the given messages.
     *
     * @param mixed $messages
     * @return PayloadContract
     */
    public function withMessages($messages): PayloadContract
    {
    }

    /**
     * Returns a copy of the payload with the given result.
     *
     * @param mixed $result
     * @return PayloadContract
     */
    public function withResult($result): PayloadContract
    {
    }

    /**
     * Returns a copy of the payload with the given status.
     *
     * @param mixed $status
     * @return PayloadContract
     */
    public function withStatus($status): PayloadContract
    {
    }
}
