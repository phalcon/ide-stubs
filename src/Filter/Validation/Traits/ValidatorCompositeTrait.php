<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Traits;

/**
 * Shared validator collection state and combined validation for composite
 * validators.
 */
trait ValidatorCompositeTrait
{
    /**
     * @var array
     *
     * @todo Use a default [] once Zephir supports array trait defaults
     */
    protected $validators = null;

    /**
     * @return array
     */
    public function getValidators(): array
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
