<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Sanitize;

use Phalcon\Contracts\Filter\Sanitizer;

/**
 * Phalcon\Filter\Sanitize\Upper
 *
 * Sanitizes a value to uppercase
 */
class Upper implements \Phalcon\Contracts\Filter\Sanitizer
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
