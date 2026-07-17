<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

use Phalcon\Traits\Support\Helper\Str\CamelizeTrait;

/**
 * Converts strings to upperCamelCase or lowerCamelCase
 */
class Camelize
{
    use \Phalcon\Traits\Support\Helper\Str\CamelizeTrait;



    /**
     * @param string      $text
     * @param string|null $delimiters
     * @param bool        $lowerFirst
     *
     * @return string
     */
    public function __invoke(string $text, ?string $delimiters = null, bool $lowerFirst = false): string
    {
    }
}
