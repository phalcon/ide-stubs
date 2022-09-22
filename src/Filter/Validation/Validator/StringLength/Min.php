<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator\StringLength;

use Phalcon\Messages\Message;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractValidator;
use Phalcon\Filter\Validation\Exception;

/**
 * Validates that a string has the specified minimum constraints
 * The test is passed if for a string's length L, min<=L, i.e. L must
 * be at least min.
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\StringLength\Min;
 *
 * $validator = new Validation();
 *
 * $validation->add(
 *     "name_last",
 *     new Min(
 *         [
 *             "min"     => 2,
 *             "message" => "We want more than just their initials",
 *             "included" => true
 *         ]
 *     )
 * );
 *
 * $validation->add(
 *     [
 *         "name_last",
 *         "name_first",
 *     ],
 *     new Min(
 *         [
 *             "min" => [
 *                 "name_last"  => 2,
 *                 "name_first" => 4,
 *             ],
 *             "message" => [
 *                 "name_last"  => "We don't like too short last names",
 *                 "name_first" => "We don't like too short first names",
 *             ],
 *             "included" => [
 *                 "name_last"  => false,
 *                 "name_first" => true,
 *             ]
 *         ]
 *     )
 * );
 * ```
 */
class Min extends AbstractValidator
{
    protected $template = 'Field :field must be at least :min characters long';

    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'allowEmpty' => false,
     *     'min' => 1000,
     *     'included' => false
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
