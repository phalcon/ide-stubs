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
     * @var bool
     */
    private $isStyle = false;

    /**
     * Add an element to the list
     *
     * @param string $url
     * @param array  $attributes
     *
     * @return static
     * @throws Exception
     * @param int $position
     */
    public function add(string $url, array $attributes = [], int $position = -1): static
    {
    }

    /**
     * Sets if this is a style or link tag
     *
     * @param bool $flag
     * @return static
     */
    public function setStyle(bool $flag): static
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
