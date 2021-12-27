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
    const RANDOM_ALNUM = 0;

    const RANDOM_ALPHA = 1;

    const RANDOM_DISTINCT = 5;

    const RANDOM_HEXDEC = 2;

    const RANDOM_NOZERO = 4;

    const RANDOM_NUMERIC = 3;


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
