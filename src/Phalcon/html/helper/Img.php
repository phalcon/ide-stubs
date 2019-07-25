<?php

namespace Phalcon\Html\Helper;

/**
 * Phalcon\Html\Helper\Img
 *
 * Creates am img tag
 */
class Img extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param array  $attributes Any additional attributes
     *
     * @throws Exception
     * @param string $src
     * @param array $attributes
     * @return string
     */
    public function __invoke(string $src, array $attributes = array()): string {}

}
