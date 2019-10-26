<?php

namespace Phalcon\Assets\Filters;

/**
 * Returns the content without make any modification to the original source
 */
class None implements \Phalcon\Assets\FilterInterface
{

    /**
     * Returns the content as is
     *
     * @param string $content
     * @return string
     */
    public function filter(string $content): string
    {
    }
}
