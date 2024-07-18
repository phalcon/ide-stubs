<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl\Adapter;

use Phalcon\Acl\Enum;
use Phalcon\Acl\Role;
use Phalcon\Acl\RoleInterface;
use Phalcon\Acl\Component;
use Phalcon\Acl\Exception;
use Phalcon\Acl\RoleAwareInterface;
use Phalcon\Acl\ComponentAwareInterface;
use Phalcon\Acl\ComponentInterface;
use ReflectionClass;
use ReflectionFunction;

/**
 * Manages ACL lists in memory
 *
 * ```php
 * $acl = new \Phalcon\Acl\Adapter\Memory();
 *
 * $acl->setDefaultAction(
 *     \Phalcon\Acl\Enum::DENY
 * );
 *
 * // Register roles
 * $roles = [
 *     "users"  => new \Phalcon\Acl\Role("Users"),
 *     "guests" => new \Phalcon\Acl\Role("Guests"),
 * ];
 * foreach ($roles as $role) {
 *     $acl->addRole($role);
 * }
 *
 * // Private area components
 * $privateComponents = [
 *     "companies" => ["index", "search", "new", "edit", "save", "create", "delete"],
 *     "products"  => ["index", "search", "new", "edit", "save", "create", "delete"],
 *     "invoices"  => ["index", "profile"],
 * ];
 *
 * foreach ($privateComponents as $componentName => $actions) {
 *     $acl->addComponent(
 *         new \Phalcon\Acl\Component($componentName),
 *         $actions
 *     );
 * }
 *
 * // Public area components
 * $publicComponents = [
 *     "index"   => ["index"],
 *     "about"   => ["index"],
 *     "session" => ["index", "register", "start", "end"],
 *     "contact" => ["index", "send"],
 * ];
 *
 * foreach ($publicComponents as $componentName => $actions) {
 *     $acl->addComponent(
 *         new \Phalcon\Acl\Component($componentName),
 *         $actions
 *     );
 * }
 *
 * // Grant access to public areas to both users and guests
 * foreach ($roles as $role) {
 *     foreach ($publicComponents as $component => $actions) {
 *         $acl->allow($role->getName(), $component, "");
 *     }
 * }
 *
 * // Grant access to private area to role Users
 * foreach ($privateComponents as $component => $actions) {
 *     foreach ($actions as $action) {
 *         $acl->allow("Users", $component, $action);
 *     }
 * }
 * ```
 */
class Memory extends \Phalcon\Acl\Adapter\AbstractAdapter
{
    /**
     * Access
     *
     * @var mixed
     */
    protected $access;

    /**
     * Access List
     *
     * @var mixed
     */
    protected $accessList;

    /**
     * Returns the latest function used to acquire access
     *
     * @var mixed
     */
    protected $activeFunction;

    /**
     * Returns number of additional arguments(excluding role and resource) for active function
     *
     * @var int
     */
    protected $activeFunctionCustomArgumentsCount = 0;

    /**
     * Returns the latest key used to acquire access
     *
     * @var string|null
     */
    protected $activeKey = null;

    /**
     * Components
     *
     * @var mixed
     */
    protected $components;

    /**
     * Component Names
     *
     * @var mixed
     */
    protected $componentsNames;

    /**
     * Function List
     *
     * @var mixed
     */
    protected $func;

    /**
     * Default action for no arguments is `allow`
     *
     * @var mixed
     */
    protected $noArgumentsDefaultAction = Enum::DENY;

    /**
     * Roles
     *
     * @var mixed
     */
    protected $roles;

    /**
     * Role Inherits
     *
     * @var mixed
     */
    protected $roleInherits;

    /**
     * Phalcon\Acl\Adapter\Memory constructor
     */
    public function __construct()
    {
    }

    /**
     * Adds a component to the ACL list
     *
     * Access names can be a particular action, by example
     * search, update, delete, etc. or a list of them
     *
     * Example:
     * ```php
     * // Add a component to the list allowing access to an action
     * $acl->addComponent(
     *     new Phalcon\Acl\Component("customers"),
     *     "search"
     * );
     *
     * $acl->addComponent("customers", "search");
     *
     * // Add a component  with an access list
     * $acl->addComponent(
     *     new Phalcon\Acl\Component("customers"),
     *     [
     *         "create",
     *         "search",
     *     ]
     * );
     *
     * $acl->addComponent(
     *     "customers",
     *     [
     *         "create",
     *         "search",
     *     ]
     * );
     * ```
     *
     * @param mixed $componentValue
     * @param mixed $accessList
     * @return bool
     */
    public function addComponent($componentValue, $accessList): bool
    {
    }

    /**
     * Adds access to components
     *
     * @param string $componentName
     * @param mixed $accessList
     * @return bool
     */
    public function addComponentAccess(string $componentName, $accessList): bool
    {
    }

    /**
     * Do a role inherit from another existing role
     *
     * ```php
     * $acl->addRole("administrator", "consultant");
     * $acl->addRole("administrator", ["consultant", "consultant2"]);
     * ```
     *
     * @param string $roleName
     * @param mixed $roleToInherits
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherits): bool
    {
    }

    /**
     * Adds a role to the ACL list. Second parameter allows inheriting access data from other existing role
     *
     * ```php
     * $acl->addRole(
     *     new Phalcon\Acl\Role("administrator"),
     *     "consultant"
     * );
     *
     * $acl->addRole("administrator", "consultant");
     * $acl->addRole("administrator", ["consultant", "consultant2"]);
     * ```
     *
     * @param mixed $role
     * @param mixed $accessInherits
     * @return bool
     */
    public function addRole($role, $accessInherits = null): bool
    {
    }

    /**
     * Allow access to a role on a component. You can use `` as wildcard
     *
     * ```php
     * // Allow access to guests to search on customers
     * $acl->allow("guests", "customers", "search");
     *
     * // Allow access to guests to search or create on customers
     * $acl->allow("guests", "customers", ["search", "create"]);
     *
     * // Allow access to any role to browse on products
     * $acl->allow("", "products", "browse");
     *
     * // Allow access to any role to browse on any component
     * $acl->allow("", "", "browse");
     * ```
     *
     * @param string $roleName
     * @param string $componentName
     * @param mixed $access
     * @param mixed $func
     * @return void
     */
    public function allow(string $roleName, string $componentName, $access, $func = null): void
    {
    }

    /**
     * Deny access to a role on a component. You can use `` as wildcard
     *
     * ```php
     * // Deny access to guests to search on customers
     * $acl->deny("guests", "customers", "search");
     *
     * // Deny access to guests to search or create on customers
     * $acl->deny("guests", "customers", ["search", "create"]);
     *
     * // Deny access to any role to browse on products
     * $acl->deny("", "products", "browse");
     *
     * // Deny access to any role to browse on any component
     * $acl->deny("", "", "browse");
     * ```
     *
     * @param string $roleName
     * @param string $componentName
     * @param mixed $access
     * @param mixed $func
     * @return void
     */
    public function deny(string $roleName, string $componentName, $access, $func = null): void
    {
    }

    /**
     * Removes access from a component
     *
     * @param string $componentName
     * @param mixed $accessList
     * @return void
     */
    public function dropComponentAccess(string $componentName, $accessList): void
    {
    }

    /**
     * Returns the latest function used to acquire access
     *
     * @return mixed
     */
    public function getActiveFunction(): mixed
    {
    }

    /**
     * Returns number of additional arguments(excluding role and resource) for active function
     *
     * @return int
     */
    public function getActiveFunctionCustomArgumentsCount(): int
    {
    }

    /**
     * Returns the latest key used to acquire access
     *
     * @return string|null
     */
    public function getActiveKey(): string|null
    {
    }

    /**
     * Return an array with every component registered in the list
     *
     * @return array|\Phalcon\Acl\ComponentInterface[]
     */
    public function getComponents(): array
    {
    }

    /**
     * Returns the inherited roles for a passed role name. If no role name
     * has been specified it will return the whole array. If the role has not
     * been found it returns an empty array
     *
     * @param string $roleName
     * @return array
     */
    public function getInheritedRoles(string $roleName = ''): array
    {
    }

    /**
     * Returns the default ACL access level for no arguments provided in
     * `isAllowed` action if a `func` (callable) exists for `accessKey`
     *
     * @return int
     */
    public function getNoArgumentsDefaultAction(): int
    {
    }

    /**
     * Return an array with every role registered in the list
     *
     * @return array|\Phalcon\Acl\RoleInterface[]
     */
    public function getRoles(): array
    {
    }

    /**
     * Check whether a role is allowed to access an action from a component
     *
     * ```php
     * // Does andres have access to the customers component to create?
     * $acl->isAllowed("andres", "Products", "create");
     *
     * // Do guests have access to any component to edit?
     * $acl->isAllowed("guests", "", "edit");
     * ```
     *
     * @param mixed $roleName
     * @param mixed $componentName
     * @param string $access
     * @param array $parameters
     * @return bool
     */
    public function isAllowed($roleName, $componentName, string $access, array $parameters = null): bool
    {
    }

    /**
     * Check whether role exist in the roles list
     *
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName): bool
    {
    }

    /**
     * Check whether component exist in the components list
     *
     * @param string $componentName
     * @return bool
     */
    public function isComponent(string $componentName): bool
    {
    }

    /**
     * Sets the default access level (`Phalcon\Enum::ALLOW` or `Phalcon\Enum::DENY`)
     * for no arguments provided in isAllowed action if there exists func for
     * accessKey
     *
     * @param int $defaultAccess
     * @return void
     */
    public function setNoArgumentsDefaultAction(int $defaultAccess): void
    {
    }

    /**
     * Checks if a role has access to a component
     *
     * @param string $roleName
     * @param string $componentName
     * @param mixed $access
     * @param mixed $action
     * @param mixed $func
     * @return void
     */
    private function allowOrDeny(string $roleName, string $componentName, $access, $action, $func = null): void
    {
    }

    /**
     * Check whether a role is allowed to access an action from a component
     *
     * @param string $roleName
     * @param string $componentName
     * @param string $access
     * @return string|bool
     */
    private function canAccess(string $roleName, string $componentName, string $access): bool|string
    {
    }

    /**
     * @param array  $collection
     * @param string $element
     * @param string $elementName
     * @param string $suffix
     *
     * @throws Exception
     * @return void
     */
    private function checkExists(array $collection, string $element, string $elementName, string $suffix = 'ACL'): void
    {
    }
}
