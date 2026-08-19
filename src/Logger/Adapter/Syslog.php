<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Adapter\Exceptions\SyslogOpenFailed;
use Phalcon\Logger\Enum;
use Phalcon\Logger\Item;

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
    protected int $facility = 0;

    protected string $name = '';

    protected bool $opened = false;

    protected int $option = 0;

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
     * @throws SyslogOpenFailed
     * @param \Phalcon\Logger\Item $item
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item): void
    {
    }

    /**
     * Open connection to system logger
     *
     * @param string $ident
     * @param int $option
     * @param int $facility
     * @return bool
     */
    protected function openlog(string $ident, int $option, int $facility): bool
    {
    }

    /**
     * Translates a Logger level to a Syslog level
     *
     * @param int $level
     * @return int
     */
    private function logLevelToSyslog(int $level): int
    {
    }
}
