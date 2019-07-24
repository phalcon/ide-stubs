<?php

namespace Phalcon\Validation;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class ValidatorFactory extends \Phalcon\Factory\AbstractFactory
{

    /**
     * TagFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array()) {}

    /**
     * Creates a new instance
     *
     * @param string $name
     * @return mixed
     */
    public function newInstance(string $name) {}

    /**
     * @return array
     */
    protected function getAdapters(): array {}

}
