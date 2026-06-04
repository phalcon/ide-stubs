<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Auth\Access;

/**
 * @phpstan-type ForwardTarget array{
 *     controller?: string,
 *     action?: string,
 *     params?: array<int|string, mixed>,
 *     namespace?: string,
 *     task?: string,
 * }&array<string, mixed>
 */
interface Access
{
    /**
     * @return bool
     */
    public function allowedIf(): bool;

    /**
     * @return list<string>
     */
    public function getExceptActions(): array;

    /**
     * @return list<string>
     */
    public function getOnlyActions(): array;

    /**
     * @param string $actionName
     * @return bool
     */
    public function isAllowed(string $actionName): bool;

    /**
     * @phpstan-return ForwardTarget|null
     * @return array|null
     */
    public function redirectTo(): array|null;

    /**
     * @param list<string> $exceptActions
     * @return void
     */
    public function setExceptActions(array $exceptActions = []): void;

    /**
     * @param list<string> $onlyActions
     * @return void
     */
    public function setOnlyActions(array $onlyActions = []): void;
}
