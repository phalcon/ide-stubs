<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Access;

use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Contracts\Auth\Guard\Guard;

/**
 * @phpstan-import-type ForwardTarget from Access
 * @phpstan-import-type AccessContext from Access
 */
abstract class AbstractAccess implements \Phalcon\Contracts\Auth\Access\Access
{
    /**
     * @var array
     */
    protected $exceptActions = [];

    /**
     * @var array
     */
    protected $onlyActions = [];

    /**
     * @phpstan-return list<string>
     * @return array
     */
    public function getExceptActions(): array
    {
    }

    /**
     * @phpstan-return list<string>
     * @return array
     */
    public function getOnlyActions(): array
    {
    }

    /**
     * @phpstan-param AccessContext $context
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @param string $actionName
     * @param array $context
     * @return bool
     */
    public function isAllowed(\Phalcon\Contracts\Auth\Guard\Guard $guard, string $actionName, array $context = []): bool
    {
    }

    /**
     * @phpstan-return ForwardTarget|null
     * @return array|null
     */
    public function redirectTo(): array|null
    {
    }

    /**
     * @param list<string> $exceptActions
     * @return void
     */
    public function setExceptActions(array $exceptActions = []): void
    {
    }

    /**
     * @param list<string> $onlyActions
     * @return void
     */
    public function setOnlyActions(array $onlyActions = []): void
    {
    }

    /**
     * Whether the gate's base condition holds for the given identity.
     *
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @return bool
     */
    abstract protected function allowedIf(\Phalcon\Contracts\Auth\Guard\Guard $guard): bool;
}
