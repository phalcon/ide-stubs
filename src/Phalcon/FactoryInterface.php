<?php

namespace Phalcon;


interface FactoryInterface
{

    /**
     * @param \Phalcon\Config|array $config
     * @return object
     */
    public static function load($config);

}
