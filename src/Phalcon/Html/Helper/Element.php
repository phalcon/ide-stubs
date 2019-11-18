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
 * Phalcon\Html\Helper\Address
 *
 * Creates an element
 */
class Element extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param string $tag The tag name
     * @param string $text The text for the anchor
     * @param array $attributes Any additional attributes
     * @return string
     */
    public function __invoke(string $tag, string $text, array $attributes = array()): string
    {
    }
}
