<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter;

use Phalcon\Contracts\Filter\FilterTypes;
use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Exception as DiException;
use Phalcon\Di\Injectable;
use Phalcon\Filter\FilterInterface;
use Phalcon\Filter\Validation\AbstractCombinedFieldsValidator;
use Phalcon\Filter\Validation\Exception as ValidationException;
use Phalcon\Filter\Validation\Exceptions\FilterServiceUnavailable;
use Phalcon\Filter\Validation\Exceptions\InvalidFieldType;
use Phalcon\Filter\Validation\Exceptions\InvalidFilterService;
use Phalcon\Filter\Validation\Exceptions\InvalidValidationData;
use Phalcon\Filter\Validation\Exceptions\InvalidValidator;
use Phalcon\Filter\Validation\Exceptions\InvalidValidatorScope;
use Phalcon\Filter\Validation\Exceptions\NoDataToValidate;
use Phalcon\Filter\Validation\Exceptions\NoValidators;
use Phalcon\Filter\Validation\Exceptions\ValidationEntityNotObject;
use Phalcon\Filter\Validation\ValidationInterface;
use Phalcon\Filter\Validation\ValidatorInterface;
use Phalcon\Messages\MessageInterface;
use Phalcon\Messages\Messages;

/**
 * Allows to validate data using custom or built-in validators
 *
 * @phpstan-import-type filter_sanitizers from FilterTypes
 * @phpstan-import-type filter_validation_combined_validators from FilterTypes
 * @phpstan-import-type filter_validation_data from FilterTypes
 * @phpstan-import-type filter_validation_default_messages from FilterTypes
 * @phpstan-import-type filter_validation_filters from FilterTypes
 * @phpstan-import-type filter_validation_labels from FilterTypes
 * @phpstan-import-type filter_validation_validators from FilterTypes
 * @phpstan-import-type filter_validation_values from FilterTypes
 * @phpstan-import-type filter_validation_whitelist from FilterTypes
 * @phpstan-import-type filter_validators from FilterTypes
 */
class Validation extends Injectable implements \Phalcon\Filter\Validation\ValidationInterface
{
    /**
     * Default messages for validators, keyed by validator class name
     *
     * Declared without an array initializer on purpose: an initialized static
     * array makes Zephir emit a zephir_init_static_properties() function that
     * fails to compile in the single-file build. It is null until first set
     * and treated as an empty array by the accessors below.
     *
     * @phpstan-var filter_validation_default_messages
     */
    protected static $defaultMessages = [];

    /**
     * @phpstan-var filter_validation_combined_validators
     */
    protected array $combinedFieldsValidators = [];

    /**
     * @phpstan-var filter_validation_data
     */
    protected $data;

    /**
     * @var object|null
     */
    protected $entity = null;

    /**
     * @phpstan-var filter_validation_filters
     */
    protected array $filters = [];

    /**
     * @phpstan-var filter_validation_labels
     */
    protected array $labels = [];

    protected \Phalcon\Messages\Messages $messages;

    /**
     * List of validators
     *
     * @phpstan-var filter_validation_validators
     */
    protected array $validators = [];

    /**
     * Calculated values
     *
     * @phpstan-var filter_validation_values
     */
    protected array $values = [];

    /**
     * @phpstan-var filter_validation_whitelist
     */
    protected array $whitelist = [];

    /**
     * Phalcon\Filter\Validation constructor
     *
     * @phpstan-param filter_validation_validators $validators
     * @param array $validators
     */
    public function __construct(array $validators = [])
    {
    }

    /**
     * Returns the default message registered for a validator class, or an
     * empty string when none has been registered.
     *
     * @param string $validatorClassName
     * @return string
     */
    public static function getDefaultMessage(string $validatorClassName): string
    {
    }

    /**
     * Registers default messages for validators, keyed by validator class
     * name. A registered default is used when a validator does not define its
     * own message; a message set on the validator instance still wins. Calls
     * are merged, so defaults can be registered incrementally.
     *
     * @phpstan-param filter_validation_default_messages $messages
     *
     * @phpstan-return filter_validation_default_messages
     * @param array $messages
     * @return array
     */
    public static function setDefaultMessages(array $messages = []): array
    {
    }

    /**
     * Adds a validator to a field
     *
     * @param array|string $field
     *
     * @phpstan-param mixed $field
     *
     * @phpstan-return static
     * @throws ValidationException
     * @param \Phalcon\Filter\Validation\ValidatorInterface $validator
     * @return static
     */
    public function add($field, \Phalcon\Filter\Validation\ValidatorInterface $validator): static
    {
    }

    /**
     * Appends a message to the messages list
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return static
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): static
    {
    }

    /**
     * Assigns the data to an entity
     * The entity is used to obtain the validation values
     *
     * ```php
     * $entity = new Author();
     * $fields = ['name', 'email', 'imageUrl'];
     * $validation = new AuthorValidation();
     * $validation->bind($entity, $_POST, $fields);
     * $validation->validate();
     * ```
     *
     * @param object $entity
     *
     * @phpstan-param mixed                       $entity
     * @phpstan-param filter_validation_data      $data
     * @phpstan-param filter_validation_whitelist $whitelist
     * @param mixed $data
     * @param array $whitelist
     * @return static
     */
    public function bind($entity, $data, array $whitelist = []): static
    {
    }

    /**
     * Verify if validation fails by verifying if there are messages in the current validation
     *
     * @return bool
     */
    public function fails(): bool
    {
    }

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
    }

    /**
     * Returns the bound entity
     *
     * @return object
     *
     * @phpstan-return object|null
     */
    public function getEntity(): mixed
    {
    }

    /**
     * Returns all the filters or a specific one
     *
     * @param string|null $field
     * @return mixed|null
     */
    public function getFilters(?string $field = null): mixed
    {
    }

    /**
     * Get label for field
     *
     * @param array|string $field
     *
     * @phpstan-param mixed $field
     * @return string
     */
    public function getLabel($field): string
    {
    }

    /**
     * Returns the registered validators
     *
     * @return Messages
     */
    public function getMessages(): Messages
    {
    }

    /**
     * Returns the validators added to the validation
     *
     * @phpstan-return filter_validation_validators
     * @return array
     */
    public function getValidators(): array
    {
    }

    /**
     * Gets the value to validate in the array/object data source
     *
     * @throws ValidationException
     * @throws DiException
     * @param string $field
     * @return mixed|null
     */
    public function getValue(string $field): mixed
    {
    }

    /**
     * Gets the value to validate in the array/object data source
     *
     * @param mixed $data
     * @param string $field
     * @return mixed|null
     */
    public function getValueByData($data, string $field): mixed
    {
    }

    /**
     * Gets the value to validate in the object entity source
     *
     * @param mixed $entity
     * @param string $field
     * @return mixed|null
     */
    public function getValueByEntity($entity, string $field): mixed
    {
    }

    /**
     * Alias of `add` method
     *
     * @param array|string $field
     *
     * @phpstan-param mixed $field
     *
     * @todo remove this
     * @param \Phalcon\Filter\Validation\ValidatorInterface $validator
     * @return static
     */
    public function rule($field, \Phalcon\Filter\Validation\ValidatorInterface $validator): static
    {
    }

    /**
     * Adds the validators to a field
     *
     * @phpstan-param filter_validators $validators
     * @param mixed $field
     * @param array $validators
     * @return static
     */
    public function rules($field, array $validators): static
    {
    }

    /**
     * Sets the bound entity
     *
     * @param object $entity
     * @return void
     */
    public function setEntity($entity): void
    {
    }

    /**
     * Adds filters to the field
     *
     * @param array|string $field
     * @param array|string $filters
     *
     * @phpstan-param mixed $field
     * @phpstan-param mixed $filters
     * @return static
     */
    public function setFilters($field, $filters): static
    {
    }

    /**
     * Adds labels for fields
     *
     * @phpstan-param filter_validation_labels $labels
     * @param array $labels
     * @return void
     */
    public function setLabels(array $labels): void
    {
    }

    /**
     * Sets the validator array
     *
     * @phpstan-param filter_validation_validators $validators
     * @param array $validators
     * @return static
     */
    public function setValidators(array $validators): static
    {
    }

    /**
     * Validate a set of data according to a set of rules
     *
     * You can use $validation->bind(entity, data, whitelist)->validate()
     * When you use bind(), the this->data is already set, so you can reuse it here
     *
     * ```php
     * // using bind() with $whitelist fields
     * $entity = new Author();
     * $fields = ['name', 'email', 'imageUrl'];
     * $validation = new AuthorValidation();
     * $validation->bind($entity, $_POST, $fields);
     * $validation->validate();
     *
     * // directly using validate
     * $validation = new AuthorValidation();
     * $validation->validate($_POST, $entity, $fields);
     * ```
     *
     * @param array|object $data
     *
     * @phpstan-param mixed $data
     * @phpstan-param object $entity
     * @phpstan-param filter_validation_whitelist $whitelist
     *
     * @return false|Messages
     * @param mixed $entity
     * @param array $whitelist
     */
    public function validate($data = null, $entity = null, array $whitelist = []): Messages|bool
    {
    }

    /**
     * Internal validations, if it returns true, then skip the current validator
     *
     * @param array|string $field
     * @param ValidatorInterface $validator
     *
     * @phpstan-param mixed $field
     * @return bool
     */
    protected function preChecking($field, \Phalcon\Filter\Validation\ValidatorInterface $validator): bool
    {
    }
}
