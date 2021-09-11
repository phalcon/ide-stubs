<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Phalcon\Collection;

/**
 * This class helps to work with HTML Attributes
 */
class Attributes extends Collection implements \Phalcon\Html\Attributes\RenderInterface
{

    /**
     * Render attributes as HTML attributes
     *
     * @return string
     */
    public function render(): string
    {
    }

    /**
     * Alias of the render method
     *
     * @return string
     */
    public function __toString(): string
    {
    }
}
