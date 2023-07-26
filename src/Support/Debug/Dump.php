<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug;

use Phalcon\Di\Di;
use Phalcon\Support\Helper\Json\Encode;
use Reflection;
use ReflectionClass;
use ReflectionProperty;
use stdClass;

/**
 * Dumps information about a variable(s)
 *
 * ```php
 * $foo = 123;
 *
 * echo (new \Phalcon\Debug\Dump())->variable($foo, "foo");
 * ```
 *
 * ```php
 * $foo = "string";
 * $bar = ["key" => "value"];
 * $baz = new stdClass();
 *
 * echo (new \Phalcon\Debug\Dump())->variables($foo, $bar, $baz);
 * ```
 */
class Dump
{
    /**
     * @var bool
     */
    protected $detailed = false;

    /**
     * @var array
     */
    protected $methods = [];

    /**
     * @var array
     */
    protected $styles = [];

    /**
     * @var Encode
     */
    private $encode;

    /**
     * Phalcon\Debug\Dump constructor
     *
     * @param array $styles
     * @param bool $detailed
     */
    public function __construct(array $styles = [], bool $detailed = false)
    {
    }

    /**
     * Alias of variables() method
     *
     * @return string
     */
    public function all(): string
    {
    }

    /**
     * @return bool
     */
    public function getDetailed(): bool
    {
    }

    /**
     * @param bool $detailed
     * @return void
     */
    public function setDetailed(bool $detailed): void
    {
    }

    /**
     * Alias of variable() method
     *
     * @param mixed $variable
     * @param string $name
     * @return string
     */
    public function one($variable, string $name = null): string
    {
    }

    /**
     * Set styles for vars type
     *
     * @param array $styles
     * @return array
     */
    public function setStyles(array $styles = []): array
    {
    }

    /**
     * Returns an JSON string of information about a single variable.
     *
     * ```php
     * $foo = [
     *     "key" => "value",
     * ];
     *
     * echo (new \Phalcon\Debug\Dump())->toJson($foo);
     *
     * $foo = new stdClass();
     * $foo->bar = "buz";
     *
     * echo (new \Phalcon\Debug\Dump())->toJson($foo);
     * ```
     *
     * @param mixed $variable
     * @return string
     */
    public function toJson($variable): string
    {
    }

    /**
     * Returns an HTML string of information about a single variable.
     *
     * ```php
     * echo (new \Phalcon\Debug\Dump())->variable($foo, "foo");
     * ```
     *
     * @param mixed $variable
     * @param string $name
     * @return string
     */
    public function variable($variable, string $name = null): string
    {
    }

    /**
     * Returns an HTML string of debugging information about any number of
     * variables, each wrapped in a "pre" tag.
     *
     * ```php
     * $foo = "string";
     * $bar = ["key" => "value"];
     * $baz = new stdClass();
     *
     * echo (new \Phalcon\Debug\Dump())->variables($foo, $bar, $baz);
     * ```
     *
     * @return string
     */
    public function variables(): string
    {
    }

    /**
     * Get style for type
     *
     * @param string $type
     * @return string
     */
    protected function getStyle(string $type): string
    {
    }

    /**
     * Prepare an HTML string of information about a single variable.
     *
     * @param mixed $variable
     * @param string $name
     * @param int $tab
     * @return string
     */
    protected function output($variable, string $name = null, int $tab = 1): string
    {
    }
}
