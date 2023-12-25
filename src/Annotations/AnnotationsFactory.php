<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations;

use Phalcon\Annotations\Adapter\AdapterInterface;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Support\Helper\Arr\Get;

/**
 * Factory to create annotations components
 */
class AnnotationsFactory extends AbstractFactory
{
    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * @param array|\Phalcon\Config\Config $config = [
     *     'adapter' => 'apcu',
     *     'options' => [
     *         'prefix' => 'phalcon',
     *         'lifetime' => 3600,
     *         'annotationsDir' => 'phalconDir'
     *     ]
     * ]
     *
     * Factory to create an instance from a Config object
     * @return mixed
     */
    public function load($config): mixed
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param array $options = [
     *     'prefix' => 'phalcon',
     *     'lifetime' => 3600,
     *     'annotationsDir' => 'phalconDir'
     * ]
     * @param string $name
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
