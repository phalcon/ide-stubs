<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Adapter\Exceptions\FileOpenFailed;
use Phalcon\Logger\Adapter\Exceptions\InvalidStreamMode;
use Phalcon\Logger\Exception;
use Phalcon\Logger\Item;
use Phalcon\Traits\Php\FileTrait;

/**
 * Phalcon\Logger\Adapter\Stream
 *
 * Adapter to store logs in plain text files
 *
 * ```php
 * $logger = new \Phalcon\Logger\Adapter\Stream('app/logs/test.log');
 *
 * $logger->log('This is a message');
 * $logger->log(\Phalcon\Logger\Enum::ERROR, 'This is an error');
 * $logger->error('This is another error');
 *
 * $logger->close();
 * ```
 *
 * @property resource|null $handler
 * @property string        $mode
 * @property string        $name
 */
class Stream extends \Phalcon\Logger\Adapter\AbstractAdapter
{
    use \Phalcon\Traits\Php\FileTrait;


    /**
     * Stream handler resource
     *
     * @var resource|null
     */
    protected $handler = null;

    /**
     * The file open mode. Defaults to 'ab'
     */
    protected string $mode = 'ab';

    /**
     * Stream name
     */
    protected string $name;

    /**
     * Stream constructor.
     *
     * @throws InvalidStreamMode
     * @param string $name
     * @param array $options
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
     * @param \Phalcon\Logger\Item $item
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item): void
    {
    }
}
