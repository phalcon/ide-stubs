<?php

namespace Phalcon\Domain\Payload;

/**
 * This interface is used for consumers (read only)
 */
interface ReadableInterface
{

    /**
     * Gets the status of this payload.
     *
     * @return mixed
     */
    public function getStatus();

    /**
     * Gets the input received by the domain layer.
     *
     * @return mixed
     */
    public function getInput();

    /**
     * Gets the output produced from the domain layer.
     *
     * @return mixed
     */
    public function getOutput();

    /**
     * Gets the messages produced by the domain layer.
     *
     * @return mixed
     */
    public function getMessages();

    /**
     * Gets arbitrary extra values produced by the domain layer.
     *
     * @return mixed
     */
    public function getExtras();
}
