<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Factory;

use Phalcon\Config\ConfigInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractConfigFactory
{
    /**
     * Checks the config if it is a valid object
     *
     * @param mixed $config
     * @return array
     */
    protected function checkConfig($config): array
    {
    }

    /**
     * Checks if the config has "adapter"
     *
     * @param array $config
     * @param string $element
     * @return array
     */
    protected function checkConfigElement(array $config, string $element): array
    {
    }

    /**
     * Returns the exception object for the child class
     *
     * @param string $message
     * @return \Exception
     */
    protected function getException(string $message): \Exception
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }
}
