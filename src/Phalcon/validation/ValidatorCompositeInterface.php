<?php

namespace Phalcon\Validation;

/**
 * This is a base class for combined fields validators
 */
interface ValidatorCompositeInterface
{

    /**
     * Executes the validation
     *
     * @return array
     */
    public function getValidators(): array;

    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field): bool;

}
