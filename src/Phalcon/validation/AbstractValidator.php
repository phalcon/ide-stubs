<?php

namespace Phalcon\Validation;

/**
 * This is a base class for validators
 */
abstract class AbstractValidator implements \Phalcon\Validation\ValidatorInterface
{
    /**
     * Message template
     *
     * @var string|null
     */
    protected $template;

    /**
     * Message templates
     *
     * @var array
     */
    protected $templates = array();


    protected $options;


    /**
     * Phalcon\Validation\Validator constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array()) {}

    /**
     * Get the template message
     *
     * @throw InvalidArgumentException When the field does not exists
     * @param string $field
     * @return string
     */
    public function getTemplate(string $field = null): string {}

    /**
     * Get templates collection object
     *
     * @return array
     */
    public function getTemplates(): array {}

    /**
     * Clear current templates and set new from an array,
     *
     * @param array $templates
     * @return \Phalcon\Validation\ValidatorInterface
     */
    public function setTemplates(array $templates): ValidatorInterface {}

    /**
     * Set a new template message
     *
     * @param string $template
     * @return \Phalcon\Validation\ValidatorInterface
     */
    public function setTemplate(string $template): ValidatorInterface {}

    /**
     * Returns an option in the validator's options
     * Returns null if the option hasn't set
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getOption(string $key, $defaultValue = null) {}

    /**
     * Checks if an option is defined
     *
     * @param string $key
     * @return bool
     */
    public function hasOption(string $key): bool {}

    /**
     * Sets an option in the validator
     *
     * @param string $key
     * @param mixed $value
     */
    public function setOption(string $key, $value) {}

    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    abstract public function validate(\Phalcon\Validation $validation, $field): bool;

    /**
     * Prepares a validation code.
     *
     * @param string $field
     * @return int|null
     */
    protected function prepareCode(string $field): ?int {}

    /**
     * Prepares a label for the field.
     *
     * @param \Phalcon\Validation $validation
     * @param string $field
     * @return mixed
     */
    protected function prepareLabel(\Phalcon\Validation $validation, string $field) {}

    /**
     * Create a default message by factory
     *
     * @return Message
     *
     * @throw Exception
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @param array $replacements
     * @return \Phalcon\Messages\Message
     */
    public function messageFactory(\Phalcon\Validation $validation, $field, array $replacements = array()): Message {}

}
