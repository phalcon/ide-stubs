<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug\Report;

use Phalcon\Contracts\Support\SupportTypes;

/**
 * Carries all data collected for an exception, ready to be rendered. Holds no
 * presentation logic.
 *
 * @phpstan-import-type support_debug_included_files from SupportTypes
 * @phpstan-import-type support_debug_superglobal from SupportTypes
 * @phpstan-import-type support_debug_variables from SupportTypes
 */
final class ExceptionReport
{
    /**
     * @var BacktraceItem[]
     */
    private array $backtrace = [];

    private string $className;

    private string $file;

    /**
     * @phpstan-var support_debug_included_files
     */
    private array $includedFiles = [];

    private int $line;

    private int $memoryUsage = 0;

    private string $message;

    private int $peakMemoryUsage = 0;

    /**
     * @phpstan-var support_debug_superglobal
     */
    private array $request = [];

    /**
     * @phpstan-var support_debug_superglobal
     */
    private array $server = [];

    private bool $showBackTrace;

    private string $uri;

    /**
     * @phpstan-var support_debug_variables
     */
    private array $variables = [];

    /**
     * @param string $className
     * @param string $message
     * @param string $file
     * @param int $line
     * @param bool $showBackTrace
     * @param string $uri
     */
    public function __construct(string $className, string $message, string $file, int $line, bool $showBackTrace, string $uri)
    {
    }

    /**
     * @return BacktraceItem[]
     */
    public function getBacktrace(): array
    {
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
    }

    /**
     * @phpstan-return support_debug_included_files
     * @return array
     */
    public function getIncludedFiles(): array
    {
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
    }

    /**
     * @return int
     */
    public function getMemoryUsage(): int
    {
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * @return int
     */
    public function getPeakMemoryUsage(): int
    {
    }

    /**
     * @phpstan-return support_debug_superglobal
     * @return array
     */
    public function getRequest(): array
    {
    }

    /**
     * @phpstan-return support_debug_superglobal
     * @return array
     */
    public function getServer(): array
    {
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
    }

    /**
     * @phpstan-return support_debug_variables
     * @return array
     */
    public function getVariables(): array
    {
    }

    /**
     * @return bool
     */
    public function hasVariables(): bool
    {
    }

    /**
     * @return bool
     */
    public function isShowBackTrace(): bool
    {
    }

    /**
     * @param BacktraceItem[] $backtrace
     * @return static
     */
    public function setBacktrace(array $backtrace): static
    {
    }

    /**
     * @phpstan-param support_debug_included_files $includedFiles
     * @param array $includedFiles
     * @return static
     */
    public function setIncludedFiles(array $includedFiles): static
    {
    }

    /**
     * @param int $memoryUsage
     * @return static
     */
    public function setMemoryUsage(int $memoryUsage): static
    {
    }

    /**
     * @param int $peakMemoryUsage
     * @return static
     */
    public function setPeakMemoryUsage(int $peakMemoryUsage): static
    {
    }

    /**
     * @phpstan-param support_debug_superglobal $request
     * @param array $request
     * @return static
     */
    public function setRequest(array $request): static
    {
    }

    /**
     * @phpstan-param support_debug_superglobal $server
     * @param array $server
     * @return static
     */
    public function setServer(array $server): static
    {
    }

    /**
     * @phpstan-param support_debug_variables $variables
     * @param array $variables
     * @return static
     */
    public function setVariables(array $variables): static
    {
    }
}
