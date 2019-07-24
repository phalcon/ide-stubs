<?php

namespace Phalcon\Assets\Filters;

/**
 * Deletes the characters which are insignificant to JavaScript. Comments will
 * be removed. Tabs will be replaced with spaces. Carriage returns will be
 * replaced with linefeeds. Most spaces and linefeeds will be removed.
 */
class Jsmin implements \Phalcon\Assets\FilterInterface
{

    /**
     * Filters the content using JSMIN
     * NOTE: This functionality is not currently available
     *
     * @param string $content
     * @return string
     */
    public function filter(string $content): string {}

}
