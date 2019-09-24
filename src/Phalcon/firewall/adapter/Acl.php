<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Firewall\Adapter;

/**
 * FirewallZ for Phalcon\Application which depends on acl and dispatcher
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
     * Property used for setting different key names in associated acl function than got from Binder
     */
    protected $boundModelsKeyMap;

    /**
     * Dispatcher
     *
     * @var mixed
     */
    protected $dispatcher;

    /**
     * Parameter for using with multi module application
     *
     * @var bool
     */
    protected $multiModuleConfiguration = false;

    /**
     * Separator between module name and controller prefix
     *
     * @var string
     */
    protected $moduleSeparator = ':';

    /**
     * Function returning string for role cache key
     *
     * @var mixed
     */
    protected $roleCacheCallback;


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
     * Property used for setting different key names in associated acl function than got from Binder
     */
    public function getBoundModelsKeyMap()
    {
    }

    /**
     * Property used for setting different key names in associated acl function than got from Binder
     *
     * @param mixed $boundModelsKeyMap
     */
    public function setBoundModelsKeyMap($boundModelsKeyMap)
    {
    }

    /**
     * Separator between module name and controller prefix
     *
     * @return string
     */
    public function getModuleSeparator(): string
    {
    }

    /**
     * Separator between module name and controller prefix
     *
     * @param string $moduleSeparator
     */
    public function setModuleSeparator(string $moduleSeparator)
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
     * Phalcon\Firewall\Adapter\Acl constructor
     *
     * @param string $aclServiceName
     * @param array $boundModelsKeyMap
     */
    public function __construct(string $aclServiceName, array $boundModelsKeyMap = null)
    {
    }

    /**
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\DispatcherInterface $dispatcher
     * @param mixed $data
     */
    public function afterBinding(\Phalcon\Events\Event $event, \Phalcon\Mvc\DispatcherInterface $dispatcher, $data)
    {
    }

    /**
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\DispatcherInterface $dispatcher
     * @param mixed $data
     */
    public function beforeExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Mvc\DispatcherInterface $dispatcher, $data)
    {
    }

    /**
     * Gets dispatcher
     *
     * @return Dispatcher
     */
    public function getDispatcher(): Dispatcher
    {
    }

    /**
     * Returns multiModuleConfiguration
     *
     * @return bool
     */
    public function isMultiModuleConfiguration(): bool
    {
    }

    /**
     * Sets multiModuleConfiguration
     *
     * @param bool $multiModuleConfiguration
     */
    public function useMultiModuleConfiguration(bool $multiModuleConfiguration)
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
     * @param \Phalcon\Mvc\DispatcherInterface $dispatcher
     */
    protected function handleDispatcher(\Phalcon\Mvc\DispatcherInterface $dispatcher)
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
