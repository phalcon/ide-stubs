<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

use Phalcon\Logger\Item;

/**
 * Class Noop
 *
 * @package Phalcon\Logger\Adapter
 */
class Noop extends \Phalcon\Logger\Adapter\AbstractAdapter
{
    /**
     * Closes the stream
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * Processes the message i.e. writes it to the file
     *
     * @param Item $item
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item): void
    {
    }
}
