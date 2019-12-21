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
 * Phalcon\Filter\Sanitize\Regex
 *
 * Sanitizes a value performing preg_replace
 */
class Regex
{

    /**
     * @param mixed $input The text to sanitize
     * @param mixed $pattern
     * @param mixed $replace
     */
    public function __invoke($input, $pattern, $replace)
    {
    }
}
