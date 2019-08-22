<?php

namespace Phalcon;

/**
 * Phalcon\Exception
 *
 * All framework exceptions should use or extend this exception
 */
class Exception extends \Exception implements \Throwable
{

    /**
     * @param string $service
     * @return string
     */
    public static function containerServiceNotFound(string $service): string {}

}
