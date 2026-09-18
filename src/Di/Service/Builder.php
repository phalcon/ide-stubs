<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di\Service;

use Phalcon\Contracts\Di\DiTypes;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Exception;
use Phalcon\Di\Exceptions\ArgumentTypeRequired;
use Phalcon\Di\Exceptions\CallArgumentsMustBeArray;
use Phalcon\Di\Exceptions\MethodCallMustBeArray;
use Phalcon\Di\Exceptions\MethodNameRequired;
use Phalcon\Di\Exceptions\MissingClassNameParameter;
use Phalcon\Di\Exceptions\MissingParameterKey;
use Phalcon\Di\Exceptions\PropertyInjectionRequiresInstance;
use Phalcon\Di\Exceptions\PropertyMustBeArray;
use Phalcon\Di\Exceptions\PropertyNameRequired;
use Phalcon\Di\Exceptions\PropertyValueRequired;
use Phalcon\Di\Exceptions\SetterInjectionRequiresInstance;
use Phalcon\Di\Exceptions\SetterParametersMustBeArray;
use Phalcon\Di\Exceptions\UnknownServiceType;

/**
 * Phalcon\Di\Service\Builder
 *
 * This class builds instances based on complex definitions
 *
 * @phpstan-import-type di_parameters from DiTypes
 * @phpstan-import-type di_service_argument from DiTypes
 * @phpstan-import-type di_service_definition from DiTypes
 */
class Builder
{
    /**
     * Builds a service using a complex service definition
     *
     * @phpstan-param di_service_definition $definition
     * @phpstan-param di_parameters|null    $parameters
     *
     * @return mixed
     * @param \Phalcon\Di\DiInterface $container
     * @param array $definition
     * @param mixed $parameters
     */
    public function build(\Phalcon\Di\DiInterface $container, array $definition, $parameters = null)
    {
    }

    /**
     * Resolves a constructor/call parameter
     *
     * @phpstan-param di_service_argument $argument
     *
     * @return mixed
     * @param \Phalcon\Di\DiInterface $container
     * @param int $position
     * @param array $argument
     */
    private function buildParameter(\Phalcon\Di\DiInterface $container, int $position, array $argument)
    {
    }

    /**
     * Resolves an array of parameters
     *
     * @phpstan-param array<int, di_service_argument> $arguments
     *
     * @phpstan-return list<mixed>
     * @param \Phalcon\Di\DiInterface $container
     * @param array $arguments
     * @return array
     */
    private function buildParameters(\Phalcon\Di\DiInterface $container, array $arguments): array
    {
    }
}
