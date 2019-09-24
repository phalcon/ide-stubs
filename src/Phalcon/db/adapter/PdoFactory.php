<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Db\Adapter;

use Phalcon\Factory\AbstractFactory;

class PdoFactory extends AbstractFactory
{

    /**
     * Constructor
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
    }

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return mixed
     */
    public function load($config)
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return \Phalcon\Db\Adapter\AbstractAdapter
     */
    public function newInstance(string $name, array $options = array()): AbstractAdapter
    {
    }

    /**
     * Returns the available adapters
     *
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
