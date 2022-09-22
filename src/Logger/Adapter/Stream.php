<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use LogicException;
use Phalcon\Logger\Exception;
use Phalcon\Logger\Item;

/**
 * Phalcon\Logger\Adapter\Stream
 *
 * Adapter to store logs in plain text files
 *
 * ```php
 * $logger = new \Phalcon\Logger\Adapter\Stream('app/logs/test.log');
 *
 * $logger->log('This is a message');
 * $logger->log(\Phalcon\Logger::ERROR, 'This is an error');
 * $logger->error('This is another error');
 *
 * $logger->close();
 * ```
 *
 * @property string        $mode
 * @property string        $name
 * @property array         $options
 */
class Stream extends \Phalcon\Logger\Adapter\AbstractAdapter
{
    /**
     * The file open mode. Defaults to 'ab'
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
     * Stream constructor.
     *
     * @param string $name
     * @param array  $options
     *
     * @throws Exception
     */
    public function __construct(string $name, array $options = [])
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
     * Stream name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Processes the message i.e. writes it to the file
     *
     * @param Item $item
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item): void
    {
    }

    /**
     * @todo to be removed when we get traits
     * @param string $filename
     * @param string $mode
     */
    protected function phpFopen(string $filename, string $mode)
    {
    }
}
