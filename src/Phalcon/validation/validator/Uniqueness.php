<?php

namespace Phalcon\Validation\Validator;

/**
 * Check that a field is unique in the related table
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "username",
 *     new UniquenessValidator(
 *         [
 *             "model"   => new Users(),
 *             "message" => ":field must be unique",
 *         ]
 *     )
 * );
 * ```
 *
 * Different attribute from the field:
 * ```php
 * $validator->add(
 *     "username",
 *     new UniquenessValidator(
 *         [
 *             "model"     => new Users(),
 *             "attribute" => "nick",
 *         ]
 *     )
 * );
 * ```
 *
 * In model:
 * ```php
 * $validator->add(
 *     "username",
 *     new UniquenessValidator()
 * );
 * ```
 *
 * Combination of fields in model:
 * ```php
 * $validator->add(
 *     [
 *         "firstName",
 *         "lastName",
 *     ],
 *     new UniquenessValidator()
 * );
 * ```
 *
 * It is possible to convert values before validation. This is useful in
 * situations where values need to be converted to do the database lookup:
 *
 * ```php
 * $validator->add(
 *     "username",
 *     new UniquenessValidator(
 *         [
 *             "convert" => function (array $values) {
 *                 $values["username"] = strtolower($values["username"]);
 *
 *                 return $values;
 *             }
 *         ]
 *     )
 * );
 * ```
 */
class Uniqueness extends \Phalcon\Validation\AbstractCombinedFieldsValidator
{

    protected $template = 'Field :field must be unique';


    private $columnMap = null;


    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field): bool {}

    /**
     * The column map is used in the case to get real column name
     *
     * @param mixed $record
     * @param string $field
     * @return string
     */
    protected function getColumnNameReal($record, string $field): string {}

    /**
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    protected function isUniqueness(\Phalcon\Validation $validation, $field): bool {}

    /**
     * Uniqueness method used for collection
     *
     * @param mixed $record
     * @param array $field
     * @param array $values
     */
    protected function isUniquenessCollection($record, array $field, array $values) {}

    /**
     * Uniqueness method used for model
     *
     * @param mixed $record
     * @param array $field
     * @param array $values
     */
    protected function isUniquenessModel($record, array $field, array $values) {}

}
