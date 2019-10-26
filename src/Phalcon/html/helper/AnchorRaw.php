<?php

namespace Phalcon\Html\Helper;

/**
 * Phalcon\Html\Helper\AnchorRaw
 *
 * Creates a raw anchor
 */
class AnchorRaw extends AbstractHelper
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
