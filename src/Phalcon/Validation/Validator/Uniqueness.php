<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Validation\Validator;

use Phalcon\Validation\AbstractCombinedFieldsValidator;

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
class Uniqueness extends AbstractCombinedFieldsValidator
{

    protected $template = 'Field :field must be unique';


    private $columnMap = null;


    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'allowEmpty' => false,
     *     'convert' => null,
     *     'model' => null,
     *     'except' => null
     * ]
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * The column map is used in the case to get real column name
     *
     * @param mixed $record
     * @param string $field
     * @return string
     */
    protected function getColumnNameReal($record, string $field): string
    {
    }

    /**
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    protected function isUniqueness(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * Uniqueness method used for model
     *
     * @param mixed $record
     * @param array $field
     * @param array $values
     */
    protected function isUniquenessModel($record, array $field, array $values)
    {
    }
}
