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
 * Phalcon\Html\Helper\AnchorRaw
 *
 * Creates a raw anchor
 */
class AnchorRaw extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param string $href The href tag
     * @param string $text The text for the anchor
     * @param array $attributes Any additional attributes
     * @return string
     */
    public function __invoke(string $href, string $text, array $attributes = array()): string
    {
    }
}
