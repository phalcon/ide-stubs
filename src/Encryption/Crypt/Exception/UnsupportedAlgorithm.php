<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Crypt\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class UnsupportedAlgorithm extends \Phalcon\Encryption\Crypt\Exception\Exception
{
    /**
     * @param string $type
     * @param string $cipher
     */
    public function __construct(string $type, string $cipher)
    {
    }
}
