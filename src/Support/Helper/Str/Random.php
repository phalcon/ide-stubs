<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

/**
 * Generates a random string based on the given type. Type is one of the
 * RANDOM_ constants
 */
class Random
{
    /**
     * Only alphanumeric characters [a-zA-Z0-9]
     *
     * @var int
     */
    const int RANDOM_ALNUM = 0;

    /**
     * Only alphabetical characters [azAZ]
     *
     * @var int
     */
    const int RANDOM_ALPHA = 1;

    /**
     * Only alphanumeric uppercase characters exclude similar
     * characters [2345679ACDEFHJKLMNPRSTUVWXYZ]
     *
     * @var int
     */
    const int RANDOM_DISTINCT = 5;

    /**
     * Only hexadecimal characters [0-9a-f]
     *
     * @var int
     */
    const int RANDOM_HEXDEC = 2;

    /**
     * Only numbers without 0 [1-9]
     *
     * @var int
     */
    const int RANDOM_NOZERO = 4;

    /**
     * Only numbers [0-9]
     *
     * @var int
     */
    const int RANDOM_NUMERIC = 3;


    /**
     * @param int $type
     * @param int $length
     *
     * @return string
     */
    public function __invoke(int $type = self::RANDOM_ALNUM, int $length = 8): string
    {
    }
}
