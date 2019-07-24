<?php

namespace Phalcon\Domain\Payload;

/**
 * This interface is used for consumers (write)
 */
interface WriteableInterface
{

    /**
     * Sets the status of this payload.
     *
     * @param mixed $status The status for this payload.
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setStatus($status): PayloadInterface;

    /**
     *
     * Sets the input received by the domain layer.
     *
     * @param mixed $input The input received by the domain layer.
     *
     * @param mixed $input
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setInput($input): PayloadInterface;

    /**
     * Sets the output produced from the domain layer.
     *
     * @param mixed $output The output produced from the domain layer.
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setOutput($output): PayloadInterface;

    /**
     * Sets the messages produced by the domain layer.
     *
     * @param mixed $messages The messages produced by the domain layer.
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setMessages($messages): PayloadInterface;

    /**
     * Sets arbitrary extra values produced by the domain layer.
     *
     * @param mixed $extras Arbitrary extra values produced by the domain layer.
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setExtras($extras): PayloadInterface;

}
