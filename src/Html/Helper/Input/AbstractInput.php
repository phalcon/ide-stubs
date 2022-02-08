<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Html\Helper\AbstractHelper;

/**
 * Class AbstractInput
 *
 * @property array  $attributes
 * @property string $type
 * @property string $value
 */
abstract class AbstractInput extends AbstractHelper
{
    /**
     * @var string
     */
    protected $type = 'text';

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @param string      $name
     * @param string|null $value
     * @param array       $attributes
     *
     * @return AbstractInput
     */
    public function __invoke(string $name, string $value = null, array $attributes = []): AbstractInput
    {
    }

    /**
     * Returns the HTML for the input.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * Sets the value of the element
     *
     * @param string|null $value
     *
     * @return AbstractInput
     */
    public function setValue(string $value = null): AbstractInput
    {
    }
}
