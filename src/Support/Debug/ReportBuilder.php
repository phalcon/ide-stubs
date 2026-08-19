<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Debug;

use Phalcon\Contracts\Support\SupportTypes;
use Phalcon\Support\Debug\Report\BacktraceItem;
use Phalcon\Support\Debug\Report\ExceptionReport;
use Phalcon\Traits\Php\InfoTrait;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use Throwable;

/**
 * Collects the runtime data for an exception (backtrace, superglobals, included
 * files, memory, variables) into an ExceptionReport. Holds no presentation
 * logic.
 *
 * @phpstan-import-type support_debug_blacklist from SupportTypes
 * @phpstan-import-type support_debug_fragment from SupportTypes
 * @phpstan-import-type support_debug_superglobal from SupportTypes
 * @phpstan-import-type support_debug_trace from SupportTypes
 * @phpstan-import-type support_debug_variables from SupportTypes
 */
class ReportBuilder
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;
    use \Phalcon\Traits\Php\InfoTrait;



    /**
     * @phpstan-param support_debug_blacklist $blacklist
     * @phpstan-param support_debug_variables $data
     *
     * @return ExceptionReport
     * @throws ReflectionException
     * @param \Throwable $exception
     * @param array $blacklist
     * @param bool $showBackTrace
     * @param bool $showFiles
     * @param bool $showFileFragment
     * @param string $uri
     * @param array $data
     */
    public function build(\Throwable $exception, array $blacklist, bool $showBackTrace, bool $showFiles, bool $showFileFragment, string $uri, array $data): ExceptionReport
    {
    }

    /**
     * @phpstan-return support_debug_fragment
     * @param string $file
     * @param int $line
     * @param bool $showFileFragment
     * @return array
     */
    private function buildFragment(string $file, int $line, bool $showFileFragment): array
    {
    }

    /**
     * @phpstan-param support_debug_trace $trace
     *
     * @param array<array-key, mixed> $trace
     * @param bool                    $showFiles
     * @param bool                    $showFileFragment
     *
     * @return BacktraceItem
     * @throws ReflectionException
     */
    private function buildItem(array $trace, bool $showFiles, bool $showFileFragment): BacktraceItem
    {
    }

    /**
     * @phpstan-param  support_debug_superglobal $source
     * @phpstan-param  array<string, int>        $blacklist
     * @phpstan-return support_debug_superglobal
     * @param array $source
     * @param array $blacklist
     * @return array
     */
    private function filter(array $source, array $blacklist): array
    {
    }

    /**
     * @phpstan-param class-string $className
     *
     * @throws ReflectionException
     * @param string $className
     * @return string|null
     */
    private function resolveClassLink(string $className): string|null
    {
    }

    /**
     * @throws ReflectionException
     * @param string $functionName
     * @return string|null
     */
    private function resolveFunctionLink(string $functionName): string|null
    {
    }
}
