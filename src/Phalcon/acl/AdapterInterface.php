<?php

namespace Phalcon\Acl;

/**
 * Phalcon\Acl\AdapterInterface
 *
 * Interface for Phalcon\Acl adapters
 */
interface AdapterInterface
{

    /**
     * Do a role inherit from another existing role
     * @param string $roleName
     * @param $roleToInherit
     * @return bool
     */
    public function addInherit(string $roleName, $roleToInherit) : bool;

    /**
     * Adds a role to the ACL list. Second parameter lets to inherit access data
     * from other existing role
     * @param $role
     * @param null $accessInherits
     * @return bool
     */
    public function addRole($role, $accessInherits = null) : bool;

    /**
     * Adds a component to the ACL list
     *
     * Access names can be a particular action, by example
     * search, update, delete, etc or a list of them
     * @param $componentObject
     * @param $accessList
     * @return bool
     */
    public function addComponent($componentObject, $accessList) : bool;

    /**
     * Adds access to components
     * @param $componentName
     * @param $accessList
     * @return bool
     */
    public function addComponentAccess(string $componentName, $accessList) : bool;

    /**
     * Allow access to a role on a component
     * @param $roleName
     * @param $componentName
     * @param $access
     * @param null $func
     */
    public function allow(string $roleName, string $componentName, $access, $func = null) : void;

    /**
     * Deny access to a role on a component
     * @param $roleName
     * @param $componentName
     * @param $access
     * @param null $func
     */
    public function deny(string $roleName, string $componentName, $access, $func = null) : void;

    /**
     * Removes an access from a component
     * @param string $componentName
     * @param $accessList
     */
    public function dropComponentAccess(string $componentName, $accessList) : void;

    /**
     * Returns the access which the list is checking if some role can access it
     */
    public function getActiveAccess() : string;

    /**
     * Returns the role which the list is checking if it's allowed to certain
     * component/access
     */
    public function getActiveRole() : string;

    /**
     * Returns the component which the list is checking if some role can access
     * it
     */
    public function getActiveComponent() : string;

    /**
     * Returns the default ACL access level
     */
    public function getDefaultAction() : int;

    /**
     * Returns the default ACL access level for no arguments provided in
     * isAllowed action if there exists func for accessKey
     */
    public function getNoArgumentsDefaultAction() : int;

    /**
     * Return an array with every role registered in the list
     * @return RoleInterface[]
     */
    public function getRoles() : array;

    /**
     * Return an array with every component registered in the list
     * return ComponentInterface[]
     */
    public function getComponents() : array;

    /**
     * Check whether a role is allowed to access an action from a component
     * @param $roleName
     * @param $componentName
     * @param string $access
     * @param array|null $parameters
     * @return bool
     */
    public function isAllowed($roleName, $componentName, string $access, ?array $parameters = null) : bool;

    /**
     * Check whether component exist in the components list
     * @param string $componentName
     * @return bool
     */
    public function isComponent(string $componentName) : bool;

    /**
     * Check whether role exist in the roles list
     * @param string $roleName
     * @return bool
     */
    public function isRole(string $roleName) : bool;

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     * @param int $defaultAccess
     */
    public function setDefaultAction(int $defaultAccess) : void;

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     * for no arguments provided in isAllowed action if there exists func for
     * accessKey
     * @param int $defaultAccess
     */
    public function setNoArgumentsDefaultAction(int $defaultAccess) : void;

}
