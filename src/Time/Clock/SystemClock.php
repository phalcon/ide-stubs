<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Time\Clock;

use DateTimeImmutable;
use DateTimeZone;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by lcobucci/clock
 *
 * @link    https://github.com/lcobucci/clock
 * @license https://github.com/lcobucci/clock/blob/3.7.x/LICENSE
 */
final class SystemClock implements \Phalcon\Time\Clock\ClockInterface
{
    /**
     * @var DateTimeZone
     */
    private $timezone;

    /**
     * @param \DateTimeZone $timezone
     */
    public function __construct(\DateTimeZone $timezone)
    {
    }

    /**
     * Return a new object of now with the current timezone
     *
     * @return SystemClock
     */
    public static function fromSystemTimezone(): SystemClock
    {
    }

    /**
     * Return a new object of now with UTC
     *
     * @return SystemClock
     */
    public static function fromUTC(): SystemClock
    {
    }

    /**
     * Return the current clock
     *
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable
    {
    }
}
