<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

use Stringable;

/**
 * Prefixes the text with the supplied prefix
 *
 * @todo v7 make text string
 */
class Prefix
{
    /**
     * @param scalar|Stringable|null $text
     * @param string $prefix
     * @return string
     */
    public function __invoke($text, string $prefix): string
    {
    }
}
