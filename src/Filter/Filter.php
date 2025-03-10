<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter;

/**
 * Lazy loads, stores and exposes sanitizer objects
 *
 * @method int    absint(mixed $input)
 * @method string alnum(mixed $input)
 * @method string alpha(mixed $input)
 * @method bool   bool(mixed $input)
 * @method string email(string $input)
 * @method float  float(mixed $input)
 * @method int    int(string $input)
 * @method string lower(string $input)
 * @method string lowerfirst(string $input)
 * @method mixed  regex(mixed $input, mixed $pattern, mixed $replace)
 * @method mixed  remove(mixed $input, mixed $replace)
 * @method mixed  replace(mixed $input, mixed $source, mixed $target)
 * @method string special(string $input)
 * @method string specialfull(string $input)
 * @method string string(string $input)
 * @method string stringlegacy(mixed $input)
 * @method string striptags(string $input)
 * @method string trim(string $input)
 * @method string upper(string $input)
 * @method string upperFirst(string $input)
 * @method null   upperWords(string $input): strin
 * @method null   url(string $input): strin
 *
 * @property array $mapper
 * @property array $services
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

    const FILTER_LOWERFIRST = 'lowerfirst';

    const FILTER_REGEX = 'regex';

    const FILTER_REMOVE = 'remove';

    const FILTER_REPLACE = 'replace';

    const FILTER_SPECIAL = 'special';

    const FILTER_SPECIALFULL = 'specialfull';

    const FILTER_STRING = 'string';

    const FILTER_STRING_LEGACY = 'stringlegacy';

    const FILTER_STRIPTAGS = 'striptags';

    const FILTER_TRIM = 'trim';

    const FILTER_UPPER = 'upper';

    const FILTER_UPPERFIRST = 'upperfirst';

    const FILTER_UPPERWORDS = 'upperwords';

    const FILTER_URL = 'url';

    /**
     * @var array
     */
    protected $mapper = [];

    /**
     * @var array
     */
    protected $services = [];

    /**
     * Filter constructor.
     *
     * @param array $mapper
     */
    public function __construct(array $mapper = [])
    {
    }

    /**
     * Magic call to make the helper objects available as methods.
     *
     * @param string $name
     * @param array  $args
     *
     * @return mixed
     * @throws Exception
     */
    public function __call(string $name, array $args)
    {
    }

    /**
     * Get a service. If it is not in the mapper array, create a new object,
     * set it and then return it.
     *
     * @param string $name
     *
     * @return mixed
     * @throws Exception
     */
    public function get(string $name): mixed
    {
    }

    /**
     * Checks if a service exists in the map array
     *
     * @param string $name
     *
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
     * @param bool  $noRecursive
     *
     * @return array|false|mixed|null
     * @throws Exception
     */
    public function sanitize($value, $sanitizers, bool $noRecursive = false): mixed
    {
    }

    /**
     * Set a new service to the mapper array
     *
     * @param string $name
     * @param mixed  $service
     * @return void
     */
    public function set(string $name, $service): void
    {
    }

    /**
     * Loads the objects in the internal mapper array
     *
     * @param array $mapper
     * @return void
     */
    protected function init(array $mapper): void
    {
    }

    /**
     * @param mixed $definition
     *
     * @return mixed
     */
    private function createInstance($definition)
    {
    }

    /**
     * @param array $sanitizers
     * @param mixed $value
     * @param bool  $noRecursive
     *
     * @return array|false|mixed|null
     * @throws Exception
     */
    private function processArraySanitizers(array $sanitizers, $value, bool $noRecursive)
    {
    }

    /**
     * Processes the array values with the relevant sanitizers
     *
     * @param array  $values
     * @param string $sanitizerName
     * @param array  $sanitizerParams
     *
     * @return array
     * @throws Exception
     */
    private function processArrayValues(array $values, string $sanitizerName, array $sanitizerParams = []): array
    {
    }

    /**
     * Internal sanitize wrapper for recursion
     *
     * @param mixed  $value
     * @param string $sanitizerName
     * @param array  $sanitizerParams
     *
     * @return false|mixed
     * @throws Exception
     */
    private function sanitizer($value, string $sanitizerName, array $sanitizerParams = [])
    {
    }

    /**
     * @param mixed  $value
     * @param string $sanitizerName
     * @param array  $sanitizerParams
     * @param bool   $noRecursive
     *
     * @return array|mixed
     * @throws Exception
     */
    private function processValueIsArray($value, string $sanitizerName, array $sanitizerParams, bool $noRecursive)
    {
    }

    /**
     * @param mixed  $value
     * @param string $sanitizerName
     * @param array  $sanitizerParams
     *
     * @return array|false|mixed
     * @throws Exception
     */
    private function processValueIsNotArray($value, string $sanitizerName, array $sanitizerParams)
    {
    }

    /**
     * @param mixed $sanitizerKey
     * @param mixed $sanitizer
     *
     * @return array
     */
    private function splitSanitizerParameters($sanitizerKey, $sanitizer): array
    {
    }
}
