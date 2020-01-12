<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

/**
 * Phalcon\Html\Helper\Button
 *
 * Creates a button tag
 */
class Button extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param string $text The text for the anchor
     * @param array $attributes Any additional attributes
     * @return string
     */
    public function __invoke(string $text, array $attributes = array()): string
    {
    }
}
