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
 * Validates that a value is not null or empty string
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\PresenceOf;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "name",
 *     new PresenceOf(
 *         [
 *             "message" => "The name is required",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "name",
 *         "email",
 *     ],
 *     new PresenceOf(
 *         [
 *             "message" => [
 *                 "name"  => "The name is required",
 *                 "email" => "The email is required",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class PresenceOf extends AbstractValidator
{

    protected $template = 'Field :field is required';


    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
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
}
