<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Auth\Access;

use Phalcon\Contracts\Auth\Guard\Guard;

/**
 * Access gates are Specifications: policies that decide whether the current
 * identity may run the given action. The enforcement point passes the
 * identity (the guard) and the request context on every call; gates hold no
 * reference to the auth manager.
 *
 * @phpstan-type ForwardTarget array{
 *     controller?: string,
 *     action?: string,
 *     params?: array<int|string, mixed>,
 *     namespace?: string,
 *     task?: string,
 * }&array<string, mixed>
 * @phpstan-type AccessContext array{
 *     handler?: string,
 *     module?: string,
 *     params?: array<int|string, mixed>,
 * }
 */
interface Access
{
    /**
     * @return list<string>
     */
    public function getExceptActions(): array;

    /**
     * @return list<string>
     */
    public function getOnlyActions(): array;

    /**
     * Whether the identity behind the guard may run the action.
     *
     * @phpstan-param AccessContext $context
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @param string $actionName
     * @param array $context
     * @return bool
     */
    public function isAllowed(\Phalcon\Contracts\Auth\Guard\Guard $guard, string $actionName, array $context = []): bool;

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
