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
 * Phalcon\Filter\Sanitize\IP
 *
 * Sanitizes a value to an ip address or CIDR range
 */
class Ip
{
    /**
     * @param string $input
     * @param int $filter
     * @return false|string
     */
    public function __invoke(string $input, int $filter = 0): false|string
    {
    }
}
