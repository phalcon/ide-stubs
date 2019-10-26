<?php

namespace Phalcon\Assets\Filters;

/**
 * Minify the css - removes comments removes newlines and line feeds keeping
 * removes last semicolon from last property
 */
class Cssmin implements \Phalcon\Assets\FilterInterface
{

    /**
     * Filters the content using CSSMIN
     * NOTE: This functionality is not currently available
     *
     * @param string $content
     * @return string
     */
    public function filter(string $content): string
    {
    }
}
