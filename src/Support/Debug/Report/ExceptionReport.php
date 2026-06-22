<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug\Report;

/**
 * Carries all data collected for an exception, ready to be rendered. Holds no
 * presentation logic.
 */
final class ExceptionReport
{
    /**
     * @var BacktraceItem[]
     */
    protected $backtrace = [];

    /**
     * @var string
     */
    protected $className;

    /**
     * @var string
     */
    protected $file;

    /**
     * @var array
     */
    protected $includedFiles = [];

    /**
     * @var int
     */
    protected $line;

    /**
     * @var int
     */
    protected $memoryUsage = 0;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var int
     */
    protected $peakMemoryUsage = 0;

    /**
     * @var array
     */
    protected $request = [];

    /**
     * @var array
     */
    protected $server = [];

    /**
     * @var bool
     */
    protected $showBackTrace;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var array
     */
    protected $variables = [];

    /**
     * @param string $className
     * @param string $message
     * @param string $file
     * @param int    $line
     * @param bool   $showBackTrace
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
     * @return array
     */
    public function getRequest(): array
    {
    }

    /**
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
     *
     * @return static
     */
    public function setBacktrace(array $backtrace): static
    {
    }

    /**
     * @param array $includedFiles
     *
     * @return static
     */
    public function setIncludedFiles(array $includedFiles): static
    {
    }

    /**
     * @param int $memoryUsage
     *
     * @return static
     */
    public function setMemoryUsage(int $memoryUsage): static
    {
    }

    /**
     * @param int $peakMemoryUsage
     *
     * @return static
     */
    public function setPeakMemoryUsage(int $peakMemoryUsage): static
    {
    }

    /**
     * @param array $request
     *
     * @return static
     */
    public function setRequest(array $request): static
    {
    }

    /**
     * @param array $server
     *
     * @return static
     */
    public function setServer(array $server): static
    {
    }

    /**
     * @param array $variables
     *
     * @return static
     */
    public function setVariables(array $variables): static
    {
    }
}
