<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine;

use Countable;
use Iterator;
use Phalcon\Di\DiInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Html\Link\Link;
use Phalcon\Html\Link\Serializer\Header;
use Phalcon\Mvc\View\Engine\Volt\Compiler;
use Phalcon\Mvc\View\Engine\Volt\Exceptions\InvalidHaystack;
use Phalcon\Mvc\View\Engine\Volt\Exceptions\MacroNotFound;
use Phalcon\Mvc\View\Engine\Volt\Exceptions\MbstringRequired;
use Phalcon\Mvc\View\Exception;
use Phalcon\Traits\Php\InfoTrait;

/**
 * Designer friendly and fast template engine for PHP written in Zephir/C
 */
class Volt extends \Phalcon\Mvc\View\Engine\AbstractEngine implements \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Traits\Php\InfoTrait;


    /**
     * @var Compiler
     */
    protected $compiler;

    protected ?\Phalcon\Events\ManagerInterface $eventsManager = null;

    /**
     * @phpstan-var array<string, callable>
     */
    protected array $macros = [];

    /**
     * @phpstan-var array<string, mixed>
     */
    protected array $options = [];

    /**
     * Checks if a macro is defined and calls it
     *
     * @params string name
     * @params array arguments
     *
     * @return mixed
     *
     * @phpstan-param array<array-key, mixed> $arguments
     * @param string $name
     * @param array $arguments
     */
    public function callMacro(string $name, array $arguments = []): mixed
    {
    }

    /**
     * Performs a string conversion
     *
     * @return string
     * @param string $text
     * @param string $from
     * @param string $to
     */
    public function convertEncoding(string $text, string $from, string $to): string
    {
    }

    /**
     * Returns the Volt's compiler
     *
     * @return Compiler
     */
    public function getCompiler(): Compiler
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
    {
    }

    /**
     * Return Volt's options
     *
     * @phpstan-return array<string, mixed>
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Checks if the needle is included in the haystack
     *
     * @param mixed $needle
     * @param array|string $haystack *
     * @return bool
     */
    public function isIncluded($needle, $haystack): bool
    {
    }

    /**
     * Length filter. If an array/object is passed a count is performed otherwise a strlen/mb_strlen
     *
     * @param mixed $item *
     * @return int
     *
     * @phpstan-param array<array-key, mixed>|Countable|string|null $item
     */
    public function length($item): int
    {
    }

    /**
     * Parses the preload element passed and sets the necessary link headers
     *
     * @phpstan-param array{
     *     0?: string,
     *     1?: array<string, array<string>|bool|float|int|string|null>
     * }|string $parameters
     *
     * @todo find a better way to handle this
     * @param mixed $parameters
     * @return string
     */
    public function preload($parameters): string
    {
    }

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param mixed $params
     * @params bool mustClean
     *
     * @return void
     * @param bool $mustClean
     */
    public function render(string $path, $params, bool $mustClean = false)
    {
    }

    /**
     * Sets the events manager
     *
     * @param ManagerInterface $eventsManager *
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Set Volt's options
     *
     * @phpstan-param array<string, mixed> $options
     *
     * @return void
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Extracts a slice from a string/array/traversable object value
     *
     * @phpstan-param array<array-key, mixed>|string|(Countable&Iterator<array-key, mixed>) $value
     * @phpstan-param int|null $end
     * @phpstan-return array<array-key, mixed>|string
     * @param mixed $value
     * @param int $start
     * @param mixed $end
     */
    public function slice($value, int $start = 0, $end = null)
    {
    }

    /**
     * Sorts an array
     *
     * @phpstan-param array<array-key, mixed> $value
     * @phpstan-return array<array-key, mixed>
     * @param array $value
     * @return array
     */
    public function sort(array $value): array
    {
    }
}
