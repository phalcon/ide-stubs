<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support;

use ErrorException;
use Phalcon\Support\Debug\Exception;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use Throwable;

/**
 * Provides debug capabilities to Phalcon applications
 */
class Debug
{

    /**
     * @var array
     */
    protected $blacklist = ['request' => [], 'server' => []];

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var bool
     */
    protected $hideDocumentRoot = false;

    /**
     * @var bool
     */
    static protected $isActive = false;

    /**
     * @var bool
     */
    protected $showBackTrace = true;

    /**
     * @var bool
     */
    protected $showFileFragment = false;

    /**
     * @var bool
     */
    protected $showFiles = true;

    /**
     * @var string
     */
    protected $uri = 'https://assets.phalcon.io/debug/5.0.x/';

    /**
     * Clears are variables added previously
     *
     * @return Debug
     */
    public function clearVars(): Debug
    {
    }

    /**
     * Adds a variable to the debug output
     *
     * @param mixed $variable
     * @param mixed $varz
     * @return Debug
     */
    public function debugVar($varz): Debug
    {
    }

    /**
     * Returns the CSS sources
     *
     * @return string
     */
    public function getCssSources(): string
    {
    }

    /**
     * Returns the JavaScript sources
     *
     * @return string
     */
    public function getJsSources(): string
    {
    }

    /**
     * Generates a link to the current version documentation
     *
     * @return string
     */
    public function getVersion(): string
    {
    }

    /**
     * Halts the request showing a backtrace
     *
     * @throws Exception
     * @return void
     */
    public function halt(): void
    {
    }

    /**
     * Listen for uncaught exceptions and non silent notices or warnings
     *
     * @param bool $exceptions
     * @param bool $lowSeverity
     * @return Debug
     */
    public function listen(bool $exceptions = true, bool $lowSeverity = false): Debug
    {
    }

    /**
     * Listen for uncaught exceptions
     *
     * @return Debug
     */
    public function listenExceptions(): Debug
    {
    }

    /**
     * Listen for non silent notices or warnings
     *
     * @return Debug
     */
    public function listenLowSeverity(): Debug
    {
    }

    /**
     * Handles uncaught exceptions
     *
     * @param \Throwable $exception
     * @return bool
     */
    public function onUncaughtException(\Throwable $exception): bool
    {
    }

    /**
     * Throws an exception when a notice or warning is raised
     *
     * @param mixed $severity
     * @param mixed $message
     * @param mixed $file
     * @param mixed $line
     * @param mixed $context
     * @return void
     */
    public function onUncaughtLowSeverity($severity, $message, $file, $line, $context): void
    {
    }

    /**
     * Render exception to html format.
     *
     * @param Throwable $exception
     *
     * @return string
     * @throws ReflectionException
     */
    public function renderHtml(\Throwable $exception): string
    {
    }

    /**
     * Sets if files the exception's backtrace must be showed
     *
     * @param array $blacklist
     * @return Debug
     */
    public function setBlacklist(array $blacklist): Debug
    {
    }

    /**
     * Sets if files the exception's backtrace must be showed
     *
     * @param bool $showBackTrace
     * @return Debug
     */
    public function setShowBackTrace(bool $showBackTrace): Debug
    {
    }

    /**
     * Sets if files must be completely opened and showed in the output
     * or just the fragment related to the exception
     *
     * @param bool $showFileFragment
     * @return Debug
     */
    public function setShowFileFragment(bool $showFileFragment): Debug
    {
    }

    /**
     * Set if files part of the backtrace must be shown in the output
     *
     * @param bool $showFiles
     * @return Debug
     */
    public function setShowFiles(bool $showFiles): Debug
    {
    }

    /**
     * Change the base URI for static resources
     *
     * @param string $uri
     * @return Debug
     */
    public function setUri(string $uri): Debug
    {
    }

    /**
     * Escapes a string with htmlentities
     *
     * @param string $value
     * @return string
     */
    protected function escapeString(string $value): string
    {
    }

    /**
     * Produces a recursive representation of an array
     *
     * @param array $arguments
     * @param int   $number
     *
     * @return string|null
     * @param array $argument
     * @param mixed $n
     */
    protected function getArrayDump(array $argument, $n = 0): ?string
    {
    }

    /**
     * Produces an string representation of a variable
     *
     * @param mixed $variable
     * @return string
     */
    protected function getVarDump($variable): string
    {
    }

    /**
     * Shows a backtrace item
     *
     * @param int   $n
     * @param array $trace
     *
     * @return string
     * @throws ReflectionException
     */
    final protected function showTraceItem(int $n, array $trace): string
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    private function getArrVal(array $collection, $index, $defaultValue = null)
    {
    }
}
