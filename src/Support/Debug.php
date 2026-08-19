<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support;

use Phalcon\Contracts\Support\Debug\Renderer;
use Phalcon\Contracts\Support\SupportTypes;
use Phalcon\Support\Debug\Exceptions\RequestHalted;
use Phalcon\Support\Debug\Exceptions\RuntimeWarning;
use Phalcon\Support\Debug\Renderer\HtmlRenderer;
use Phalcon\Support\Debug\ReportBuilder;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use ReflectionException;
use Throwable;

/**
 * Listens for uncaught exceptions and renders them. Acts as a thin coordinator
 * delegating data collection to ReportBuilder and presentation to a Renderer.
 *
 * @phpstan-import-type support_debug_blacklist from SupportTypes
 * @phpstan-import-type support_debug_blacklist_input from SupportTypes
 * @phpstan-import-type support_debug_variables from SupportTypes
 */
class Debug
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;


    protected static bool $isActive = false;

    /**
     * @phpstan-var support_debug_blacklist
     */
    protected array $blacklist = ['request' => [], 'server' => []];

    /**
     * @phpstan-var support_debug_variables
     */
    protected array $data = [];

    protected bool $hideDocumentRoot = false;

    protected \Phalcon\Contracts\Support\Debug\Renderer $renderer;

    protected \Phalcon\Support\Debug\ReportBuilder $reportBuilder;

    protected bool $showBackTrace = true;

    protected bool $showFileFragment = false;

    protected bool $showFiles = true;

    protected string $uri = 'https://assets.phalcon.io/debug/5.0.x/';

    public function __construct()
    {
    }

    /**
     * Clears are variables added previously
     *
     * @return static
     */
    public function clearVars(): static
    {
    }

    /**
     * Adds a variable to the debug output
     *
     * @param mixed $variable
     * @return static
     */
    public function debugVar($variable): static
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
     * Returns the renderer used to produce the output
     *
     * @return Renderer
     */
    public function getRenderer(): Renderer
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
     * @throws RequestHalted
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
     * @return static
     */
    public function listen(bool $exceptions = true, bool $lowSeverity = false): static
    {
    }

    /**
     * Listen for uncaught exceptions
     *
     * @return static
     */
    public function listenExceptions(): static
    {
    }

    /**
     * Listen for non silent notices or warnings
     *
     * @return static
     */
    public function listenLowSeverity(): static
    {
    }

    /**
     * Handles uncaught exceptions
     *
     * @throws ReflectionException
     * @param \Throwable $exception
     * @return bool
     */
    public function onUncaughtException(\Throwable $exception): bool
    {
    }

    /**
     * Throws an exception when a notice or warning is raised
     *
     * @throws RuntimeWarning
     * @param int $severity
     * @param string $message
     * @param string $file
     * @param int $line
     * @return void
     */
    public function onUncaughtLowSeverity(int $severity, string $message, string $file, int $line): void
    {
    }

    /**
     * Render exception to html format.
     *
     * @throws ReflectionException
     * @param \Throwable $exception
     * @return string
     */
    public function renderHtml(\Throwable $exception): string
    {
    }

    /**
     * Sets if files the exception's backtrace must be showed
     *
     * @phpstan-param support_debug_blacklist_input $blacklist
     * @param array $blacklist
     * @return static
     */
    public function setBlacklist(array $blacklist): static
    {
    }

    /**
     * Sets the renderer used to produce the output
     *
     * @param \Phalcon\Contracts\Support\Debug\Renderer $renderer
     * @return static
     */
    public function setRenderer(\Phalcon\Contracts\Support\Debug\Renderer $renderer): static
    {
    }

    /**
     * Sets if files the exception's backtrace must be showed
     *
     * @param bool $showBackTrace
     * @return static
     */
    public function setShowBackTrace(bool $showBackTrace): static
    {
    }

    /**
     * Sets if files must be completely opened and showed in the output
     * or just the fragment related to the exception
     *
     * @param bool $showFileFragment
     * @return static
     */
    public function setShowFileFragment(bool $showFileFragment): static
    {
    }

    /**
     * Set if files part of the backtrace must be shown in the output
     *
     * @param bool $showFiles
     * @return static
     */
    public function setShowFiles(bool $showFiles): static
    {
    }

    /**
     * Change the base URI for static resources
     *
     * @param string $uri
     * @return static
     */
    public function setUri(string $uri): static
    {
    }
}
