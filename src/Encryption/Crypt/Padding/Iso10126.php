<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Crypt\Padding;

/**
 * Class Iso10126
 *
 * @package Phalcon\Encryption\Crypt\Padding
 */
class Iso10126 implements \Phalcon\Encryption\Crypt\Padding\PadInterface
{
    /**
     * @param string $input
     * @param int    $blockSize
     *
     * @return string
     * @param int $paddingSize
     */
    public function pad(int $paddingSize): string
    {
    }

    /**
     * @param string $input
     * @param int    $blockSize
     *
     * @return int
     */
    public function unpad(string $input, int $blockSize): int
    {
    }
}
