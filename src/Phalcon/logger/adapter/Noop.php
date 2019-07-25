<?php

namespace Phalcon\Logger\Adapter;

/**
 * Phalcon\Logger\Adapter\Noop
 *
 * Adapter to store logs in plain text files
 *
 * ```php
 * $logger = new \Phalcon\Logger\Adapter\Noop();
 *
 * $logger->log(\Phalcon\Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *
 * $logger->close();
 * ```
 */
class Noop extends \Phalcon\Logger\Adapter\AbstractAdapter
{

    /**
     * Closes the stream
     *
     * @return bool
     */
    public function close(): bool {}

    /**
     * Processes the message i.e. writes it to the file
     *
     * @param \Phalcon\Logger\Item $item
     */
    public function process(\Phalcon\Logger\Item $item) {}

}
