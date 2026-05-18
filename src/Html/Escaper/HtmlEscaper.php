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
 * Escapes a string for use as HTML body content via `htmlspecialchars`.
 */
class HtmlEscaper extends \Phalcon\Html\Escaper\AbstractEscaper
{
    /**
     * @param string|null $input
     *
     * @return string
     */
    public function __invoke(string $input = null): string
    {
    }

    /**
     * @param string|null $input
     *
     * @return string
     */
    public function escape(string $input = null): string
    {
    }
}
