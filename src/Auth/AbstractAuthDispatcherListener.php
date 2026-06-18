<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth;

use Phalcon\Auth\Exceptions\AccessDenied;
use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Contracts\Auth\Manager;

/**
 * Shared enforcement algorithm for the Cli, Mvc and Micro auth listeners.
 * The subclass provides the action name and context from its event source,
 * the action-kind label used in the access-denied exception, and (Mvc only)
 * a forward handler for Access::redirectTo().
 *
 * Enforcement is fail-open: when the manager has no active access
 * (Manager::getAccess() === null) every dispatch is allowed. A policy
 * activated via Manager::access() persists across forwards and nested
 * dispatches in the same request until it is replaced.
 *
 * @phpstan-import-type AccessContext from Access
 */
abstract class AbstractAuthDispatcherListener
{
    /**
     * @var Manager
     */
    protected $manager;

    /**
     * @param \Phalcon\Contracts\Auth\Manager $manager
     */
    public function __construct(\Phalcon\Contracts\Auth\Manager $manager)
    {
    }

    /**
     * Returns the kind label used by AccessDenied (e.g. 'task', 'action',
     * 'route').
     *
     * @return string
     */
    abstract protected function getActionType(): string;

    /**
     * Runs the access check for the given action name. Returns true when
     * the dispatch should proceed, false when a forward was issued, and
     * throws when access is denied without a redirect target.
     *
     * The guard is fetched only when an access is active, so the no-op
     * path works without a default guard.
     *
     * @phpstan-param AccessContext $context
     * @phpstan-param callable|null $forwardHandler
     *
     * @throws Exception
     * @param string $actionName
     * @param array $context
     * @param mixed $forwardHandler
     * @return bool
     */
    protected function enforce(string $actionName, array $context = [], $forwardHandler = null): bool
    {
    }
}
