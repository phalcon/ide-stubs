<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use DateTimeZone;
use Exception as BaseException;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Logger\LoggerTypes;
use Phalcon\Factory\AbstractConfigFactory;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;

/**
 * Factory creating logger objects
 *
 * @phpstan-import-type logger_adapter_config from LoggerTypes
 * @phpstan-import-type logger_adapters from LoggerTypes
 * @phpstan-import-type logger_factory_config from LoggerTypes
 */
class LoggerFactory extends AbstractConfigFactory
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;


    private AdapterFactory $adapterFactory;

    /**
     * Constructor
     *
     * @param AdapterFactory $factory
     */
    public function __construct(AdapterFactory $factory)
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * The adapter list lives under `options`, not at the top level.
     *
     * @phpstan-param ConfigInterface|logger_factory_config $config
     *
     * @param array|ConfigInterface $config = [
     *     'name'    => 'messages',
     *     'options' => [
     *         'adapters' => [
     *             'adapter-name' => [
     *                 'adapter' => 'stream',
     *                 'name'    => 'file.log',
     *                 'options' => [
     *                     'mode'     => 'ab',
     *                     'option'   => null,
     *                     'facility' => null
     *                 ],
     *             ],
     *         ],
     *     ]
     * ]
     * @return Logger
     */
    public function load($config): Logger
    {
    }

    /**
     * Returns a Logger object
     *
     * @phpstan-param logger_adapters $adapters
     * @param string $name
     * @param array $adapters
     * @param \DateTimeZone|null $timezone
     * @return Logger
     */
    public function newInstance(string $name, array $adapters = [], ?\DateTimeZone $timezone = null): Logger
    {
    }

    /**
     * @return class-string<\Exception>
     */
    protected function getExceptionClass(): string
    {
    }
}
