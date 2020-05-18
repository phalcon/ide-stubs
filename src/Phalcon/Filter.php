<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

/**
 * Lazy loads, stores and exposes sanitizer objects
 */
class Filter implements \Phalcon\Filter\FilterInterface
{

    const FILTER_ABSINT = 'absint';


    const FILTER_ALNUM = 'alnum';


    const FILTER_ALPHA = 'alpha';


    const FILTER_BOOL = 'bool';


    const FILTER_EMAIL = 'email';


    const FILTER_FLOAT = 'float';


    const FILTER_INT = 'int';


    const FILTER_LOWER = 'lower';


    const FILTER_LOWERFIRST = 'lowerFirst';


    const FILTER_REGEX = 'regex';


    const FILTER_REMOVE = 'remove';


    const FILTER_REPLACE = 'replace';


    const FILTER_SPECIAL = 'special';


    const FILTER_SPECIALFULL = 'specialFull';


    const FILTER_STRING = 'string';


    const FILTER_STRIPTAGS = 'striptags';


    const FILTER_TRIM = 'trim';


    const FILTER_UPPER = 'upper';


    const FILTER_UPPERFIRST = 'upperFirst';


    const FILTER_UPPERWORDS = 'upperWords';


    const FILTER_URL = 'url';

    /**
     * @var array
     */
    protected $mapper = array();

    /**
     * @var array
     */
    protected $services = array();


    /**
     * Key value pairs with name as the key and a callable as the value for
     * the service object
     *
     * @param array $mapper
     */
    public function __construct(array $mapper = array())
    {
    }

    /**
     * Get a service. If it is not in the mapper array, create a new object,
     * set it and then return it.
     *
     * @return object
     * @param string $name
     */
    public function get(string $name)
    {
    }

    /**
     * Checks if a service exists in the map array
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Sanitizes a value with a specified single or set of sanitizers
     *
     * @param mixed $value
     * @param mixed $sanitizers
     * @param bool $noRecursive
     * @return mixed
     */
    public function sanitize($value, $sanitizers, bool $noRecursive = false)
    {
    }

    /**
     * Set a new service to the mapper array
     *
     * @param string $name
     * @param callable $service
     * @return void
     */
    public function set(string $name, $service)
    {
    }

    /**
     * Loads the objects in the internal mapper array
     *
     * @param array $mapper
     * @return void
     */
    protected function init(array $mapper)
    {
    }

    /**
     * Processes the array values with the relevant sanitizers
     *
     * @param array $values
     * @param string $sanitizerName
     * @param array $sanitizerParams
     * @return array
     */
    private function processArrayValues(array $values, string $sanitizerName, array $sanitizerParams = array()): array
    {
    }

    /**
     * Internal sanitize wrapper for recursion
     *
     * @param mixed $value
     * @param string $sanitizerName
     * @param array $sanitizerParams
     * @return mixed
     */
    private function sanitizer($value, string $sanitizerName, array $sanitizerParams = array())
    {
    }
}
