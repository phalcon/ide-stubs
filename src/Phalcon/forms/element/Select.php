<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Forms\Element;

/**
 * Phalcon\Forms\Element\Select
 *
 * Component SELECT (choice) for forms
 */
class Select extends AbstractElement
{

    protected $optionsValues;


    /**
     * Phalcon\Forms\Element constructor
     *
     * @param string $name
     * @param object|array $options
     * @param array $attributes
     */
    public function __construct(string $name, $options = null, $attributes = null)
    {
    }

    /**
     * Adds an option to the current options
     *
     * @param array|string $option
     * @return Element
     */
    public function addOption($option): Element
    {
    }

    /**
     * Returns the choices' options
     *
     * @return array|object
     */
    public function getOptions()
    {
    }

    /**
     * Renders the element widget returning html
     *
     * @param array $attributes
     * @return string
     */
    public function render(array $attributes = array()): string
    {
    }

    /**
     * Set the choice's options
     *
     * @param array|object $options
     * @return Element
     */
    public function setOptions($options): Element
    {
    }
}
