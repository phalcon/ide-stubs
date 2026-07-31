<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Payload;

use Phalcon\Contracts\ADR\Payload\Payload as PayloadInterface;

/**
 * Thin, injectable factory mirroring the `Payload` named factories.
 *
 * It exists so that payload creation can be registered as a service in the DI
 * container and substituted in tests, rather than calling the static factories
 * directly.
 */
class PayloadFactory
{
    /**
     * Creates a payload with the `ACCEPTED` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function accepted($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `AUTHENTICATED` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function authenticated($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `AUTHORIZED` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function authorized($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `CREATED` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function created($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `DELETED` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function deleted($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `ERROR` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function error($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_AUTHORIZED` status (HTTP 403).
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function forbidden($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `FOUND` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function found($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_VALID` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function invalid($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_ACCEPTED` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function notAccepted($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_CREATED` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function notCreated($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_DELETED` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function notDeleted($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_FOUND` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function notFound($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_UPDATED` status.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function notUpdated($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `PROCESSING` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function processing($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `SUCCESS` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function success($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `NOT_AUTHENTICATED` status (HTTP 401).
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function unauthenticated($messages = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `UPDATED` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function updated($result = null): PayloadInterface
    {
    }

    /**
     * Creates a payload with the `VALID` status.
     *
     * @param mixed $result
     * @return PayloadInterface
     */
    public function valid($result = null): PayloadInterface
    {
    }
}
