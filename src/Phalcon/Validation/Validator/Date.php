<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Validation\Validator;

use Phalcon\Validation\AbstractValidator;

/**
 * Checks if a value is a valid date
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\Date as DateValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "date",
 *     new DateValidator(
 *         [
 *             "format"  => "d-m-Y",
 *             "message" => "The date is invalid",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "date",
 *         "anotherDate",
 *     ],
 *     new DateValidator(
 *         [
 *             "format" => [
 *                 "date"        => "d-m-Y",
 *                 "anotherDate" => "Y-m-d",
 *             ],
 *             "message" => [
 *                 "date"        => "The date is invalid",
 *                 "anotherDate" => "The another date is invalid",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class Date extends AbstractValidator
{

    protected $template = 'Field :field is not a valid date';


    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'format' => 'Y-m-d',
     *     'allowEmpty' => false
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
     * @param mixed $value
     * @param mixed $format
     * @return bool
     */
    private function checkDate($value, $format): bool
    {
    }
}
