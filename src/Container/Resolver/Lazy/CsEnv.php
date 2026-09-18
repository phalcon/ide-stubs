<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Resolver\Lazy;

use Phalcon\Container\Exceptions\EnvNotDefined;
use Phalcon\Contracts\Container\ContainerTypes;

/**
 * @phpstan-import-type container_csv_values from ContainerTypes
 */
class CsEnv extends \Phalcon\Container\Resolver\Lazy\Env
{
    /**
     * Resolve the getEnv() from keys as a comma separated list
     *
     * @phpstan-return container_csv_values
     * @throws EnvNotDefined
     * @param object $ioc
     * @return array
     */
    public function resolve($ioc): array
    {
    }
}
