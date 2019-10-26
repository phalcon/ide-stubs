<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;

/**
 * Phalcon\Html\Helper\ElementRaw
 *
 * Creates an element raw
 */
class ElementRaw extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param string $tag The tag for the anchor
     * @param string $text The text for the anchor
     * @param array $attributes Any additional attributes
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $tag, string $text, array $attributes = array()): string
    {
    }
}
