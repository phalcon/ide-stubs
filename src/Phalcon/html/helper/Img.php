<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;

/**
 * Phalcon\Html\Helper\Img
 *
 * Creates am img tag
 */
class Img extends \Phalcon\Html\Helper\AbstractHelper
{

    /**
     * @param string $src
     * @param array $attributes Any additional attributes
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $src, array $attributes = array()): string
    {
    }
}
