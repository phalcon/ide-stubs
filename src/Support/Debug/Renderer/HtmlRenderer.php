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
use Phalcon\Contracts\Support\SupportTypes;
use Phalcon\Support\Debug\Report\BacktraceItem;
use Phalcon\Support\Debug\Report\ExceptionReport;
use Phalcon\Support\Debug\Traits\TemplateAwareTrait;
use Phalcon\Support\Version;
use Phalcon\Traits\Support\Helper\Str\InterpolateTrait;

/**
 * Renders an ExceptionReport as the HTML debug page using embedded, overridable
 * template strings filled by the interpolator. All styling and interactivity
 * (theme, tabs, syntax highlighting, copy/editor links) are provided by the
 * external debug.css / debug.js assets.
 *
 * @phpstan-import-type support_debug_args from SupportTypes
 * @phpstan-import-type support_debug_fragment from SupportTypes
 * @phpstan-import-type support_debug_included_files from SupportTypes
 * @phpstan-import-type support_debug_superglobal from SupportTypes
 * @phpstan-import-type support_debug_variables from SupportTypes
 */
class HtmlRenderer implements \Phalcon\Contracts\Support\Debug\Renderer
{
    use \Phalcon\Traits\Support\Helper\Str\InterpolateTrait;
    use \Phalcon\Support\Debug\Traits\TemplateAwareTrait;



    /**
     * @param string $uri
     * @return string
     */
    public function getCssSources(string $uri): string
    {
    }

    /**
     * @param string $uri
     * @return string
     */
    public function getJsSources(string $uri): string
    {
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
    }

    /**
     * @param \Phalcon\Support\Debug\Report\ExceptionReport $report
     * @return string
     */
    public function render(\Phalcon\Support\Debug\Report\ExceptionReport $report): string
    {
    }

    /**
     * Returns the embedded default template for the given name.
     *
     * @param string $name
     * @return string
     */
    protected function defaultTemplate(string $name): string
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
     * @phpstan-param support_debug_args $arguments
     * @param array $arguments
     * @param int $number
     * @return string|null
     */
    protected function getArrayDump(array $arguments, int $number = 0): string|null
    {
    }

    /**
     * Produces a string representation of a variable
     *
     * @param mixed $variable
     * @return string
     */
    protected function getVarDump($variable): string
    {
    }

    /**
     * @param int $bytes
     * @return string
     */
    private function formatBytes(int $bytes): string
    {
    }

    /**
     * Frames whose file lives outside a vendor directory are application code.
     *
     * @param string|null $file
     * @return bool
     */
    private function isApp(?string $file = null): bool
    {
    }

    /**
     * @param BacktraceItem[] $backtrace
     * @return string
     */
    private function renderBacktrace(array $backtrace): string
    {
    }

    /**
     * @phpstan-param support_debug_fragment $fragment
     * @param array $fragment
     * @return string
     */
    private function renderFragment(array $fragment): string
    {
    }

    /**
     * @phpstan-param support_debug_included_files $files
     * @param array $files
     * @return string
     */
    private function renderIncludedFiles(array $files): string
    {
    }

    /**
     * @param \Phalcon\Support\Debug\Report\ExceptionReport $report
     * @return string
     */
    private function renderMemory(\Phalcon\Support\Debug\Report\ExceptionReport $report): string
    {
    }

    /**
     * @param \Phalcon\Support\Debug\Report\BacktraceItem $item
     * @return string
     */
    private function renderSignature(\Phalcon\Support\Debug\Report\BacktraceItem $item): string
    {
    }

    /**
     * @phpstan-param support_debug_superglobal $source
     * @param string $div
     * @param array $source
     * @return string
     */
    private function renderSuperglobal(string $div, array $source): string
    {
    }

    /**
     * @param \Phalcon\Support\Debug\Report\ExceptionReport $report
     * @return string
     */
    private function renderTabs(\Phalcon\Support\Debug\Report\ExceptionReport $report): string
    {
    }

    /**
     * @param int $index
     * @param \Phalcon\Support\Debug\Report\BacktraceItem $item
     * @return string
     */
    private function renderTraceItem(int $index, \Phalcon\Support\Debug\Report\BacktraceItem $item): string
    {
    }

    /**
     * @phpstan-param support_debug_variables $variables
     * @param array $variables
     * @return string
     */
    private function renderVariables(array $variables): string
    {
    }
}
