<?php

namespace Phalcon\Firewall\Adapter;

use Phalcon\Mvc\DispatcherInterface;

/**
 * Firewall which depends on annotations and dispatcher
 */
class Annotations extends AbstractAdapter
{
    /**
     * Number of active active arguments in active annotation
     *
     * @var int
     */
    protected $activeArgumentsNumber = 0;

    /**
     * Adapter for annotations
     *
     * @var mixed
     */
    protected $annotationsAdapter;

    /**
     * Dispatcher
     *
     * @var mixed
     */
    protected $dispatcher;

    /**
     * Role for which access was granted
     */
    protected $resolvedRole;


    /**
     * Adapter for annotations
     *
     * @return mixed
     */
    public function getAnnotationsAdapter()
    {
    }

    /**
     * Adapter for annotations
     *
     * @param mixed $annotationsAdapter
     */
    public function setAnnotationsAdapter($annotationsAdapter)
    {
    }

    /**
     * Phalcon\Firewall\Adapter\Annotations constructor
     *
     * @param \Phalcon\Annotations\Adapter\AdapterInterface $annotationsAdapter
     */
    public function __construct(\Phalcon\Annotations\Adapter\AdapterInterface $annotationsAdapter)
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
     * @return \Phalcon\Mvc\DispatcherInterface
     */
    public function getDispatcher(): DispatcherInterface
    {
    }

    /**
     * @param string $controllerClass
     * @param string $controllerName
     * @param mixed $role
     */
    protected function checkControllerAnnotationAccess(string $controllerClass, string $controllerName, $role)
    {
    }

    /**
     * @param mixed $annotations
     * @param mixed $role
     */
    protected function checkAnnotations($annotations, $role)
    {
    }

    /**
     * @param string $controllerClass
     * @param string $controllerName
     * @param string $actionName
     * @param mixed $role
     */
    protected function checkActionAnnotationAccess(string $controllerClass, string $controllerName, string $actionName, $role)
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
     * @param mixed $annotation
     * @param bool $access
     * @param mixed $role
     */
    protected function handleAnnotation($annotation, bool $access, $role)
    {
    }
}
