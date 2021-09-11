<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\FormatterInterface
 *
 * This interface must be implemented by formatters in Phalcon\Logger
 */
interface FormatterInterface
{

    /**
     * Applies a format to an item
     *
     * @param \Phalcon\Logger\Item $item
     * @return string|array
     */
    public function format(\Phalcon\Logger\Item $item);
}
