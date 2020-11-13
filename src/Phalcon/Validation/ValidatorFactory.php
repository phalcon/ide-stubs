<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Validation;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Helper\Arr;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class ValidatorFactory extends AbstractFactory
{

    /**
     * TagFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
    }

    /**
     * Creates a new instance
     *
     * @param string $name
     * @return ValidatorInterface
     */
    public function newInstance(string $name): ValidatorInterface
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
