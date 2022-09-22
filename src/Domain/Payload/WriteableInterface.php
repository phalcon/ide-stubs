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
 * This interface is used for consumers (write)
 */
interface WriteableInterface
{
    /**
     * Sets an exception produced by the domain layer.
     *
     * @param Throwable $exception The exception thrown in the domain layer
     *
     * @return PayloadInterface
     */
    public function setException(\Throwable $exception): PayloadInterface;

    /**
     * Sets arbitrary extra values produced by the domain layer.
     *
     * @param mixed $extras Arbitrary extra values produced by the domain layer.
     *
     * @return PayloadInterface
     */
    public function setExtras($extras): PayloadInterface;

    /**
     * Sets the input received by the domain layer.
     *
     * @param mixed $input The input received by the domain layer.
     *
     * @return PayloadInterface
     */
    public function setInput($input): PayloadInterface;

    /**
     * Sets the messages produced by the domain layer.
     *
     * @param mixed $messages The messages produced by the domain layer.
     *
     * @return PayloadInterface
     */
    public function setMessages($messages): PayloadInterface;

    /**
     * Sets the output produced from the domain layer.
     *
     * @param mixed $output The output produced from the domain layer.
     *
     * @return PayloadInterface
     */
    public function setOutput($output): PayloadInterface;

    /**
     * Sets the status of this payload.
     *
     * @param mixed $status The status for this payload.
     *
     * @return PayloadInterface
     */
    public function setStatus($status): PayloadInterface;
}
