<?php

namespace Phalcon\Html\Helper;

/**
 * Phalcon\Html\Helper\ElementRaw
 *
 * Creates an element raw
 */
class ElementRaw extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param array  $attributes Any additional attributes
     *
     * @throws Exception
     * @param string $tag The tag for the anchor
     * @param string $text The text for the anchor
     * @param array $attributes
     * @return string
     */
    public function __invoke(string $tag, string $text, array $attributes = array()): string {}

}
