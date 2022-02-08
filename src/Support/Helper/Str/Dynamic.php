<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

use RuntimeException;

/**
 * Generates random text in accordance with the template. The template is
 * defined by the left and right delimiter and it can contain values separated
 * by the separator
 */
class Dynamic
{
    /**
     * @param string $text
     * @param string $leftDelimiter
     * @param string $rightDelimiter
     * @param string $separator
     *
     * @return string
     */
    public function __invoke(string $text, string $leftDelimiter = '{', string $rightDelimiter = '}', string $separator = '|'): string
    {
    }
}
