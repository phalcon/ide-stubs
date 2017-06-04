<?php

namespace Phalcon\Di;

/**
 * Phalcon\Di\ServiceProviderInterface
 *
 * Should be implemented by service providers, or such components,
 * which register a service in the service container.
 *
 * <code>
 * namespace Acme;
 *
 * use Phalcon\DiInterface;
 * use Phalcon\Di\ServiceProviderInterface;
 *
 * class SomeServiceProvider implements ServiceProviderInterface
 * {
 *     public function register(DiInterface $di)
 *     {
 *         $di->setShared('service', function () {
 *             // ...
 *         });
 *     }
 * }
 * </code>
 */
interface ServiceProviderInterface
{

    /**
     * Registers a service provider.
     *
     * @param \Phalcon\DiInterface $di
     */
    public function register(\Phalcon\DiInterface $di);

}
