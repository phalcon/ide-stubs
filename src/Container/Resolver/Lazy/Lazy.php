<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Resolver\Lazy;

use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Resolver\Resolvable;

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 */
abstract class Lazy implements \Phalcon\Contracts\Container\Resolver\Resolvable
{
    /**
     * @param object $ioc
     * @return mixed
     */
    public function __invoke($ioc): mixed
    {
    }

    /**
     * @param object $ioc
     * @return mixed
     */
    abstract public function resolve($ioc): mixed;

    /**
     * @param object $ioc
     * @param mixed $argument
     * @return mixed
     */
    protected function resolveArgument($ioc, $argument): mixed
    {
    }

    /**
     * @phpstan-param  container_arguments $arguments
     * @phpstan-return container_arguments
     * @param object $ioc
     * @param array $arguments
     * @return array
     */
    protected function resolveArguments($ioc, array $arguments): array
    {
    }
}
