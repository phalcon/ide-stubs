<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Domain\Payload;

use Throwable;

/**
 * Holds the payload
 */
class Payload implements \Phalcon\Domain\Payload\PayloadInterface
{
    /**
     * Exception if any
     */
    protected ?\Throwable $exception = null;

    /**
     * Extra information
     *
     * @var mixed
     */
    protected $extras;

    /**
     * Input
     *
     * @var mixed
     */
    protected $input;

    /**
     * Messages
     *
     * @var mixed
     */
    protected $messages;

    /**
     * Output
     *
     * @var mixed
     */
    protected $output;

    /**
     * Status
     *
     * @var mixed
     */
    protected $status;

    /**
     * Gets the potential exception thrown in the domain layer
     *
     * @return Throwable|null
     */
    public function getException(): Throwable|null
    {
    }

    /**
     * Extra information
     *
     * @return mixed
     */
    public function getExtras(): mixed
    {
    }

    /**
     * Input
     *
     * @return mixed
     */
    public function getInput(): mixed
    {
    }

    /**
     * Messages
     *
     * @return mixed
     */
    public function getMessages(): mixed
    {
    }

    /**
     * Output
     *
     * @return mixed
     */
    public function getOutput(): mixed
    {
    }

    /**
     * Status
     *
     * Status values are drawn from the `Status` vocabulary.
     *
     * @see Status
     * @return mixed
     */
    public function getStatus(): mixed
    {
    }

    /**
     * Sets an exception thrown in the domain
     *
     * @param \Throwable $exception
     * @return PayloadInterface
     */
    public function setException(\Throwable $exception): PayloadInterface
    {
    }

    /**
     * Sets arbitrary extra domain information.
     *
     * @param mixed $extras
     * @return PayloadInterface
     */
    public function setExtras($extras): PayloadInterface
    {
    }

    /**
     * Sets the domain input.
     *
     * @param mixed $input
     * @return PayloadInterface
     */
    public function setInput($input): PayloadInterface
    {
    }

    /**
     * Sets the domain messages.
     *
     * @param mixed $messages
     * @return PayloadInterface
     */
    public function setMessages($messages): PayloadInterface
    {
    }

    /**
     * Sets the domain output.
     *
     * @param mixed $output
     * @return PayloadInterface
     */
    public function setOutput($output): PayloadInterface
    {
    }

    /**
     * Sets the payload status.
     *
     * Status values are drawn from the `Status` vocabulary.
     *
     * @see Status
     * @param mixed $status
     * @return PayloadInterface
     */
    public function setStatus($status): PayloadInterface
    {
    }
}
