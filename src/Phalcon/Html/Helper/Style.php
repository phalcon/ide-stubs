<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;

/**
 * Class Style
 */
class Style extends \Phalcon\Html\Helper\AbstractSeries
{

    /**
     * Add an element to the list
     *
     * @param string $href
     * @param array  $attributes
     *
     * @return $this
     * @throws Exception
     */
    public function add(string $href, array $attributes = array())
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }

    /**
     * Returns the necessary attributes
     *
     * @param string $href
     * @param array  $attributes
     *
     * @return array
     */
    protected function getAttributes(string $href, array $attributes): array
    {
    }
}
