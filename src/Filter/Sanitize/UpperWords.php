<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Sanitize;

/**
 * Phalcon\Filter\Sanitize\UpperWords
 *
 * Sanitizes a value to uppercase the first character of each word
 */
class UpperWords
{
    /**
     * @param string $input The text to sanitize
     *
     * @return false|string|string[]
     */
    public function __invoke(string $input)
    {
    }
}
