<?php

namespace Phalcon\Translate;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class InterpolatorFactory extends \Phalcon\Factory\AbstractFactory
{
    /**
     * @var array
     */
    private $mapper = array();

    /**
     * @var array
     */
    private $services = array();


    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array()) {}

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @return \Phalcon\Translate\Adapter\AdapterInterface
     */
    public function newInstance(string $name): AdapterInterface {}

    /**
     * @return array
     */
    protected function getAdapters(): array {}

}
