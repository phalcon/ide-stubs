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
 * Converts strings to non camelized style
 */
class Uncamelize
{
    /**
     * @param string $text
     * @param string $delimiter
     *
     * @return string
     */
    public function __invoke(string $text, string $delimiter = '_'): string
    {
    }
}
