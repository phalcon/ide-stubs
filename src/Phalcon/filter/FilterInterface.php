<?php

namespace Phalcon\Filter;

/**
 * Lazy loads, stores and exposes sanitizer objects
 */
interface FilterInterface
{

    /**
     * Sanitizes a value with a specified single or set of sanitizers
     *
     * @param mixed $value
     * @param mixed $sanitizers
     * @param bool $noRecursive
     * @return mixed
     */
    public function sanitize($value, $sanitizers, bool $noRecursive = false);
}
