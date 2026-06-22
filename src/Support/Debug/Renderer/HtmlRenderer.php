<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug\Renderer;

use Phalcon\Contracts\Support\Debug\Renderer;
use Phalcon\Support\Debug\Report\BacktraceItem;
use Phalcon\Support\Debug\Report\ExceptionReport;
use Phalcon\Support\Version;

/**
 * Renders an ExceptionReport as the HTML debug page using embedded, overridable
 * template strings filled by strtr. All styling and interactivity (theme, tabs,
 * syntax highlighting, copy/editor links) are provided by the external
 * debug.css / debug.js assets.
 */
class HtmlRenderer implements \Phalcon\Contracts\Support\Debug\Renderer
{
    /**
     * Template overrides keyed by name.
     *
     * @todo Move getTemplate()/setTemplate()/templates into a shared trait once
     *       Zephir supports traits (mirrors
     *       Phalcon\Support\Debug\Traits\TemplateAwareTrait in the PHP source).
     *
     * @var array
     */
    protected $templates = [];

    /**
     * @param string $uri
     *
     * @return string
     */
    public function getCssSources(string $uri): string
    {
    }

    /**
     * @param string $uri
     *
     * @return string
     */
    public function getJsSources(string $uri): string
    {
    }

    /**
     * Returns the template for the given name (override if set, default
     * otherwise).
     *
     * @param string $name
     *
     * @return string
     */
    public function getTemplate(string $name): string
    {
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
    }

    /**
     * @param ExceptionReport $report
     *
     * @return string
     */
    public function render(\Phalcon\Support\Debug\Report\ExceptionReport $report): string
    {
    }

    /**
     * Overrides the template for the given name.
     *
     * @param string $name
     * @param string $template
     *
     * @return static
     */
    public function setTemplate(string $name, string $template): static
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
     * Escapes a string with htmlentities
     *
     * @param string $value
     *
     * @return string
     */
    protected function escapeString(string $value): string
    {
    }

    /**
     * Produces a recursive representation of an array
     *
     * @param array $argument
     * @param int   $n
     *
     * @return string|null
     * @param int $number
     */
    protected function getArrayDump(array $argument, int $number = 0): string|null
    {
    }

    /**
     * Produces a string representation of a variable
     *
     * @param mixed $variable
     *
     * @return string
     */
    protected function getVarDump($variable): string
    {
    }

    /**
     * @param int $bytes
     *
     * @return string
     */
    private function formatBytes(int $bytes): string
    {
    }

    /**
     * Frames whose file lives outside a vendor directory are application code.
     *
     * @param string|null $file
     *
     * @return bool
     */
    private function isApp($file): bool
    {
    }

    /**
     * @param BacktraceItem[] $backtrace
     *
     * @return string
     */
    private function renderBacktrace(array $backtrace): string
    {
    }

    /**
     * @param array $fragment
     *
     * @return string
     */
    private function renderFragment(array $fragment): string
    {
    }

    /**
     * @param array $files
     *
     * @return string
     */
    private function renderIncludedFiles(array $files): string
    {
    }

    /**
     * @param ExceptionReport $report
     *
     * @return string
     */
    private function renderMemory(\Phalcon\Support\Debug\Report\ExceptionReport $report): string
    {
    }

    /**
     * @param BacktraceItem $item
     *
     * @return string
     */
    private function renderSignature(\Phalcon\Support\Debug\Report\BacktraceItem $item): string
    {
    }

    /**
     * @param string $div
     * @param array  $source
     *
     * @return string
     */
    private function renderSuperglobal(string $div, array $source): string
    {
    }

    /**
     * @param ExceptionReport $report
     *
     * @return string
     */
    private function renderTabs(\Phalcon\Support\Debug\Report\ExceptionReport $report): string
    {
    }

    /**
     * @param int           $index
     * @param BacktraceItem $item
     *
     * @return string
     */
    private function renderTraceItem(int $index, \Phalcon\Support\Debug\Report\BacktraceItem $item): string
    {
    }

    /**
     * @param array $variables
     *
     * @return string
     */
    private function renderVariables(array $variables): string
    {
    }
}
