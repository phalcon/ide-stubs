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
 * Represents a single resolved frame of an exception backtrace.
 */
final class BacktraceItem
{
    /**
     * @var array
     */
    protected $args = [];

    /**
     * @var string|null
     */
    protected $classLink = null;

    /**
     * @var string|null
     */
    protected $className = null;

    /**
     * @var string|null
     */
    protected $file = null;

    /**
     * @var array|null
     */
    protected $fragment = null;

    /**
     * @var string|null
     */
    protected $functionLink = null;

    /**
     * @var string
     */
    protected $functionName;

    /**
     * @var bool
     */
    protected $hasArgs = false;

    /**
     * @var int|null
     */
    protected $line = null;

    /**
     * @var string|null
     */
    protected $type = null;

    /**
     * @param string      $functionName
     * @param string|null $type
     * @param string|null $className
     * @param string|null $classLink
     * @param string|null $functionLink
     * @param bool        $hasArgs
     * @param array       $args
     * @param string|null $file
     * @param int|null    $line
     * @param array|null  $fragment
     */
    public function __construct(string $functionName, $type = null, $className = null, $classLink = null, $functionLink = null, bool $hasArgs = false, array $args = [], $file = null, $line = null, $fragment = null)
    {
    }

    /**
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
