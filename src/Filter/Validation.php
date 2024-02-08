<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter;

use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Filter\FilterInterface;
use Phalcon\Messages\MessageInterface;
use Phalcon\Messages\Messages;
use Phalcon\Filter\Validation\ValidationInterface;
use Phalcon\Filter\Validation\Exception;
use Phalcon\Filter\Validation\ValidatorInterface;
use Phalcon\Filter\Validation\AbstractCombinedFieldsValidator;

/**
 * Allows to validate data using custom or built-in validators
 */
class Validation extends Injectable implements \Phalcon\Filter\Validation\ValidationInterface
{
    /**
     * @var array
     */
    protected $combinedFieldsValidators = [];

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @var object|null
     */
    protected $entity = null;

    /**
     * @var array
     */
    protected $filters = [];

    /**
     * @var array
     */
    protected $labels = [];

    /**
     * @var Messages|null
     */
    protected $messages = null;

    /**
     * List of validators
     *
     * @var array
     */
    protected $validators = [];

    /**
     * Calculated values
     *
     * @var array
     */
    protected $values = [];

    /**
     * Phalcon\Filter\Validation constructor
     *
     * @param array $validators
     */
    public function __construct(array $validators = [])
    {
    }

    /**
     * Adds a validator to a field
     *
     * @param string|array       $field
     * @param ValidatorInterface $validator
     *
     * @return ValidationInterface
     */
    public function add($field, \Phalcon\Filter\Validation\ValidatorInterface $validator): ValidationInterface
    {
    }

    /**
     * Appends a message to the messages list
     *
     * @param MessageInterface $message
     * @return ValidationInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ValidationInterface
    {
    }

    /**
     * Assigns the data to an entity
     * The entity is used to obtain the validation values
     *
     * @param object $entity
     * @param array|object $data
     * @return ValidationInterface
     */
    public function bind($entity, $data): ValidationInterface
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
     */
    public function getEntity(): mixed
    {
    }

    /**
     * Returns all the filters or a specific one
     *
     * @param string $field
     * @return mixed|null
     */
    public function getFilters(string $field = null): mixed
    {
    }

    /**
     * Get label for field
     *
     * @param string $field
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
     * @return array
     */
    public function getValidators(): array
    {
    }

    /**
     * Gets the a value to validate in the object entity source
     *
     * @param mixed $entity
     * @param string $field
     * @return mixed|null
     */
    public function getValueByEntity($entity, string $field): mixed
    {
    }

    /**
     * Gets the a value to validate in the array/object data source
     *
     * @param mixed $data
     * @param string $field
     * @return mixed|null
     */
    public function getValueByData($data, string $field): mixed
    {
    }

    /**
     * Gets the a value to validate in the array/object data source
     *
     * @param string $field
     * @return mixed|null
     */
    public function getValue(string $field): mixed
    {
    }

    /**
     * Alias of `add` method
     *
     * @param string|array       $field
     * @param ValidatorInterface $validator
     *
     * @return ValidationInterface
     */
    public function rule($field, \Phalcon\Filter\Validation\ValidatorInterface $validator): ValidationInterface
    {
    }

    /**
     * Adds the validators to a field
     *
     * @param mixed $field
     * @param array $validators
     * @return ValidationInterface
     */
    public function rules($field, array $validators): ValidationInterface
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
     * @param string $field
     * @param array|string $filters
     * @return ValidationInterface
     */
    public function setFilters($field, $filters): ValidationInterface
    {
    }

    /**
     * Adds labels for fields
     *
     * @param array $labels
     * @return void
     */
    public function setLabels(array $labels): void
    {
    }

    /**
     * @param array $validators
     * @return Validation
     */
    public function setValidators(array $validators): Validation
    {
    }

    /**
     * Validate a set of data according to a set of rules
     *
     * @param array|object $data
     * @param object $entity
     * @return Messages|false
     */
    public function validate($data = null, $entity = null): Messages|bool
    {
    }

    /**
     * Internal validations, if it returns true, then skip the current validator
     *
     * @param array|string $field
     * @param ValidatorInterface $validator
     * @return bool
     */
    protected function preChecking($field, \Phalcon\Filter\Validation\ValidatorInterface $validator): bool
    {
    }
}
