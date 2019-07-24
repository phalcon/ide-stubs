<?php

namespace Phalcon;


interface FactoryInterface
{

    /**
     * @param \Phalcon\Config|array $config
     * @return mixed
     */
    public static function load($config);

}
