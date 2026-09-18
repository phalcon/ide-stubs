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
class StaticCall extends \Phalcon\Container\Resolver\Lazy\Lazy
{
    /**
     * @phpstan-var container_arguments
     */
    protected array $arguments;

    /**
     * @var Lazy|string
     */
    protected $className;

    protected string $method;

    /**
     * @phpstan-param Lazy|string         $className
     * @phpstan-param container_arguments $arguments
     * @param mixed $className
     * @param string $method
     * @param array $arguments
     */
    public function __construct($className, string $method, array $arguments)
    {
    }

    /**
     * Resolve a static method call
     *
     * @param object $ioc
     * @return mixed
     */
    public function resolve($ioc): mixed
    {
    }
}
