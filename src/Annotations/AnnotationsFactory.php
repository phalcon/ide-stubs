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
use Phalcon\Annotations\Adapter\Apcu;
use Phalcon\Annotations\Adapter\Memory;
use Phalcon\Annotations\Adapter\Stream;
use Phalcon\Contracts\Annotations\AnnotationsTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;

/**
 * Factory to create annotations components
 *
 * @phpstan-import-type annotations_options from AnnotationsTypes
 */
class AnnotationsFactory extends AbstractFactory
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;



    /**
     * AdapterFactory constructor.
     *
     * @phpstan-param array<string, class-string<AdapterInterface>> $services
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
     *
     * @phpstan-return AdapterInterface
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
     *
     * @phpstan-param annotations_options $options
     * @param string $name
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return class-string<\Exception>
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return array<string, string>
     */
    protected function getServices(): array
    {
    }
}
