<?php

namespace Phalcon\Di;

/**
 * Should be implemented by service providers, or such components, which
 * register a service in the service container.
 *
 * ```php
 * namespace Acme;
 *
 * use Phalcon\Di\DiInterface;
 * use Phalcon\Di\ServiceProviderInterface;
 *
 * class SomeServiceProvider implements ServiceProviderInterface
 * {
 *     public function register(DiInterface $di)
 *     {
 *         $di->setShared(
 *             'service',
 *             function () {
 *                 // ...
 *             }
 *         );
 *     }
 * }
 * ```
 */
interface ServiceProviderInterface
{

    /**
     * Registers a service provider.
     *
     * @param \Phalcon\Di\DiInterface $di
     */
    public function register(\Phalcon\Di\DiInterface $di);

}
