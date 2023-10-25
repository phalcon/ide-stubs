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
 * @property array $attributes
 * @property array $store
 */
abstract class AbstractSeries extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $store = [];

    /**
     * @param string $indent
     * @param string $delimiter
     *
     * @return AbstractSeries
     */
    public function __invoke(string $indent = '    ', string $delimiter = null): AbstractSeries
    {
    }

    /**
     * Generates and returns the HTML for the list.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * Resets the internal store.
     *
     * @return AbstractSeries
     */
    public function reset(): AbstractSeries
    {
    }

    /**
     * Returns the tag name.
     *
     * @return string
     */
    abstract protected function getTag(): string;
}
