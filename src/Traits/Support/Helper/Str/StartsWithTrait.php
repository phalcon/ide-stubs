<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Traits\Support\Helper\Str;

/**
 * Check if a string starts with a given string
 */
trait StartsWithTrait
{
    /**
     * @param string $haystack
     * @param string $needle
     * @param bool   $ignoreCase
     *
     * @return bool
     */
    protected static function toStartsWith(string $haystack, string $needle, bool $ignoreCase = true): bool
    {
    }
}
