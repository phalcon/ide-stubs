<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

/**
 * Log Level Enum constants
 */
class Enum
{
    /**
     * @var int
     */
    const int ALERT = 2;

    /**
     * @var int
     */
    const int CRITICAL = 1;

    /**
     * Default threshold and fallback sink. It sits between DEBUG (7) and
     * TRACE (9) in the ordering, so the default log level excludes TRACE.
     * It is also the fallback for unknown message levels and invalid
     * setLogLevel() values.
     *
     * @var int
     */
    const int CUSTOM = 8;

    /**
     * @var int
     */
    const int DEBUG = 7;

    /**
     * @var int
     */
    const int EMERGENCY = 0;

    /**
     * @var int
     */
    const int ERROR = 3;

    /**
     * @var int
     */
    const int INFO = 6;

    /**
     * @var int
     */
    const int NOTICE = 5;

    /**
     * @var int
     */
    const int TRACE = 9;

    /**
     * @var int
     */
    const int WARNING = 4;
}
