<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation;

use Phalcon\Messages\Message;
use Phalcon\Filter\Validation;
use Phalcon\Support\Helper\Arr\Whitelist;

/**
 * This is a base class for validators
 */
abstract class AbstractValidator implements \Phalcon\Filter\Validation\ValidatorInterface
{
    /**
     * Message template
     *
     * @var string|null
     */
    protected $template = null;

    /**
     * Message templates
     *
     * @var array
     */
    protected $templates = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * Phalcon\Filter\Validation\Validator constructor
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Returns an option in the validator's options
     * Returns null if the option hasn't set
     *
     * @param string     $key
     * @param mixed|null $defaultValue
     *
     * @return mixed
     */
    public function getOption(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Get the template message
     *
     * @param string|null $field
     *
     * @return string
     */
    public function getTemplate(string $field = null): string
    {
    }

    /**
     * Get templates collection object
     *
     * @return array
     */
    public function getTemplates(): array
    {
    }

    /**
     * Checks if an option is defined
     *
     * @param string $key
     *
     * @return bool
     */
    public function hasOption(string $key): bool
    {
    }

    /**
     * Create a default message by factory
     *
     * @param Validation   $validation
     * @param array|string $field
     * @param array        $replacements
     *
     * @return Message
     */
    public function messageFactory(\Phalcon\Filter\Validation $validation, $field, array $replacements = []): Message
    {
    }

    /**
     * Sets an option in the validator
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    public function setOption(string $key, $value): void
    {
    }

    /**
     * Set a new template message
     *
     * @return ValidatorInterface
     * @param string $template
     */
    public function setTemplate(string $template): ValidatorInterface
    {
    }

    /**
     * Clear current templates and set new from an array,
     *
     * @return ValidatorInterface
     * @param array $templates
     */
    public function setTemplates(array $templates): ValidatorInterface
    {
    }

    /**
     * Executes the validation
     *
     * @param Validation $validation
     * @param mixed      $field
     *
     * @return bool
     */
    abstract public function validate(\Phalcon\Filter\Validation $validation, $field): bool;

    /**
     * Checks if field can be empty.
     *
     * @param mixed $field
     * @param mixed $value
     *
     * @return bool
     */
    protected function allowEmpty($field, $value): bool
    {
    }

    /**
     * Checks if a value is an array and returns the element based on the
     * passed field name
     *
     * @param mixed  $value
     * @param string $field
     *
     * @return mixed
     */
    protected function checkArray($value, string $field): mixed
    {
    }

    /**
     * Prepares a validation code.
     *
     * @param string $field
     *
     * @return int
     */
    protected function prepareCode(string $field): int
    {
    }

    /**
     * Prepares a label for the field.
     *
     * @param Validation $validation
     * @param string     $field
     *
     * @return mixed
     */
    protected function prepareLabel(\Phalcon\Filter\Validation $validation, string $field): mixed
    {
    }
}
