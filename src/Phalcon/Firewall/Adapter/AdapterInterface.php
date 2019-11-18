<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Firewall\Adapter;

use Closure;

/**
 * Interface for Phalcon\Mvc\Dispatcher\Firewall adapters
 */
interface AdapterInterface
{

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAccess(): int;

    /**
     * Gets role callback to fetch role name
     *
     * @return Closure
     */
    public function getRoleCallback(): Closure;

    /**
     * Gets always resolving role option
     *
     * @return bool
     */
    public function isAlwaysResolvingRole(): bool;

    /**
     * Sets always resolving role option
     *
     * @param bool $alwaysResolvingRole
     * @return void
     */
    public function setAlwaysResolvingRole(bool $alwaysResolvingRole);

    /**
     * Sets cache backend
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @return AdapterInterface
     */
    public function setCache(\Phalcon\Cache\Adapter\AdapterInterface $cache): AdapterInterface;

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     * @return AdapterInterface
     */
    public function setDefaultAccess(int $defaultAccess): AdapterInterface;

    /**
     * Sets role callback to fetch role name
     *
     * @param \Closure $callback
     * @return AdapterInterface
     */
    public function setRoleCallback(\Closure $callback): AdapterInterface;
}
