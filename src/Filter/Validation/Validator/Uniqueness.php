<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator;

use Phalcon\Contracts\Filter\FilterTypes;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractCombinedFieldsValidator;
use Phalcon\Filter\Validation\Exception;
use Phalcon\Filter\Validation\Exceptions\UniquenessConversionMustBeArray;
use Phalcon\Filter\Validation\Exceptions\UniquenessModelRequired;
use Phalcon\Filter\Validation\Exceptions\UniquenessOnlyForPhalconModel;
use Phalcon\Messages\Message;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Support\Settings;

/**
 * Check that a field is unique in the related table
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\Uniqueness as UniquenessValidator;
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
 *
 * @phpstan-import-type filter_uniqueness_column_map from FilterTypes
 * @phpstan-import-type filter_uniqueness_fields from FilterTypes
 * @phpstan-import-type filter_uniqueness_params from FilterTypes
 * @phpstan-import-type filter_uniqueness_values from FilterTypes
 * @phpstan-import-type filter_validator_options from FilterTypes
 */
class Uniqueness extends AbstractCombinedFieldsValidator
{
    /**
     * @var string|null
     */
    protected $template = 'Field :field must be unique';

    /**
     * @phpstan-var filter_uniqueness_column_map|null
     */
    private $columnMap = null;

    /**
     * Constructor
     *
     * @phpstan-param filter_validator_options $options
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Returns an option in the validator's options
     * Returns null if the option hasn't set
     *
     * The `attribute` option can be defined as an array when validating a
     * combination of fields; in that case resolve it to the mapped value.
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
     * Executes the validation
     *
     * @param \Phalcon\Filter\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Filter\Validation $validation, $field): bool
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
     * @param \Phalcon\Filter\Validation $validation
     * @param mixed $field
     * @return bool
     */
    protected function isUniqueness(\Phalcon\Filter\Validation $validation, $field): bool
    {
    }

    /**
     * Uniqueness method used for model
     *
     * @phpstan-param filter_uniqueness_fields $field
     * @phpstan-param filter_uniqueness_values $values
     *
     * @phpstan-return filter_uniqueness_params
     * @param mixed $record
     * @param array $field
     * @param array $values
     */
    protected function isUniquenessModel($record, array $field, array $values)
    {
    }
}
