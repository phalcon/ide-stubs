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
 * Phalcon\Filter\Sanitize\Special
 *
 * Sanitizes a value special characters
 */
class Special implements \Phalcon\Contracts\Filter\Sanitizer
{
    /**
     * @param mixed $input The text to sanitize
     *
     * @return mixed
     */
    public function __invoke($input)
    {
    }
}
