<?php

namespace Phalcon;


abstract class Factory implements \Phalcon\FactoryInterface
{

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass($namespace, $config) {}

}
