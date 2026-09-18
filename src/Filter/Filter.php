<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter;

use Phalcon\Contracts\Filter\FilterTypes;
use Phalcon\Contracts\Filter\Sanitizer;
use Phalcon\Filter\Exceptions\FilterNotRegistered;
use Phalcon\Filter\Sanitize\AbsInt;
use Phalcon\Filter\Sanitize\Alnum;
use Phalcon\Filter\Sanitize\Alpha;
use Phalcon\Filter\Sanitize\BoolVal;
use Phalcon\Filter\Sanitize\Email;
use Phalcon\Filter\Sanitize\FloatVal;
use Phalcon\Filter\Sanitize\IntVal;
use Phalcon\Filter\Sanitize\Ip;
use Phalcon\Filter\Sanitize\Lower;
use Phalcon\Filter\Sanitize\LowerFirst;
use Phalcon\Filter\Sanitize\Regex;
use Phalcon\Filter\Sanitize\Remove;
use Phalcon\Filter\Sanitize\Replace;
use Phalcon\Filter\Sanitize\Special;
use Phalcon\Filter\Sanitize\SpecialFull;
use Phalcon\Filter\Sanitize\StringVal;
use Phalcon\Filter\Sanitize\StringValLegacy;
use Phalcon\Filter\Sanitize\Striptags;
use Phalcon\Filter\Sanitize\Trim;
use Phalcon\Filter\Sanitize\Upper;
use Phalcon\Filter\Sanitize\UpperFirst;
use Phalcon\Filter\Sanitize\UpperWords;
use Phalcon\Filter\Sanitize\Url;

/**
 * Lazy loads, stores and exposes sanitizer objects
 *
 * @method int          absint(mixed $input)
 * @method string       alnum(mixed $input)
 * @method string       alpha(mixed $input)
 * @method bool         bool(mixed $input)
 * @method string       email(string $input)
 * @method float        float(mixed $input)
 * @method int          int(string $input)
 * @method false|string ip(string $input, int $filter = 0)
 * @method string       lower(string $input)
 * @method string       lowerfirst(string $input)
 * @method mixed        regex(mixed $input, mixed $pattern, mixed $replace)
 * @method mixed        remove(mixed $input, mixed $replace)
 * @method mixed        replace(mixed $input, mixed $from, mixed $to)
 * @method string       special(string $input)
 * @method string       specialfull(string $input)
 * @method string       string(string $input)
 * @method string       stringlegacy(mixed $input)
 * @method string       striptags(string $input)
 * @method string       trim(string $input)
 * @method string       upper(string $input)
 * @method string       upperFirst(string $input)
 * @method string|null  upperWords(string $input)
 * @method string|null  url(string $input)
 *
 * @property array $mapper
 * @property array $services
 *
 * @phpstan-import-type filter_mapper from FilterTypes
 * @phpstan-import-type filter_sanitizer_params from FilterTypes
 * @phpstan-import-type filter_sanitizer_split from FilterTypes
 * @phpstan-import-type filter_sanitizers from FilterTypes
 * @phpstan-import-type filter_services from FilterTypes
 * @phpstan-import-type filter_values from FilterTypes
 */
class Filter implements \Phalcon\Filter\FilterInterface
{
    /**
     * @var string
     */
    const string FILTER_ABSINT = 'absint';

    /**
     * @var string
     */
    const string FILTER_ALNUM = 'alnum';

    /**
     * @var string
     */
    const string FILTER_ALPHA = 'alpha';

    /**
     * @var string
     */
    const string FILTER_BOOL = 'bool';

    /**
     * @var string
     */
    const string FILTER_EMAIL = 'email';

    /**
     * @var string
     */
    const string FILTER_FLOAT = 'float';

    /**
     * @var string
     */
    const string FILTER_INT = 'int';

    /**
     * @var string
     */
    const string FILTER_IP = 'ip';

    /**
     * @var string
     */
    const string FILTER_LOWER = 'lower';

    /**
     * @var string
     */
    const string FILTER_LOWERFIRST = 'lowerfirst';

    /**
     * @var string
     */
    const string FILTER_REGEX = 'regex';

    /**
     * @var string
     */
    const string FILTER_REMOVE = 'remove';

    /**
     * @var string
     */
    const string FILTER_REPLACE = 'replace';

    /**
     * @var string
     */
    const string FILTER_SPECIAL = 'special';

    /**
     * @var string
     */
    const string FILTER_SPECIALFULL = 'specialfull';

    /**
     * @var string
     */
    const string FILTER_STRING = 'string';

    /**
     * @var string
     */
    const string FILTER_STRING_LEGACY = 'stringlegacy';

    /**
     * @var string
     */
    const string FILTER_STRIPTAGS = 'striptags';

    /**
     * @var string
     */
    const string FILTER_TRIM = 'trim';

    /**
     * @var string
     */
    const string FILTER_UPPER = 'upper';

    /**
     * @var string
     */
    const string FILTER_UPPERFIRST = 'upperfirst';

    /**
     * @var string
     */
    const string FILTER_UPPERWORDS = 'upperwords';

    /**
     * @var string
     */
    const string FILTER_URL = 'url';

    /**
     * @phpstan-var filter_mapper
     */
    protected array $mapper = [];

    /**
     * @phpstan-var filter_services
     */
    protected array $services = [];

    /**
     * Filter constructor.
     *
     * @phpstan-param filter_mapper $mapper
     * @param array $mapper
     */
    public function __construct(array $mapper = [])
    {
    }

    /**
     * Magic call to make the helper objects available as methods.
     *
     * @param string               $name
     * @param array<string, mixed> $args
     *
     * @return mixed
     * @throws Exception
     */
    public function __call(string $name, array $args)
    {
    }

    /**
     * Returns the default sanitizer name to class map. This is the single
     * source for the built-in sanitizer registry: when adding a sanitizer,
     * add its `FILTER_` constant and its entry here.
     *
     * @return string[]
     *
     * @phpstan-return filter_mapper
     */
    public static function getDefaultMapper(): array
    {
    }

    /**
     * Get a service. If it is not in the mapper array, create a new object,
     * set it and then return it.
     *
     * @param string $name
     *
     * @return mixed
     *
     * @phpstan-return Sanitizer
     *
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
     * Array policy: when `$value` is an array and `$noRecursive` is `false`
     * (the default), each element is passed to the sanitizer individually
     * and an array is returned - recursion is one level deep only. Elements
     * that are themselves arrays are passed to the sanitizer as-is, which
     * raises a `TypeError` for sanitizers that type their value parameter
     * (e.g. `trim`). When `$noRecursive` is `true`, the whole array is
     * passed to the sanitizer as a single value.
     *
     * @phpstan-param filter_sanitizers|string $sanitizers
     *
     * @return array|false|mixed|null
     * @throws Exception
     * @param mixed $value
     * @param mixed $sanitizers
     * @param bool $noRecursive
     */
    public function sanitize($value, $sanitizers, bool $noRecursive = false): mixed
    {
    }

    /**
     * Set a new service to the mapper array
     *
     * @phpstan-param class-string<Sanitizer>|Sanitizer $service
     * @param string $name
     * @param mixed $service
     * @return void
     */
    public function set(string $name, $service): void
    {
    }

    /**
     * Loads the objects in the internal mapper array
     *
     * @phpstan-param filter_mapper $mapper
     * @param array $mapper
     * @return void
     */
    protected function init(array $mapper): void
    {
    }

    /**
     * @phpstan-param class-string<Sanitizer>|Sanitizer $definition
     *
     * @phpstan-return Sanitizer
     * @param mixed $definition
     */
    private function createInstance($definition)
    {
    }

    /**
     * @phpstan-param filter_sanitizers $sanitizers
     *
     * @return array|false|mixed|null
     * @throws Exception
     * @param array $sanitizers
     * @param mixed $value
     * @param bool $noRecursive
     */
    private function processArraySanitizers(array $sanitizers, $value, bool $noRecursive)
    {
    }

    /**
     * Processes the array values with the relevant sanitizers
     *
     * @phpstan-param filter_values           $values
     * @phpstan-param filter_sanitizer_params $sanitizerParams
     *
     * @phpstan-return filter_values
     * @throws Exception
     * @param array $values
     * @param string $sanitizerName
     * @param array $sanitizerParams
     * @return array
     */
    private function processArrayValues(array $values, string $sanitizerName, array $sanitizerParams = []): array
    {
    }

    /**
     * @phpstan-param filter_values             $value
     * @phpstan-param filter_sanitizer_params   $sanitizerParams
     *
     * @return array|mixed
     * @throws Exception
     * @param mixed $value
     * @param string $sanitizerName
     * @param array $sanitizerParams
     * @param bool $noRecursive
     */
    private function processValueIsArray($value, string $sanitizerName, array $sanitizerParams, bool $noRecursive)
    {
    }

    /**
     * @phpstan-param filter_sanitizer_params $sanitizerParams
     *
     * @return array|false|mixed
     * @throws Exception
     * @param mixed $value
     * @param string $sanitizerName
     * @param array $sanitizerParams
     */
    private function processValueIsNotArray($value, string $sanitizerName, array $sanitizerParams)
    {
    }

    /**
     * Internal sanitize wrapper for recursion
     *
     * @phpstan-param filter_sanitizer_params $sanitizerParams
     *
     * @return false|mixed
     * @throws Exception
     * @param mixed $value
     * @param string $sanitizerName
     * @param array $sanitizerParams
     */
    private function sanitizer($value, string $sanitizerName, array $sanitizerParams = [])
    {
    }

    /**
     * @param mixed $sanitizerKey
     * @param mixed $sanitizer
     *
     * @phpstan-return filter_sanitizer_split
     * @return array
     */
    private function splitSanitizerParameters($sanitizerKey, $sanitizer): array
    {
    }
}
