<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Validation;

/**
 * This is a base class for combined fields validators
 */
abstract class AbstractValidatorComposite extends \Phalcon\Validation\AbstractValidator implements \Phalcon\Validation\ValidatorCompositeInterface
{
    /**
     * @var array
     */
    protected $validators = array();


    /**
     * @return array
     */
    public function getValidators(): array
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
