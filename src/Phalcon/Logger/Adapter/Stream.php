<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Adapter;
use Phalcon\Logger\Exception;
use Phalcon\Logger\Formatter\FormatterInterface;
use Phalcon\Logger\Item;
use UnexpectedValueException;

/**
 * Phalcon\Logger\Adapter\Stream
 *
 * Adapter to store logs in plain text files
 *
 * ```php
 * $logger = new \Phalcon\Logger\Adapter\Stream("app/logs/test.log");
 *
 * $logger->log("This is a message");
 * $logger->log(\Phalcon\Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *
 * $logger->close();
 * ```
 */
class Stream extends \Phalcon\Logger\Adapter\AbstractAdapter
{
    /**
     * Stream handler resource
     *
     * @var resource|null
     */
    protected $handler = null;

    /**
     * The file open mode. Defaults to "ab"
     *
     * @var string
     */
    protected $mode = 'ab';

    /**
     * Stream name
     *
     * @var string
     */
    protected $name;

    /**
     * Path options
     *
     * @var array
     */
    protected $options;


    /**
     * Stream name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Constructor. Accepts the name and some options
     *
     * @param array $options = [
     *     'mode' => 'ab'
     * ]
     * @param string $name
     */
    public function __construct(string $name, array $options = array())
    {
    }

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
