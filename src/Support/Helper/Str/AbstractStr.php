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
 * Abstract class offering methods to help with the Str namespace. This can
 * be moved to a trait once Zephir supports it.
 *
 * @todo move to trait when there is support for it
 */
abstract class AbstractStr
{
    /**
     * Check if a string ends with a given string
     *
     * @param string $haystack
     * @param string $needle
     * @param bool   $ignoreCase
     *
     * @return bool
     */
    protected function toEndsWith(string $haystack, string $needle, bool $ignoreCase = true): bool
    {
    }

    /**
     * Interpolates context values into the message placeholders
     *
     * @see https://www.php-fig.org/psr/psr-3/ Section 1.2 Message
     *
     * @param string $input
     * @param array  $context
     * @param string $left
     * @param string $right
     *
     * @return string
     */
    protected function toInterpolate(string $input, array $context = [], string $left = '%', string $right = '%'): string
    {
    }

    /**
     * Lowercases a string using mbstring
     *
     * @param string $text
     * @param string $encoding
     *
     * @return string
     */
    protected function toLower(string $text, string $encoding = 'UTF-8'): string
    {
    }

    /**
     * Check if a string starts with a given string
     *
     * @param string $haystack
     * @param string $needle
     * @param bool   $ignoreCase
     *
     * @return bool
     */
    protected function toStartsWith(string $haystack, string $needle, bool $ignoreCase = true): bool
    {
    }

    /**
     * Uppercases a string using mbstring
     *
     * @param string $text
     * @param string $encoding
     *
     * @return string
     */
    protected function toUpper(string $text, string $encoding = 'UTF-8'): string
    {
    }
}
