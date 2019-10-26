<?php

namespace Phalcon;

use Phalcon\Di\Injectable;
use Phalcon\Messages\Messages;
use Phalcon\Validation\ValidationInterface;

/**
 * Allows to validate data using custom or built-in validators
 */
class Validation extends Injectable implements \Phalcon\Validation\ValidationInterface
{

    protected $combinedFieldsValidators;


    protected $data;


    protected $entity;


    protected $filters = array();


    protected $labels = array();


    protected $messages;


    protected $validators;


    protected $values;


    public function getData()
    {
    }

    /**
     * @param mixed $validators
     */
    public function setValidators($validators)
    {
    }

    /**
     * Phalcon\Validation constructor
     *
     * @param array $validators
     */
    public function __construct(array $validators = array())
    {
    }

    /**
     * Adds a validator to a field
     *
     * @param mixed $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return \Phalcon\Validation\ValidationInterface
     */
    public function add($field, \Phalcon\Validation\ValidatorInterface $validator): ValidationInterface
    {
    }

    /**
     * Appends a message to the messages list
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return \Phalcon\Validation\ValidationInterface
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
     * @return \Phalcon\Validation\ValidationInterface
     */
    public function bind($entity, $data): ValidationInterface
    {
    }

    /**
     * Returns the bound entity
     *
     * @return object
     */
    public function getEntity()
    {
    }

    /**
     * Returns all the filters or a specific one
     *
     * @param string $field
     * @return mixed|null
     */
    public function getFilters(string $field = null)
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
     * @return \Phalcon\Messages\Messages
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
     * Gets the a value to validate in the array/object data source
     *
     * @param string $field
     * @return mixed|null
     */
    public function getValue(string $field)
    {
    }

    /**
     * Alias of `add` method
     *
     * @param mixed $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return \Phalcon\Validation\ValidationInterface
     */
    public function rule($field, \Phalcon\Validation\ValidatorInterface $validator): ValidationInterface
    {
    }

    /**
     * Adds the validators to a field
     *
     * @param mixed $field
     * @param array $validators
     * @return \Phalcon\Validation\ValidationInterface
     */
    public function rules($field, array $validators): ValidationInterface
    {
    }

    /**
     * Sets the bound entity
     *
     * @param object $entity
     */
    public function setEntity($entity)
    {
    }

    /**
     * Adds filters to the field
     *
     * @param string $field
     * @param array|string $filters
     * @return \Phalcon\Validation\ValidationInterface
     */
    public function setFilters($field, $filters): ValidationInterface
    {
    }

    /**
     * Adds labels for fields
     *
     * @param array $labels
     */
    public function setLabels(array $labels)
    {
    }

    /**
     * Validate a set of data according to a set of rules
     *
     * @param array|object $data
     * @param object $entity
     * @return \Phalcon\Messages\Messages
     */
    public function validate($data = null, $entity = null): Messages
    {
    }

    /**
     * Internal validations, if it returns true, then skip the current validator
     *
     * @param mixed $field
     * @param \Phalcon\Validation\ValidatorInterface $validator
     * @return bool
     */
    protected function preChecking($field, \Phalcon\Validation\ValidatorInterface $validator): bool
    {
    }
}
