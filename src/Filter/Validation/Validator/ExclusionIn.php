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
use Phalcon\Filter\Validation\Exception;

/**
 * Check if a value is not included into a list of values
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\ExclusionIn;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "status",
 *     new ExclusionIn(
 *         [
 *             "message" => "The status must not be A or B",
 *             "domain"  => [
 *                 "A",
 *                 "B",
 *             ],
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "status",
 *         "type",
 *     ],
 *     new ExclusionIn(
 *         [
 *             "message" => [
 *                 "status" => "The status must not be A or B",
 *                 "type"   => "The type must not be 1 or "
 *             ],
 *             "domain" => [
 *                 "status" => [
 *                     "A",
 *                     "B",
 *                 ],
 *                 "type"   => [1, 2],
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class ExclusionIn extends AbstractValidator
{
    protected $template = 'Field :field must not be a part of list: :domain';

    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'domain' => [],
     *     'strict' => false,
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
