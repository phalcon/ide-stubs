<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets\Inline;

/**
 * Represents an inlined CSS
 */
class Css extends \Phalcon\Assets\Inline
{

    /**
     * Phalcon\Assets\Inline\Css constructor
     *
     * @param string $content
     * @param bool $filter
     * @param mixed $attributes
     */
    public function __construct(string $content, bool $filter = true, $attributes = null)
    {
    }
}
