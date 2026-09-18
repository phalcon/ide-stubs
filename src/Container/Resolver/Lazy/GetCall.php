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
use Phalcon\Contracts\Container\Service\Collection;

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 */
class GetCall extends \Phalcon\Container\Resolver\Lazy\Lazy
{
    /**
     * @phpstan-var container_arguments
     */
    protected array $arguments;

    /**
     * @var Lazy|string
     */
    protected $id;

    protected string $method;

    /**
     * @phpstan-param Lazy|string         $id
     * @phpstan-param container_arguments $arguments
     * @param mixed $id
     * @param string $method
     * @param array $arguments
     */
    public function __construct($id, string $method, array $arguments)
    {
    }

    /**
     * Resolve a shared instance method call
     *
     * @param object $ioc
     * @return mixed
     */
    public function resolve($ioc): mixed
    {
    }
}
