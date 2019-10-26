<?php

namespace Phalcon\Di;

/**
 * This interface must be implemented in those classes that uses internally the
 * Phalcon\Di that creates them
 */
interface InjectionAwareInterface
{

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container);

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface;

}
