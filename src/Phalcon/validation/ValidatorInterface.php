<?php

namespace Phalcon\Validation;

/**
 * Interface for Phalcon\Validation\AbstractValidator
 */
interface ValidatorInterface
{

    /**
     * Returns an option in the validator's options
     * Returns null if the option hasn't set
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getOption(string $key, $defaultValue = null);

    /**
     * Checks if an option is defined
     *
     * @param string $key
     * @return boolean
     */
    public function hasOption(string $key): bool;

    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return boolean
     */
    public function validate(\Phalcon\Validation $validation, $field): bool;

    /**
     * Get the template message
     *
     * @param string $field
     * @return string
     * @throw InvalidArgumentException When the field does not exists
     */
    public function getTemplate(string $field): string;

    /**
     * Get message templates
     *
     * @return array
     */
    public function getTemplates(): array;

    /**
     * Clear current template and set new from an array,
     *
     * @param array $templates
     * @return ValidatorInterface
     */
    public function setTemplates(array $templates): ValidatorInterface;

    /**
     * Set a new temlate message
     *
     * @param string $template
     * @return ValidatorInterface
     */
    public function setTemplate(string $template): ValidatorInterface;
}
