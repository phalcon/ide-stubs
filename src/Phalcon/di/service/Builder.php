<?php

namespace Phalcon\Di\Service;

/**
 * Phalcon\Di\Service\Builder
 *
 * This class builds instances based on complex definitions
 */
class Builder
{

    /**
     * Builds a service using a complex service definition
     *
     * @param array $parameters
     * @param \Phalcon\Di\DiInterface $container
     * @param array $definition
     * @return mixed
     */
    public function build(\Phalcon\Di\DiInterface $container, array $definition, $parameters = null)
    {
    }

    /**
     * Resolves a constructor/call parameter
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param int $position
     * @param array $argument
     * @return mixed
     */
    private function buildParameter(\Phalcon\Di\DiInterface $container, int $position, array $argument)
    {
    }

    /**
     * Resolves an array of parameters
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param array $arguments
     * @return array
     */
    private function buildParameters(\Phalcon\Di\DiInterface $container, array $arguments): array
    {
    }
}
