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
 * Interpolates context values into the message placeholders. By default, the
 * right and left tokens are `%`
 *
 * @see https://www.php-fig.org/psr/psr-3/ Section 1.2 Message
 */
class Interpolate
{
    /**
     * @param string $message
     * @param array  $context
     * @param string $leftToken
     * @param string $rightToken
     * @return string
     */
    public function __invoke(string $message, array $context = [], string $leftToken = '%', string $rightToken = '%'): string
    {
    }
}
