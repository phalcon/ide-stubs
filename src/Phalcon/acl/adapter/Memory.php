<?php

namespace Phalcon\Acl\Adapter;

use Phalcon\Acl;
use Phalcon\Acl\Adapter;
use Phalcon\Acl\ComponentInterface;
use Phalcon\Acl\RoleInterface;

/**
 * Manages ACL lists in memory
 *
 *```php
 * $acl = new \Phalcon\Acl\Adapter\Memory();
 *
 * $acl->setDefaultAction(
 *     \Phalcon\Acl::DENY
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
 * foreach ($roles as $role){
 *     foreach ($publicComponents as $component => $actions) {
 *         $acl->allow($role->getName(), $component, "*");
 *     }
 * }
 *
 * // Grant access to private area to role Users
 * foreach ($privateComponents as $component => $actions) {
 *     foreach ($actions as $action) {
 *         $acl->allow("Users", $component, $action);
 *     }
 * }
 *```
 */
class Memory extends Adapter
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
         * Returns latest function used to acquire access
         *
         * @var mixed
         */
    protected $activeFunction;

    /**
     * Returns number of additional arguments(excluding role and resource) for active function
     *
     * @var int
     */
    protected $activeFunctionCustomArgumentsCount;

    /**
     * Returns latest key used to acquire access
     *
     * @var string|null
     */
    protected $activeKey;

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
     * Default action for no arguments is allow
     *
     * @var mixed
     */
    protected $noArgumentsDefaultAction = Acl::DENY;

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
     * Roles Names
     *
     * @var mixed
     */
    protected $rolesNames;


    /**
     * Phalcon\Acl\Adapter\Memory constructor
     */
    public function __construct() {}

    /**
     * Adds a component to the ACL list
     *
     * Access names can be a particular action, by example
     * search, update, delete, etc or a list of them
     *
     * Example:
     * ```php
     * // Add a component to the the list allowing access to an action
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
     * @param $componentValue
     * @param $accessList
     * @return bool
     */
    public function addComponent($componentValue, $accessList) : bool {}

    /**
     * Adds access to components
     *
     * @param $componentName
     * @param $accessList
     * @return bool
     */
    public function addComponentAccess(string $componentName, $accessList) : bool {}

    /**
     * Do a role inherit from another existing role
     *
     * ```php
     * $acl->addRole("administrator", "consultant");
     * $acl->addRole("administrator", ["consultant", "consultant2"]);
     * ```
     *
     * @param string $roleName
     * @param $roleToInherits
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherits) : bool {}

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
     * @param $role
     * @param null $accessInherits
     * @return bool
     */
    public function addRole($role, $accessInherits = null) : bool {}

    /**
     * Allow access to a role on a component. You can use `*` as wildcard
     *
     * ```php
     * // Allow access to guests to search on customers
     * $acl->allow("guests", "customers", "search");
     *
     * // Allow access to guests to search or create on customers
     * $acl->allow("guests", "customers", ["search", "create"]);
     *
     * // Allow access to any role to browse on products
     * $acl->allow("*", "products", "browse");
     *
     * // Allow access to any role to browse on any component
     * $acl->allow("*", "*", "browse");
     *
     * @param string $roleName
     * @param string $componentName
     * @param $access
     * @param null $func
     */
    public function allow(string $roleName, string $componentName, $access, $func = null) : void {}

    /**
     * Deny access to a role on a component. You can use `*` as wildcard
     *
     * ```php
     * // Deny access to guests to search on customers
     * $acl->deny("guests", "customers", "search");
     *
     * // Deny access to guests to search or create on customers
     * $acl->deny("guests", "customers", ["search", "create"]);
     *
     * // Deny access to any role to browse on products
     * $acl->deny("*", "products", "browse");
     *
     * // Deny access to any role to browse on any component
     * $acl->deny("*", "*", "browse");
     * ```
     *
     * @param string $roleName
     * @param string $componentName
     * @param $access
     * @param null $func
     */
    public function deny(string $roleName, string $componentName, $access, $func = null) : void {}

    /**
     * Removes an access from a component
     * @param string $componentName
     * @param $accessList
     */
    public function dropComponentAccess(string $componentName, $accessList) : void {}

    /**
     * Returns the default ACL access level for no arguments provided in
     * `isAllowed` action if a `func` (callable) exists for `accessKey`
     */
    public function getNoArgumentsDefaultAction() : int {}

    /**
     * Return an array with every role registered in the list
     *
     * @return RoleInterface[]
     */
    public function getRoles() : array {}

    /**
     * Return an array with every component registered in the list
     *
     * @return ComponentInterface[]
     */
    public function getComponents() : array {}

    /**
     * Check whether a role is allowed to access an action from a component
     *
     * ```php
     * // Does andres have access to the customers component to create?
     * $acl->isAllowed("andres", "Products", "create");
     *
     * // Do guests have access to any component to edit?
     * $acl->isAllowed("guests", "*", "edit");
     * ```
     * @param $roleName
     * @param $componentName
     * @param $access
     * @param array|null $parameters
     * @return bool
     */
    public function isAllowed($roleName, $componentName, $access, ?array $parameters = null) : bool {}

    /**
     * Check whether role exist in the roles list
     *
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName) : bool {}

    /**
     * Check whether component exist in the components list
     *
     * @param string $componentName
     * @return bool
     */
    public function isComponent(string $componentName) : bool {}

    /**
     * Sets the default access level (`Phalcon\Acl::ALLOW` or `Phalcon\Acl::DENY`)
     * for no arguments provided in isAllowed action if there exists func for
     * accessKey
     *
     * @param int $defaultAccess
     */
    public function setNoArgumentsDefaultAction(int $defaultAccess) : void {}
}
