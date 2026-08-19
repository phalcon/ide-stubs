<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate;

use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Translate\TranslateTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Translate\Adapter\AdapterInterface;
use Phalcon\Translate\Adapter\Csv;
use Phalcon\Translate\Adapter\Gettext;
use Phalcon\Translate\Adapter\NativeArray;
use Phalcon\Translate\Exceptions\TranslatorNotRegistered;
use Throwable;

/**
 * @property InterpolatorFactory $interpolator
 *
 * @phpstan-import-type translate_factory_config from TranslateTypes
 */
class TranslateFactory extends AbstractFactory
{
    private InterpolatorFactory $interpolator;

    /**
     * @phpstan-param array<string, string> $services
     * @param InterpolatorFactory $interpolator
     * @param array $services
     */
    public function __construct(InterpolatorFactory $interpolator, array $services = [])
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @phpstan-param ConfigInterface|translate_factory_config $config
     *
     * @return AdapterInterface
     * @throws Exception
     * @param mixed $config
     */
    public function load($config): AdapterInterface
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @phpstan-param array<string, mixed> $options
     *
     * @return AdapterInterface
     * @param string $name
     * @param array $options
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return class-string<Throwable>
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
