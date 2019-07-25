<?php

namespace Phalcon\Storage;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class AdapterFactory extends \Phalcon\Factory\AbstractFactory
{
    /**
     * @var <SerializerFactory>
     */
    private $serializerFactory;


    /**
     * AdapterFactory constructor.
     *
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $services
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory = null, array $services = array()) {}

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return \Phalcon\Storage\Adapter\AbstractAdapter
     */
    public function newInstance(string $name, array $options = array()): AbstractAdapter {}

    /**
     * @return array
     */
    protected function getAdapters(): array {}

}
