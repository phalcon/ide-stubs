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

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 */
class FunctionCall extends \Phalcon\Container\Resolver\Lazy\Lazy
{
    /**
     * @phpstan-var container_arguments
     */
    protected array $arguments;

    protected string $functionName;

    /**
     * @phpstan-param callable-string     $functionName
     * @phpstan-param container_arguments $arguments
     * @param string $functionName
     * @param array $arguments
     */
    public function __construct(string $functionName, array $arguments)
    {
    }

    /**
     * Resolve a function
     *
     * @param object $ioc
     * @return mixed
     */
    public function resolve($ioc): mixed
    {
    }
}
