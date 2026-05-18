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
 * Escapes a string for use inside a JavaScript context by replacing
 * non-alphanumeric characters with their hexadecimal escape sequence.
 * Wraps the C-level `phalcon_escape_js` after normalising the input to
 * UTF-32.
 */
class JsEscaper extends \Phalcon\Html\Escaper\AbstractEscaper
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
    private function doEscapeJs(string $input): string
    {
    }
}
