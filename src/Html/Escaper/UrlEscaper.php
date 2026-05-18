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
 * Escapes a string for use as a URL component via `rawurlencode`. The
 * encoding/flags/doubleEncode setters are accepted for symmetry with the
 * other contexts but have no effect on the output.
 */
class UrlEscaper extends \Phalcon\Html\Escaper\AbstractEscaper
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
}
