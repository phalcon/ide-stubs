<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use Exception as BaseException;
use Phalcon\Contracts\Logger\LoggerTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Logger\Adapter\AdapterInterface;
use Phalcon\Logger\Adapter\Noop;
use Phalcon\Logger\Adapter\Stream;
use Phalcon\Logger\Adapter\Syslog;

/**
 * Factory used to create adapters used for Logging
 *
 * @phpstan-import-type logger_adapter_options from LoggerTypes
 */
class AdapterFactory extends AbstractFactory
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
     * Create a new instance of the adapter
     *
     * @phpstan-param logger_adapter_options $options
     *
     * @throws BaseException
     * @param string $name
     * @param string $fileName
     * @param array $options
     * @return AdapterInterface
     */
    public function newInstance(string $name, string $fileName, array $options = []): AdapterInterface
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
