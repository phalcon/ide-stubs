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
 * Returns number of vowels in provided string. Uses a regular expression
 * to count the number of vowels (A, E, I, O, U) in a string.
 */
class CountVowels
{
    /**
     * @param string $text
     *
     * @return int
     */
    public function __invoke(string $text): int
    {
    }
}
