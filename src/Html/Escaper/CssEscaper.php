<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Escaper;

/**
 * Escapes a string for use inside a CSS value by replacing non-alphanumeric
 * characters with their hexadecimal escape sequence.
 */
class CssEscaper extends \Phalcon\Html\Escaper\AbstractEscaper
{
    /**
     * @param string $input
     *
     * @return string
     */
    public function __invoke(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     */
    public function escape(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     */
    private function doEscapeCss(string $input): string
    {
    }
}
