<?php

namespace Phalcon\Html\Helper;

/**
 * Phalcon\Html\Helper\AnchorRaw
 *
 * Creates a raw anchor
 */
class AnchorRaw extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param string $href
     * @param string $text
     * @param array $attributes
     * @return string
     */
    public function __invoke(string $href, string $text, array $attributes = array()): string {}

}
