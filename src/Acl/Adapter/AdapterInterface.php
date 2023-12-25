<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl\Adapter;

use Phalcon\Acl\ComponentInterface;
use Phalcon\Acl\RoleInterface;

/**
 * Interface for Phalcon\Acl adapters
 */
interface AdapterInterface
{
    /**
     * Do a role inherit from another existing role
     *
     * @param string $roleName
     * @param mixed $roleToInherits
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherits): bool;

    /**
     * Adds a role to the ACL list. Second parameter lets to inherit access data
     * from other existing role
     *
     * @param mixed $role
     * @param mixed $accessInherits
     * @return bool
     */
    public function addRole($role, $accessInherits = null): bool;

    /**
     * Adds a component to the ACL list
     *
     * Access names can be a particular action, by example
     * search, update, delete, etc. or a list of them
     *
     * @param mixed $componentValue
     * @param mixed $accessList
     * @return bool
     */
    public function addComponent($componentValue, $accessList): bool;

    /**
     * Adds access to components
     *
     * @param string $componentName
     * @param mixed $accessList
     * @return bool
     */
    public function addComponentAccess(string $componentName, $accessList): bool;

    /**
     * Allow access to a role on a component
     *
     * @param string $roleName
     * @param string $componentName
     * @param mixed $access
     * @param mixed $func
     * @return void
     */
    public function allow(string $roleName, string $componentName, $access, $func = null): void;

    /**
     * Deny access to a role on a component
     *
     * @param string $roleName
     * @param string $componentName
     * @param mixed $access
     * @param mixed $func
     * @return void
     */
    public function deny(string $roleName, string $componentName, $access, $func = null): void;

    /**
     * Removes access from a component
     *
     * @param string $componentName
     * @param mixed $accessList
     * @return void
     */
    public function dropComponentAccess(string $componentName, $accessList): void;

    /**
     * Returns the access which the list is checking if some role can access it
     *
     * @return string|null
     */
    public function getActiveAccess(): string|null;

    /**
     * Returns the role which the list is checking if it's allowed to certain
     * component/access
     *
     * @return string|null
     */
    public function getActiveRole(): string|null;

    /**
     * Returns the component which the list is checking if some role can access
     * it
     *
     * @return string|null
     */
    public function getActiveComponent(): string|null;

    /**
     * Return an array with every component registered in the list
     *
     * @return array|\Phalcon\Acl\ComponentInterface[]
     */
    public function getComponents(): array;

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAction(): int;

    /**
     * Returns the inherited roles for a passed role name. If no role name
     * has been specified it will return the whole array. If the role has not
     * been found it returns an empty array
     *
     * @param string $roleName
     * @return array
     */
    public function getInheritedRoles(string $roleName = ''): array;

    /**
     * Returns the default ACL access level for no arguments provided in
     * isAllowed action if there exists func for accessKey
     *
     * @return int
     */
    public function getNoArgumentsDefaultAction(): int;

    /**
     * Return an array with every role registered in the list
     *
     * @return array|\Phalcon\Acl\RoleInterface[]
     */
    public function getRoles(): array;

    /**
     * Check whether a role is allowed to access an action from a component
     *
     * @param mixed $roleName
     * @param mixed $componentName
     * @param string $access
     * @param array $parameters
     * @return bool
     */
    public function isAllowed($roleName, $componentName, string $access, array $parameters = null): bool;

    /**
     * Check whether component exist in the components list
     *
     * @param string $componentName
     * @return bool
     */
    public function isComponent(string $componentName): bool;

    /**
     * Check whether role exist in the roles list
     *
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName): bool;

    /**
     * Sets the default access level (Phalcon\Ac\Enuml::ALLOW or Phalcon\Acl\Enum::DENY)
     *
     * @param int $defaultAccess
     * @return void
     */
    public function setDefaultAction(int $defaultAccess): void;

    /**
     * Sets the default access level (Phalcon\Acl\Enum::ALLOW or Phalcon\Acl\Enum::DENY)
     * for no arguments provided in isAllowed action if there exists func for
     * accessKey
     *
     * @param int $defaultAccess
     * @return void
     */
    public function setNoArgumentsDefaultAction(int $defaultAccess): void;
}
