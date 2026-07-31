<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\ADR\Payload;

use Throwable;

/**
 * Contract for the immutable payload produced by the domain layer.
 */
interface Payload
{
    /**
     * Gets the exception thrown in the domain layer, if any.
     *
     * @return Throwable|null
     */
    public function getException(): Throwable|null;

    /**
     * Gets the arbitrary extra domain information.
     *
     * @return mixed
     */
    public function getExtras(): mixed;

    /**
     * Gets the domain input.
     *
     * @return mixed
     */
    public function getInput(): mixed;

    /**
     * Gets the domain messages.
     *
     * @return mixed
     */
    public function getMessages(): mixed;

    /**
     * Gets the domain result.
     *
     * @return mixed
     */
    public function getResult(): mixed;

    /**
     * Gets the payload status.
     *
     * @return mixed
     */
    public function getStatus(): mixed;

    /**
     * Returns a copy of the payload with the given exception.
     *
     * @param \Throwable $exception
     * @return Payload
     */
    public function withException(\Throwable $exception): Payload;

    /**
     * Returns a copy of the payload with the given extras.
     *
     * @param mixed $extras
     * @return Payload
     */
    public function withExtras($extras): Payload;

    /**
     * Returns a copy of the payload with the given input.
     *
     * @param mixed $input
     * @return Payload
     */
    public function withInput($input): Payload;

    /**
     * Returns a copy of the payload with the given messages.
     *
     * @param mixed $messages
     * @return Payload
     */
    public function withMessages($messages): Payload;

    /**
     * Returns a copy of the payload with the given result.
     *
     * @param mixed $result
     * @return Payload
     */
    public function withResult($result): Payload;

    /**
     * Returns a copy of the payload with the given status.
     *
     * @param mixed $status
     * @return Payload
     */
    public function withStatus($status): Payload;
}
