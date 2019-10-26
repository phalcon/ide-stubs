<?php

namespace Phalcon;

/**
 * This class allows to change the internal behavior of the framework in runtime
 */
class Kernel
{

    /**
     * Produces a pre-computed hash key based on a string. This function
     * produces different numbers in 32bit/64bit processors
     *
     * @return string
     * @param string $key
     */
    public static function preComputeHashKey(string $key)
    {
    }

}
