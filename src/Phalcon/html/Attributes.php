<?php

namespace Phalcon\Html;

/**
 * This class helps to work with HTML Attributes
 */
class Attributes extends \Phalcon\Collection implements \Phalcon\Html\Attributes\RenderInterface
{

    /**
     * Render attributes as HTML attributes
     *
     * @return string
     */
    public function render(): string {}

    /**
     * Alias of the render method
     *
     * @return string
     */
    public function __toString(): string {}

}
