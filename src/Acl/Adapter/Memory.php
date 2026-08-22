<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl\Adapter;

use Phalcon\Acl\Component;
use Phalcon\Acl\ComponentAwareInterface;
use Phalcon\Acl\ComponentInterface;
use Phalcon\Acl\Enum;
use Phalcon\Acl\Exceptions\AccessRuleNotFound;
use Phalcon\Acl\Exceptions\CircularInheritanceError;
use Phalcon\Acl\Exceptions\ElementNotFound;
use Phalcon\Acl\Exceptions\InvalidAccessList;
use Phalcon\Acl\Exceptions\InvalidComponentImplementation;
use Phalcon\Acl\Exceptions\InvalidRoleImplementation;
use Phalcon\Acl\Exceptions\InvalidRoleType;
use Phalcon\Acl\Exceptions\MissingFunctionParameters;
use Phalcon\Acl\Exceptions\ParameterTypeMismatch;
use Phalcon\Acl\Exceptions\RoleNotFoundException;
use Phalcon\Acl\Role;
use Phalcon\Acl\RoleAwareInterface;
use Phalcon\Acl\RoleInterface;
use Phalcon\Contracts\Acl\AclTypes;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use ReflectionNamedType;

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
 *
 * @phpstan-import-type acl_access_list from AclTypes
 * @phpstan-import-type acl_component_name from AclTypes
 * @phpstan-import-type acl_components from AclTypes
 * @phpstan-import-type acl_role_name from AclTypes
 * @phpstan-import-type acl_role_to_inherit from AclTypes
 */
class Memory extends \Phalcon\Acl\Adapter\AbstractAdapter
{
    /**
     * Access
     *
     * @phpstan-var array<string, int>
     */
    protected array $access = [];

    /**
     * Access List
     *
     * @phpstan-var array<string, bool>
     */
    protected array $accessList = ['*!*' => true];

    /**
     * Returns the latest function used to acquire access
     *
     * @var mixed
     */
    protected $activeFunction;

    /**
     * Returns number of additional arguments(excluding role and resource) for
     * active function
     */
    protected int $activeFunctionCustomArgumentsCount = 0;

    /**
     * Returns the latest key used to acquire access
     *
     * @var string|null
     */
    protected $activeKey = null;

    /**
     * Components
     *
     * @phpstan-var acl_components
     */
    protected array $components = [];

    /**
     * Component Names
     *
     * @phpstan-var array<string, bool>
     */
    protected array $componentsNames = ['*' => true];

    /**
     * Function List
     *
     * @phpstan-var array<string, callable|string>
     */
    protected array $functions = [];

    /**
     * Default action for no arguments is `deny`
     *
     * @var int
     */
    protected $noArgumentsDefaultAction = Enum::DENY;

    /**
     * Role Inherits
     *
     * @phpstan-var array<string, array<int, string>>
     */
    protected array $roleInherits = [];

    /**
     * Roles
     *
     * @phpstan-var array<string, RoleInterface>
     */
    protected array $roles = [];

    /**
     * Adds a component to the ACL list
     *
     * Access names can be a particular action, for instance `search`, `update`
     * `delete` etc. or a list of them.
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
     * @phpstan-param ComponentInterface|string $componentValue
     * @phpstan-param acl_access_list           $accessList
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
     * The guard below is the validation, so the parameter stays `var` here.
     * The accepted values are documented on the contract.
     *
     * @phpstan-param mixed $accessList
     * @param string $componentName
     * @param mixed $accessList
     * @return bool
     */
    public function addComponentAccess(string $componentName, $accessList): bool
    {
    }

    /**
     * Add a role which inherits from an existing role
     *
     * ```php
     * $acl->addRole("administrator", "consultant");
     * $acl->addRole("administrator", ["consultant", "consultant2"]);
     * ```
     *
     * @phpstan-param acl_role_to_inherit $roleToInherits
     * @param string $roleName
     * @param mixed $roleToInherits
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherits): bool
    {
    }

    /**
     * Adds a role to the ACL list. The second parameter lets to inherit access
     * from an existing role
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
     * @phpstan-param RoleInterface|string     $role
     * @phpstan-param acl_role_to_inherit|null $accessInherits
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
     * A `` role is an eager snapshot: it expands to the roles that exist when
     * `allow()` is called, so roles added afterwards do not inherit the grant.
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
     * // Allow access to any role to perform any action on any component
     * $acl->allow("", "", "");
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
     * A `` role is an eager snapshot: it expands to the roles that exist when
     * `deny()` is called, so roles added afterwards do not inherit the rule.
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
     * // Deny access to any role to perform any action on any component
     * $acl->deny("", "", "");
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
     * @param array<string>|string $accessList
     * @param string $componentName
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
     * Returns the last composite key used to acquire access.
     *
     * @deprecated Relies on the internal "role!component!access" encoding,
     *             which will be removed in v7. Use getActiveRole(),
     *             getActiveComponent() and getActiveAccess() instead.
     * @return string|null
     */
    public function getActiveKey(): string|null
    {
    }

    /**
     * Return an array with every component registered in the list
     *
     * @phpstan-return array<string, ComponentInterface>
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
     * @return array<int|string, array<int, string>|string>
     * @param string $roleName
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
     * @return array<string, RoleInterface>
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
     * @phpstan-param acl_role_name      $roleName
     * @phpstan-param acl_component_name $componentName
     * @param mixed $roleName
     * @param mixed $componentName
     * @param string $access
     * @param array|null $parameters
     * @return bool
     */
    public function isAllowed($roleName, $componentName, string $access, ?array $parameters = null): bool
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
     * Check whether role exist in the roles list
     *
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName): bool
    {
    }

    /**
     * Sets the default access level (`Phalcon\Enum::ALLOW` or
     * `Phalcon\Enum::DENY`) for no arguments provided in isAllowed action if
     * there exists func for accessKey
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
     * @phpstan-param array<string>|string $access
     * @phpstan-param int                  $action
     * @phpstan-param callable|null        $func
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
     * Builds the `<component>!<access>` access-list key
     *
     * @param string $componentName
     * @param string $access
     * @return string
     */
    private function buildAccessKey(string $componentName, string $access): string
    {
    }

    /**
     * Builds the `<role>!<component>!<access>` rule key
     *
     * @param string $roleName
     * @param string $componentName
     * @param string $access
     * @return string
     */
    private function buildKey(string $roleName, string $componentName, string $access): string
    {
    }

    /**
     * Check whether a role is allowed to access an action from a component
     *
     * Returns the rule key that grants the access, or `false` when no rule
     * matches. The native type is the wider `string | bool`.
     *
     * @return string|false
     * @param string $roleName
     * @param string $componentName
     * @param string $access
     */
    private function canAccess(string $roleName, string $componentName, string $access): bool|string
    {
    }

    /**
     * @phpstan-param array<string, mixed> $collection
     *
     * @throws ElementNotFound
     * @param array $collection
     * @param string $element
     * @param string $elementName
     * @param string $suffix
     * @return void
     */
    private function checkExists(array $collection, string $element, string $elementName, string $suffix = 'ACL'): void
    {
    }

    /**
     * Invokes a callable rule, binding the role/component/user objects to the
     * closure parameters by type and enforcing its arity.
     *
     * @phpstan-param callable                      $funcAccess
     * @phpstan-param array<int|string, mixed>|null $parameters
     * @phpstan-param object|null                   $roleObject
     * @phpstan-param object|null                   $componentObject
     *
     * @throws ParameterTypeMismatch
     * @throws MissingFunctionParameters
     * @throws ReflectionException
     * @param mixed $funcAccess
     * @param int $haveAccess
     * @param mixed $parameters
     * @param mixed $roleObject
     * @param mixed $componentObject
     * @param string $roleName
     * @param string $componentName
     * @param string $access
     * @return bool
     */
    private function invokeRule($funcAccess, int $haveAccess, $parameters, $roleObject, $componentObject, string $roleName, string $componentName, string $access): bool
    {
    }

    /**
     * Resolves a component identifier (object or string) to its name
     *
     * @phpstan-param  object|string $component
     * @phpstan-return string
     *
     * @throws InvalidComponentImplementation
     * @param mixed $component
     */
    private function toComponentName($component)
    {
    }

    /**
     * Resolves a role identifier (object or string) to its name
     *
     * @phpstan-param  object|string $role
     * @phpstan-return string
     *
     * @throws InvalidRoleImplementation
     * @param mixed $role
     */
    private function toRoleName($role)
    {
    }
}
