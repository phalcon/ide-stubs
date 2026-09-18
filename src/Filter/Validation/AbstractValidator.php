<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation;

use Phalcon\Contracts\Filter\FilterTypes;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\Exceptions\FieldNotPrintable;
use Phalcon\Messages\Message;
use Phalcon\Support\Helper\Arr\Whitelist;

/**
 * This is a base class for validators
 *
 * @phpstan-import-type filter_validator_options from FilterTypes
 * @phpstan-import-type filter_validator_replacements from FilterTypes
 * @phpstan-import-type filter_validator_templates from FilterTypes
 */
abstract class AbstractValidator implements \Phalcon\Filter\Validation\ValidatorInterface
{
    /**
     * @phpstan-var filter_validator_options
     */
    protected array $options = [];

    /**
     * Message template
     *
     * @var string|null
     */
    protected $template = null;

    /**
     * Whether the template/message has been explicitly assigned on the
     * instance (constructor `message`/`template` option or setTemplate()).
     * While false, `template` still holds the validator's class default and a
     * global default registered via Validation::setDefaultMessages() applies.
     */
    protected bool $templateChanged = false;

    /**
     * Message templates
     *
     * @phpstan-var filter_validator_templates
     */
    protected array $templates = [];

    /**
     * Phalcon\Filter\Validation\Validator constructor
     *
     * @param array $options
     *
     * @phpstan-param filter_validator_options $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Returns an option in the validator's options
     * Returns null if the option hasn't set
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getOption(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Get the template message
     *
     * @param string|null $field
     * @return string
     */
    public function getTemplate(?string $field = null): string
    {
    }

    /**
     * Get templates collection object
     *
     * @phpstan-return filter_validator_templates
     * @return array
     */
    public function getTemplates(): array
    {
    }

    /**
     * Checks if an option is defined
     *
     * @param string $key
     * @return bool
     */
    public function hasOption(string $key): bool
    {
    }

    /**
     * Checks whether the field can be considered empty and therefore
     * skipped, honoring the `allowEmpty` option (boolean flag, list of
     * empty values, or per-field map).
     *
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return bool
     */
    public function isAllowEmpty(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Create a default message by factory
     *
     * @param array|string $field
     *
     * @phpstan-param mixed                         $field
     * @phpstan-param filter_validator_replacements $replacements
     * @param \Phalcon\Filter\Validation $validation
     * @param array $replacements
     * @return Message
     */
    public function messageFactory(\Phalcon\Filter\Validation $validation, $field, array $replacements = []): Message
    {
    }

    /**
     * Sets an option in the validator
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function setOption(string $key, $value): void
    {
    }

    /**
     * Set a new template message
     *
     * @param string $template
     * @return ValidatorInterface
     */
    public function setTemplate(string $template): ValidatorInterface
    {
    }

    /**
     * Clear current templates and set new from an array,
     *
     * @phpstan-param filter_validator_templates $templates
     * @param array $templates
     * @return ValidatorInterface
     */
    public function setTemplates(array $templates): ValidatorInterface
    {
    }

    /**
     * Executes the validation
     *
     * @param \Phalcon\Filter\Validation $validation
     * @param mixed $field
     * @return bool
     */
    abstract public function validate(\Phalcon\Filter\Validation $validation, $field): bool;

    /**
     * Checks if field can be empty.
     *
     * @param mixed $field
     * @param mixed $value
     * @return bool
     */
    protected function allowEmpty($field, $value): bool
    {
    }

    /**
     * Checks if a value is an array and returns the element based on the
     * passed field name
     *
     * @param mixed $value
     * @param string $field
     * @return mixed
     */
    protected function checkArray($value, string $field): mixed
    {
    }

    /**
     * Prepares a validation code.
     *
     * @param string $field
     * @return int
     */
    protected function prepareCode(string $field): int
    {
    }

    /**
     * Prepares a label for the field.
     *
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return mixed
     */
    protected function prepareLabel(\Phalcon\Filter\Validation $validation, string $field): mixed
    {
    }

    /**
     * Rejects a value that cannot be a string: an array, or an object without
     * __toString(). A cast would turn an array into the constant "Array",
     * which satisfies the string checks. Appends the message and returns
     * true when the value is rejected.
     *
     * @phpstan-assert-if-false string|int|float|bool|Stringable|null $value
     * @param \Phalcon\Filter\Validation $validation
     * @param mixed $field
     * @param mixed $value
     * @return bool
     */
    protected function rejectNonStringable(\Phalcon\Filter\Validation $validation, $field, $value): bool
    {
    }
}
