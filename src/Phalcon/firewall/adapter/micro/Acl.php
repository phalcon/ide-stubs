<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Firewall\Adapter\Micro;

use Phalcon\Firewall\Adapter\AbstractAdapter;
use Phalcon\Mvc\Micro;

/**
 * Firewall for Phalcon\Mvc\Micro which depends on ACL
 */
class Acl extends AbstractAdapter
{
    /**
     * Acl service name
     *
     * @var string
     */
    protected $aclServiceName;

    /**
     * Bound models
     *
     * @var array
     */
    protected $boundModels;

    /**
     * Property used for setting different key names in associated ACL function
     * than got from Binder
     */
    protected $boundModelsKeyMap;

    /**
     * Component name used to acquire access, be default it's Micro
     *
     * @var string
     */
    protected $componentName = 'Micro';

    /**
     * Micro object
     *
     * @var mixed
     */
    protected $micro;

    /**
     * Function returning string for role cache key
     *
     * @var mixed
     */
    protected $roleCacheCallback;

    /**
     * Router object
     *
     * @var mixed
     */
    protected $router;

    /**
     * By default using route names which are required, you can change it to
     * false to use route patterns
     *
     * @var bool
     */
    protected $routeNameConfiguration = true;


    /**
     * Acl service name
     *
     * @return string
     */
    public function getAclServiceName(): string
    {
    }

    /**
     * Acl service name
     *
     * @param string $aclServiceName
     */
    public function setAclServiceName(string $aclServiceName)
    {
    }

    /**
     * Property used for setting different key names in associated ACL function
     *
     * than got from Binder
     */
    public function getBoundModelsKeyMap()
    {
    }

    /**
     * Property used for setting different key names in associated ACL function
     *
     * than got from Binder
     *
     * @param mixed $boundModelsKeyMap
     */
    public function setBoundModelsKeyMap($boundModelsKeyMap)
    {
    }

    /**
     * Component name used to acquire access, be default it's Micro
     *
     * @return string
     */
    public function getComponentName(): string
    {
    }

    /**
     * Component name used to acquire access, be default it's Micro
     *
     * @param string $componentName
     */
    public function setComponentName(string $componentName)
    {
    }

    /**
     * Function returning string for role cache key
     *
     * @return mixed
     */
    public function getRoleCacheCallback()
    {
    }

    /**
     * Function returning string for role cache key
     *
     * @param mixed $roleCacheCallback
     */
    public function setRoleCacheCallback($roleCacheCallback)
    {
    }

    /**
     * By default using route names which are required, you can change it to
     *
     * false to use route patterns
     *
     * @param bool $routeNameConfiguration
     */
    public function setRouteNameConfiguration(bool $routeNameConfiguration)
    {
    }

    /**
     * @param string $aclServiceName
     * @param array $boundModelsKeyMap
     */
    public function __construct(string $aclServiceName, array $boundModelsKeyMap = null)
    {
    }

    /**
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\Micro $micro
     * @param mixed $data
     */
    public function afterBinding(\Phalcon\Events\Event $event, \Phalcon\Mvc\Micro $micro, $data)
    {
    }

    /**
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\Micro $micro
     * @param mixed $data
     */
    public function beforeExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Mvc\Micro $micro, $data)
    {
    }

    /**
     * Gets micro
     *
     * @return \Phalcon\Mvc\Micro
     */
    public function getMicro(): Micro
    {
    }

    /**
     * Gets route name configuration
     *
     * @return bool
     */
    public function isRouteNameConfiguration(): bool
    {
    }

    /**
     * Fires event or throwing exception
     *
     * @param mixed $role
     * @param string $actionName
     * @param string $controllerName
     * @param bool $access
     */
    protected function fireEventOrThrowException($role, string $actionName, string $controllerName, bool $access)
    {
    }

    /**
     * @param string $key
     * @param array $originalValues
     * @param string $roleCacheKey
     * @return bool|null
     */
    protected function getAccessFromCache(string $key, array $originalValues = null, string $roleCacheKey = null): ?bool
    {
    }

    /**
     * @param \Phalcon\Mvc\Micro $micro
     */
    protected function handleRouter(\Phalcon\Mvc\Micro $micro)
    {
    }

    /**
     * @param string $key
     * @param bool $access
     */
    protected function saveAccessInCache(string $key, bool $access)
    {
    }
}
