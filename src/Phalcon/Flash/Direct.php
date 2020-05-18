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
 * This is an implementation of the Phalcon\Flash\FlashInterface that
 * immediately outputs any message passed to it.
 */
class Direct extends \Phalcon\Flash\AbstractFlash
{

    /**
     * Outputs a message
     *
     * @return null|string|void
     * @param string $type
     * @param mixed $message
     */
    public function message(string $type, $message): ?string
    {
    }

    /**
     * Prints the messages accumulated in the flasher
     *
     * @param bool $remove
     * @return void
     */
    public function output(bool $remove = true)
    {
    }
}
