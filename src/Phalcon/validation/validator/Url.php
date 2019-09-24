<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Validation\Validator;

use Phalcon\Validation\AbstractValidator;

/**
 * Checks if a value has a url format
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\Url as UrlValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "url",
 *     new UrlValidator(
 *         [
 *             "message" => ":field must be a url",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "url",
 *         "homepage",
 *     ],
 *     new UrlValidator(
 *         [
 *             "message" => [
 *                 "url"      => "url must be a url",
 *                 "homepage" => "homepage must be a url",
 *             ]
 *         ]
 *     )
 * );
 * ```
 */
class Url extends AbstractValidator
{

    protected $template = 'Field :field must be a url';


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
