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
 * Class Script
 */
class Script extends \Phalcon\Html\Helper\AbstractSeries
{
    /**
     * Add an element to the list
     *
     * @param string $url
     * @param array  $attributes
     *
     * @return $this
     * @throws Exception
     */
    public function add(string $url, array $attributes = [])
    {
    }

    /**
     * Returns the necessary attributes
     *
     * @param string $url
     * @param array  $attributes
     *
     * @return array
     */
    protected function getAttributes(string $url, array $attributes): array
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }
}
