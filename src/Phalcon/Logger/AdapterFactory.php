<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Logger\Adapter\AdapterInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class AdapterFactory extends AbstractFactory
{

    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param string $fileName
     * @param array $options
     * @return AdapterInterface
     */
    public function newInstance(string $name, string $fileName, array $options = array()): AdapterInterface
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
