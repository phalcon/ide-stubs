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
     * @return static
     * @param int $position
     */
    public function add(array $attributes = [], int $position = -1): static
    {
    }

    /**
     * @param string $httpEquiv
     * @param string $content
     * @param int    $position
     *
     * @return static
     * @throws Exception
     */
    public function addHttp(string $httpEquiv, string $content, int $position = -1): static
    {
    }

    /**
     * @param string $name
     * @param string $content
     * @param int    $position
     *
     * @return static
     * @throws Exception
     */
    public function addName(string $name, string $content, int $position = -1): static
    {
    }

    /**
     * @param string $name
     * @param string $content
     * @param int    $position
     *
     * @return static
     * @throws Exception
     */
    public function addProperty(string $name, string $content, int $position = -1): static
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
     * @param int    $position
     *
     * @return static
     * @throws Exception
     */
    private function addElement(string $element, string $value, string $content, int $position = -1): static
    {
    }
}
