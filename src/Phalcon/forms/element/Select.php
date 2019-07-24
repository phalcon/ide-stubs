<?php

namespace Phalcon\Forms\Element;

/**
 * Phalcon\Forms\Element\Select
 *
 * Component SELECT (choice) for forms
 */
class Select extends \Phalcon\Forms\Element\AbstractElement
{

    protected $optionsValues;


    /**
     * Phalcon\Forms\Element constructor
     *
     * @param string $name
     * @param object|array $options
     * @param array $attributes
     */
    public function __construct(string $name, $options = null, $attributes = null) {}

    /**
     * Adds an option to the current options
     *
     * @param array $option
     * @return Element
     */
    public function addOption($option): Element {}

    /**
     * Returns the choices' options
     *
     * @return array|object
     */
    public function getOptions() {}

    /**
     * Renders the element widget returning html
     *
     * @param array $attributes
     * @return string
     */
    public function render(array $attributes = array()): string {}

    /**
     * Set the choice's options
     *
     * @param array|object $options
     * @return Element
     */
    public function setOptions($options): Element {}

}
