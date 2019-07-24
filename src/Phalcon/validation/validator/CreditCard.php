<?php

namespace Phalcon\Validation\Validator;

/**
 * Checks if a value has a valid credit card number
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\CreditCard as CreditCardValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "creditCard",
 *     new CreditCardValidator(
 *         [
 *             "message" => "The credit card number is not valid",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "creditCard",
 *         "secondCreditCard",
 *     ],
 *     new CreditCardValidator(
 *         [
 *             "message" => [
 *                 "creditCard"       => "The credit card number is not valid",
 *                 "secondCreditCard" => "The second credit card number is not valid",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class CreditCard extends \Phalcon\Validation\AbstractValidator
{

    protected $template = 'Field :field is not valid for a credit card number';


    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field): bool {}

    /**
     * is a simple checksum formula used to validate a variety of identification
     * numbers
     *
     * @param string $number
     * @return bool
     */
    private function verifyByLuhnAlgorithm(string $number): bool {}

}
