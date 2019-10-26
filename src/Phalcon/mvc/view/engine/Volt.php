<?php

namespace Phalcon\Mvc\View\Engine;

use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\View\Engine\Volt\Compiler;

/**
 * Designer friendly and fast template engine for PHP written in Zephir/C
 */
class Volt extends AbstractEngine implements \Phalcon\Events\EventsAwareInterface
{

    protected $compiler;


    protected $eventsManager;


    protected $macros;


    protected $options;


    /**
     * Checks if a macro is defined and calls it
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function callMacro(string $name, array $arguments = array())
    {
    }

    /**
     * Performs a string conversion
     *
     * @param string $text
     * @param string $from
     * @param string $to
     * @return string
     */
    public function convertEncoding(string $text, string $from, string $to): string
    {
    }

    /**
     * Returns the Volt's compiler
     *
     * @return \Phalcon\Mvc\View\Engine\Volt\Compiler
     */
    public function getCompiler(): Compiler
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return null|\Phalcon\Events\ManagerInterface
     */
    public function getEventsManager(): ?ManagerInterface
    {
    }

    /**
     * Return Volt's options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Checks if the needle is included in the haystack
     *
     * @param mixed $needle
     * @param mixed $haystack
     * @return bool
     */
    public function isIncluded($needle, $haystack): bool
    {
    }

    /**
     * Length filter. If an array/object is passed a count is performed otherwise a strlen/mb_strlen
     *
     * @param mixed $item
     * @return int
     */
    public function length($item): int
    {
    }

    /**
     * Renders a view using the template engine
     *
     * @param string $templatePath
     * @param mixed $params
     * @param bool $mustClean
     */
    public function render(string $templatePath, $params, bool $mustClean = false)
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Set Volt's options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Extracts a slice from a string/array/traversable object value
     *
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
     * @param array $value
     * @return array
     */
    public function sort(array $value): array
    {
    }
}
