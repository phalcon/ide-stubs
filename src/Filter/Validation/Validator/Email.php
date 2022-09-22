<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator;

use Phalcon\Messages\Message;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractValidator;

/**
 * Checks if a value has a correct e-mail format
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\Email as EmailValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "email",
 *     new EmailValidator(
 *         [
 *             "message" => "The e-mail is not valid",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "email",
 *         "anotherEmail",
 *     ],
 *     new EmailValidator(
 *         [
 *             "message" => [
 *                 "email"        => "The e-mail is not valid",
 *                 "anotherEmail" => "The another e-mail is not valid",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class Email extends AbstractValidator
{
    protected $template = 'Field :field must be an email address';

    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'allowEmpty' => false
     * ]
     */
    public function __construct(array $options = [])
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
}
