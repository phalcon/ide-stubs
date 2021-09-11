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
 * Class Link
 */
class Link extends \Phalcon\Html\Helper\AbstractSeries
{

    /**
     * Add an element to the list
     *
     * @param string $rel
     * @param string $href
     *
     * @return Link
     */
    public function add(string $rel, string $href): Link
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }
}
