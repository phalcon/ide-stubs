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
 * Class AbstractList
 */
abstract class AbstractList extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string
     */
    protected $elementTag = 'li';

    /**
     * @var array
     */
    protected $store = [];

    /**
     * @param string $indent
     * @param string $delimiter
     * @param array  $attributes
     *
     * @return AbstractList
     */
    public function __invoke(string $indent = '    ', string $delimiter = null, array $attributes = []): AbstractList
    {
    }

    /**
     * Generates and returns the HTML for the list.
     *
     * @return string
     * @throws Exception
     */
    public function __toString()
    {
    }

    /**
     *
     * Returns the tag name.
     *
     * @return string
     *
     */
    abstract protected function getTag(): string;
}
