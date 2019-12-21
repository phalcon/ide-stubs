<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Translate\Adapter\AdapterInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class InterpolatorFactory extends AbstractFactory
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
    public function __construct(array $services = array())
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @return AdapterInterface
     */
    public function newInstance(string $name): AdapterInterface
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
