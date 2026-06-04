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
use Phalcon\Contracts\Auth\Manager;

/**
 * @phpstan-import-type ForwardTarget from Access
 */
abstract class AbstractAccess implements \Phalcon\Contracts\Auth\Access\Access
{
    /**
     * @var array
     */
    protected $exceptActions = [];

    /**
     * @var Manager
     */
    protected $manager;

    /**
     * @var array
     */
    protected $onlyActions = [];

    /**
     * @param \Phalcon\Contracts\Auth\Manager $manager
     */
    public function __construct(\Phalcon\Contracts\Auth\Manager $manager)
    {
    }

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
     * @param string $actionName
     * @return bool
     */
    public function isAllowed(string $actionName): bool
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
}
