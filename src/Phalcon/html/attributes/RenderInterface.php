<?php

namespace Phalcon\Html\Attributes;

/**
 * Phalcon\Html\Attributes\RenderInterface
 *
 * Interface Phalcon\Html\Attributes\RenderInterface
 */
interface RenderInterface
{

    /**
     * Generate a string represetation
     *
     * @return string
     */
    public function render(): string;
}
