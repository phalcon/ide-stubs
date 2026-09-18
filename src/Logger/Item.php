<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use DateTimeImmutable;
use Phalcon\Contracts\Logger\LoggerTypes;

/**
 * Phalcon\Logger\Item
 *
 * Represents each item in a logging transaction
 *
 * @phpstan-import-type logger_context from LoggerTypes
 */
class Item
{
    protected array $context = [];

    protected \DateTimeImmutable $dateTime;

    protected int $level;

    protected string $levelName;

    protected string $message;

    /**
     * Item constructor.
     *
     * @phpstan-param logger_context $context
     * @param string $message
     * @param string $levelName
     * @param int $level
     * @param \DateTimeImmutable $dateTime
     * @param array $context
     */
    public function __construct(string $message, string $levelName, int $level, \DateTimeImmutable $dateTime, array $context = [])
    {
    }

    /**
     * @phpstan-return logger_context
     * @return array
     */
    public function getContext(): array
    {
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDateTime(): DateTimeImmutable
    {
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
    }

    /**
     * @return string
     */
    public function getLevelName(): string
    {
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
    }
}
