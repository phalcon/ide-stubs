<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

/**
 * Class Direct
 *
 * @package Phalcon\Flash
 */
class Direct extends \Phalcon\Flash\AbstractFlash
{
    /**
     * Outputs a message
     *
     * @param string $type
     * @param mixed  $message
     *
     * @return string|null
     * @throws Exception
     */
    public function message(string $type, $message): string|null
    {
    }

    /**
     * Prints the messages accumulated in the flasher
     *
     * @param bool $remove
     * @return void
     */
    public function output(bool $remove = true): void
    {
    }
}
