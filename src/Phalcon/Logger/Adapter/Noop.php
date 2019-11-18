<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
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
    public function close(): bool
    {
    }

    /**
     * Processes the message i.e. writes it to the file
     *
     * @param \Phalcon\Logger\Item $item
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item)
    {
    }
}
