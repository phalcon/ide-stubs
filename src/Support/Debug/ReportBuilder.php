<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug;

use Phalcon\Support\Debug\Report\BacktraceItem;
use Phalcon\Support\Debug\Report\ExceptionReport;
use Phalcon\Support\Helper\Arr\Get;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use Throwable;

/**
 * Collects the runtime data for an exception (backtrace, superglobals, included
 * files, memory, variables) into an ExceptionReport. Holds no presentation
 * logic.
 */
class ReportBuilder
{
    /**
     * @param Throwable $exception
     * @param array     $blacklist
     * @param bool      $showBackTrace
     * @param bool      $showFiles
     * @param bool      $showFileFragment
     * @param string    $uri
     * @param array     $data
     *
     * @return ExceptionReport
     * @throws ReflectionException
     */
    public function build(\Throwable $exception, array $blacklist, bool $showBackTrace, bool $showFiles, bool $showFileFragment, string $uri, array $data): ExceptionReport
    {
    }

    /**
     * @param string $file
     * @param int    $line
     * @param bool   $showFileFragment
     *
     * @return array
     */
    private function buildFragment(string $file, int $line, bool $showFileFragment): array
    {
    }

    /**
     * @param array $trace
     * @param bool  $showFiles
     * @param bool  $showFileFragment
     *
     * @return BacktraceItem
     * @throws ReflectionException
     */
    private function buildItem(array $trace, bool $showFiles, bool $showFileFragment): BacktraceItem
    {
    }

    /**
     * @param array $source
     * @param array $blacklist
     *
     * @return array
     */
    private function filter(array $source, array $blacklist): array
    {
    }

    /**
     * @param string $className
     *
     * @return string|null
     * @throws ReflectionException
     */
    private function resolveClassLink(string $className): string|null
    {
    }

    /**
     * @param string $functionName
     *
     * @return string|null
     * @throws ReflectionException
     */
    private function resolveFunctionLink(string $functionName): string|null
    {
    }
}
