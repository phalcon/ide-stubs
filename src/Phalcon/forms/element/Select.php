<?php

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
     * @param object|array $options
     * @param array $attributes
     * @param string $name
     */
    public function __construct(string $name, $options = null, $attributes = null)
    {
    }

    /**
     * Adds an option to the current options
     *
     * @param array|string $option
     * @return \Phalcon\Forms\Element\ElementInterface
     */
    public function addOption($option): ElementInterface
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
     * @return \Phalcon\Forms\Element\ElementInterface
     */
    public function setOptions($options): ElementInterface
    {
    }
}
