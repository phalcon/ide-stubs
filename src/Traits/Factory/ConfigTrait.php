<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Traits\Factory;

use Phalcon\Config\ConfigInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
trait ConfigTrait
{
    /**
     * @param array<string, mixed>|ConfigInterface $config
     *
     * @return array<string, mixed>
     */
    protected function checkConfig($config): array
    {
    }

    /**
     * Checks if the config has a specific element
     *
     * @param array  $config
     * @param string $element
     *
     * @return array
     */
    protected function checkConfigElement(array $config, string $element): array
    {
    }
}
