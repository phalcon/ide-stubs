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
 * Class Meta
 */
class Meta extends \Phalcon\Html\Helper\AbstractSeries
{
    /**
     * Add an element to the list
     *
     * @param array $attributes
     *
     * @return Meta
     */
    public function add(array $attributes = []): Meta
    {
    }

    /**
     * @param string $httpEquiv
     * @param string $content
     *
     * @return Meta
     * @throws Exception
     */
    public function addHttp(string $httpEquiv, string $content): Meta
    {
    }

    /**
     * @param string $name
     * @param string $content
     *
     * @return Meta
     * @throws Exception
     */
    public function addName(string $name, string $content): Meta
    {
    }

    /**
     * @param string $name
     * @param string $content
     *
     * @return Meta
     * @throws Exception
     */
    public function addProperty(string $name, string $content): Meta
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }

    /**
     * @param string $element
     * @param string $value
     * @param string $content
     *
     * @return Meta
     * @throws Exception
     */
    private function addElement(string $element, string $value, string $content): Meta
    {
    }
}
