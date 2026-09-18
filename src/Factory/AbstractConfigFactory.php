<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Factory;

use Exception as BaseException;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Factory\FactoryTypes;

/**
 * @phpstan-import-type factory_config from FactoryTypes
 */
abstract class AbstractConfigFactory
{
    /**
     * Checks the config if it is a valid object
     *
     * @param array<string, mixed>|ConfigInterface $config
     *
     * @phpstan-param factory_config|ConfigInterface $config
     *
     * @phpstan-return factory_config
     * @throws BaseException
     * @return array
     */
    protected function checkConfig($config): array
    {
    }

    /**
     * Checks if the config has "adapter"
     *
     * @param array<string, mixed> $config
     * @param string               $element
     *
     * @phpstan-param factory_config $config
     *
     * @return array<string, mixed>
     * @phpstan-return factory_config
     * @throws BaseException
     */
    protected function checkConfigElement(array $config, string $element): array
    {
    }

    /**
     * Returns the exception object for the child class
     *
     * @param string $message
     * @return BaseException
     */
    protected function getException(string $message): \Exception
    {
    }

    /**
     * @return string
     * @phpstan-return class-string<\Exception>
     */
    protected function getExceptionClass(): string
    {
    }
}
