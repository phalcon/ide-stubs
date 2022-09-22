<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

/**
 * Class Ol
 */
class Ol extends \Phalcon\Html\Helper\AbstractList
{
    /**
     * Add an element to the list
     *
     * @param string $text
     * @param array  $attributes
     * @param bool   $raw
     *
     * @return AbstractList
     */
    public function add(string $text, array $attributes = [], bool $raw = false): AbstractList
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }
}
