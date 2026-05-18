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
use Throwable;

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
final class FrozenClock implements \Phalcon\Time\Clock\ClockInterface
{
    /**
     * @var DateTimeImmutable
     */
    private $now;

    /**
     * @param \DateTimeImmutable $now
     */
    public function __construct(\DateTimeImmutable $now)
    {
    }

    /**
     * Mutates the clock to a new value. All consumers receive the same modification
     *
     * @throws Exception When the modifier string cannot be parsed
     * @param string $modifier
     * @return FrozenClock
     */
    public function adjust(string $modifier): FrozenClock
    {
    }

    /**
     * Return a new object of now with the current timezone
     *
     * @return FrozenClock
     */
    public static function fromSystemTimezone(): FrozenClock
    {
    }

    /**
     * Return a new object of now with UTC
     *
     * @return FrozenClock
     */
    public static function fromUTC(): FrozenClock
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

    /**
     * Sets the clock to a new value. All consumers receive the same modification
     *
     * @param \DateTimeImmutable $now
     * @return FrozenClock
     */
    public function set(\DateTimeImmutable $now): FrozenClock
    {
    }
}
