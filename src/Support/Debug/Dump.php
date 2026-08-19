<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug;

use InvalidArgumentException;
use JsonException;
use Phalcon\Container\Container;
use Phalcon\Contracts\Support\Debug\TemplateAware;
use Phalcon\Contracts\Support\SupportTypes;
use Phalcon\Di\DiInterface;
use Phalcon\Support\Debug\Traits\TemplateAwareTrait;
use Phalcon\Support\Helper\Json\Encode;
use Phalcon\Traits\Support\Helper\Str\InterpolateTrait;
use Reflection;
use ReflectionClass;
use ReflectionException;
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
 *
 * @phpstan-import-type support_debug_styles from SupportTypes
 */
class Dump implements \Phalcon\Contracts\Support\Debug\TemplateAware
{
    use \Phalcon\Traits\Support\Helper\Str\InterpolateTrait;
    use \Phalcon\Support\Debug\Traits\TemplateAwareTrait;


    protected bool $detailed = false;

    /**
     * @var array<array-key, class-string>
     */
    protected array $methods = [];

    /**
     * @phpstan-var support_debug_styles
     */
    protected array $styles = [];

    private \Phalcon\Support\Helper\Json\Encode $encode;

    /**
     * Dump constructor.
     *
     * @phpstan-param support_debug_styles $styles
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
     * Alias of variable() method
     *
     * @throws ReflectionException
     * @param mixed $variable
     * @param string|null $name
     * @return string
     */
    public function one($variable, ?string $name = null): string
    {
    }

    /**
     * @param bool $flag
     * @return void
     */
    public function setDetailed(bool $flag): void
    {
    }

    /**
     * Set styles for vars type
     *
     * @phpstan-param  support_debug_styles $styles
     * @phpstan-return support_debug_styles
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
     * @throws InvalidArgumentException
     * @throws JsonException
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
     * @throws ReflectionException
     * @param mixed $variable
     * @param string|null $name
     * @return string
     */
    public function variable($variable, ?string $name = null): string
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
     * @throws ReflectionException
     * @return string
     */
    public function variables(): string
    {
    }

    /**
     * Returns the embedded default template for the given name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function defaultTemplate(string $name): string
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
     * @throws ReflectionException
     * @param mixed $variable
     * @param string|null $name
     * @param int $tab
     * @return string
     */
    protected function output($variable, ?string $name = null, int $tab = 1): string
    {
    }

    /**
     * @param string $text
     *
     * @return string
     */
    private function getOutputBold(string $text): string
    {
    }
}
