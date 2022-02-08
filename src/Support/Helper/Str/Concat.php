<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

use Phalcon\Support\Helper\Exception;

/**
 * Concatenates strings using the separator only once without duplication in
 * places concatenation
 */
class Concat extends \Phalcon\Support\Helper\Str\AbstractStr
{
    /**
     * @param string $delimiter
     * @param string $first
     * @param string $second
     * @param string ...$arguments
     *
     * @return string
     */
    public function __invoke(): string
    {
    }
}
