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
 * Represents a single resolved frame of an exception backtrace.
 *
 * @phpstan-import-type support_debug_args from SupportTypes
 * @phpstan-import-type support_debug_fragment from SupportTypes
 */
final class BacktraceItem
{
    /**
     * @phpstan-param support_debug_args          $args
     */
    private array $args = [];

    private ?string $classLink = null;

    private ?string $className = null;

    private ?string $file = null;

    /**
     * @phpstan-param support_debug_fragment|null $fragment
     */
    private ?array $fragment = null;

    private ?string $functionLink = null;

    private string $functionName;

    private bool $hasArgs = false;

    private ?int $line = null;

    private ?string $type = null;

    /**
     * @param string $functionName
     * @param string|null $type
     * @param string|null $className
     * @param string|null $classLink
     * @param string|null $functionLink
     * @param bool $hasArgs
     * @param array $args
     * @param string|null $file
     * @param int|null $line
     * @param mixed $fragment
     */
    public function __construct(string $functionName, ?string $type = null, ?string $className = null, ?string $classLink = null, ?string $functionLink = null, bool $hasArgs = false, array $args = [], ?string $file = null, ?int $line = null, $fragment = null)
    {
    }

    /**
     * @phpstan-return support_debug_args
     * @return array
     */
    public function getArgs(): array
    {
    }

    /**
     * @return string|null
     */
    public function getClassLink(): string|null
    {
    }

    /**
     * @return string|null
     */
    public function getClassName(): string|null
    {
    }

    /**
     * @return string|null
     */
    public function getFile(): string|null
    {
    }

    /**
     * @phpstan-return support_debug_fragment|null
     * @return array|null
     */
    public function getFragment(): array|null
    {
    }

    /**
     * @return string|null
     */
    public function getFunctionLink(): string|null
    {
    }

    /**
     * @return string
     */
    public function getFunctionName(): string
    {
    }

    /**
     * @return int|null
     */
    public function getLine(): int|null
    {
    }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
    }

    /**
     * @return bool
     */
    public function hasArgs(): bool
    {
    }
}
