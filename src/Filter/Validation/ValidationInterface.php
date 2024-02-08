<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation;

use Phalcon\Di\Injectable;
use Phalcon\Messages\MessageInterface;
use Phalcon\Messages\Messages;

/**
 * Interface for the Phalcon\Filter\Validation component
 */
interface ValidationInterface
{
    /**
     * Adds a validator to a field
     *
     * @param string|array       $field
     * @param ValidatorInterface $validator
     * @return ValidationInterface
     */
    public function add($field, ValidatorInterface $validator): ValidationInterface;

    /**
     * Appends a message to the messages list
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return ValidationInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ValidationInterface;

    /**
     * Assigns the data to an entity
     * The entity is used to obtain the validation values
     *
     * @param object $entity
     * @param array|object $data
     * @return ValidationInterface
     */
    public function bind($entity, $data): ValidationInterface;

    /**
     * Returns the bound entity
     *
     * @return object
     */
    public function getEntity(): mixed;

    /**
     * Returns all the filters or a specific one
     *
     * @param string $field
     * @return mixed|null
     */
    public function getFilters(string $field = null): mixed;

    /**
     * Get label for field
     *
     * @param string $field
     * @return string
     */
    public function getLabel(string $field): string;

    /**
     * Returns the registered validators
     *
     * @return Messages
     */
    public function getMessages(): Messages;

    /**
     * Returns the validators added to the validation
     *
     * @return array
     */
    public function getValidators(): array;

    /**
     * Gets the a value to validate in the array/object data source
     *
     * @param string $field
     * @return mixed|null
     */
    public function getValue(string $field): mixed;

    /**
     * Alias of `add` method
     *
     * @param string|array       $field
     * @param ValidatorInterface $validator
     * @return ValidationInterface
     */
    public function rule($field, ValidatorInterface $validator): ValidationInterface;

    /**
     * Adds the validators to a field
     *
     * @param string $field
     * @param array $validators
     * @return ValidationInterface
     */
    public function rules(string $field, array $validators): ValidationInterface;

    /**
     * Adds filters to the field
     *
     * @param array|string $filters
     * @param string $field
     * @return ValidationInterface
     */
    public function setFilters(string $field, $filters): ValidationInterface;

    /**
     * Adds labels for fields
     *
     * @param array $labels
     * @return void
     */
    public function setLabels(array $labels): void;

    /**
     * Validate a set of data according to a set of rules
     *
     * @param array|object $data
     * @param object $entity
     * @return Messages|false
     */
    public function validate($data = null, $entity = null): Messages|bool;
}
