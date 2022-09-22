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
use Phalcon\Logger\Item;
use Phalcon\Logger\Logger;

/**
 * Class Syslog
 *
 * @property string $defaultFormatter
 * @property int    $facility
 * @property string $name
 * @property bool   $opened
 * @property int    $option
 */
class Syslog extends \Phalcon\Logger\Adapter\AbstractAdapter
{
    /**
     * @var int
     */
    protected $facility = 0;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var bool
     */
    protected $opened = false;

    /**
     * @var int
     */
    protected $option = 0;

    /**
     * Syslog constructor.
     *
     * @param string $name
     * @param array  $options
     */
    public function __construct(string $name, array $options = [])
    {
    }

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * Processes the message i.e. writes it to the syslog
     *
     * @param Item $item
     *
     * @throws LogicException
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item): void
    {
    }

    /**
     * Open connection to system logger
     *
     * @link https://php.net/manual/en/function.openlog.php
     *
     * @param string $ident
     * @param int    $option
     * @param int    $facility
     *
     * @return bool
     */
    protected function openlog(string $ident, int $option, int $facility): bool
    {
    }

    /**
     * Translates a Logger level to a Syslog level
     *
     * @param int $level
     *
     * @return int
     */
    private function logLevelToSyslog(int $level): int
    {
    }
}
