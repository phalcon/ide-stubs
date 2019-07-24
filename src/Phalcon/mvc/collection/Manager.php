<?php

namespace Phalcon\Mvc\Collection;

/**
 * Phalcon\Mvc\Collection\Manager
 *
 * This components controls the initialization of models, keeping record of relations
 * between the different models of the application.
 *
 * A CollectionManager is injected to a model via a Dependency Injector Container such as Phalcon\Di.
 *
 * ```php
 * $di = new \Phalcon\Di();
 *
 * $di->set(
 *     "collectionManager",
 *     function () {
 *         return new \Phalcon\Mvc\Collection\Manager();
 *     }
 * );
 *
 * $robot = new Robots($di);
 * ```
 */
class Manager implements \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface
{

    protected $behaviors;


    protected $connectionServices;


    protected $container;


    protected $customEventsManager;


    protected $eventsManager;


    protected $implicitObjectsIds;


    protected $initialized;


    protected $lastInitialized;


    protected $serviceName = 'mongo';



    public function getServiceName() {}

    /**
     * @param mixed $serviceName
     */
    public function setServiceName($serviceName) {}

    /**
     * Binds a behavior to a model
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @param \Phalcon\Mvc\Collection\BehaviorInterface $behavior
     */
    public function addBehavior(\Phalcon\Mvc\CollectionInterface $model, \Phalcon\Mvc\Collection\BehaviorInterface $behavior) {}

    /**
     * Returns a custom events manager related to a model
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @return mixed|null
     */
    public function getCustomEventsManager(\Phalcon\Mvc\CollectionInterface $model): ? {}

    /**
     * Returns the connection related to a model
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @return \Mongo
     */
    public function getConnection(\Phalcon\Mvc\CollectionInterface $model) {}

    /**
     * Gets a connection service for a specific model
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @return string
     */
    public function getConnectionService(\Phalcon\Mvc\CollectionInterface $model): string {}

    /**
     * Returns the DependencyInjector container
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface {}

    /**
     * Returns the internal event manager
     *
     * @return \Phalcon\Events\ManagerInterface
     */
    public function getEventsManager(): ManagerInterface {}

    /**
     * Get the latest initialized model
     *
     * @return \Phalcon\Mvc\CollectionInterface
     */
    public function getLastInitialized(): CollectionInterface {}

    /**
     * Checks if a model is using implicit object ids
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @return bool
     */
    public function isUsingImplicitObjectIds(\Phalcon\Mvc\CollectionInterface $model): bool {}

    /**
     * Check whether a model is already initialized
     *
     * @param string $className
     * @return bool
     */
    public function isInitialized(string $className): bool {}

    /**
     * Initializes a model in the models manager
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     */
    public function initialize(\Phalcon\Mvc\CollectionInterface $model) {}

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that at least one was implemented
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @param string $eventName
     * @param mixed $data
     * @return bool
     */
    public function missingMethod(\Phalcon\Mvc\CollectionInterface $model, string $eventName, $data): bool {}

    /**
     * Receives events generated in the models and dispatches them to an events-manager if available
     * Notify the behaviors that are listening in the model
     *
     * @param string $eventName
     * @param \Phalcon\Mvc\CollectionInterface $model
     */
    public function notifyEvent(string $eventName, \Phalcon\Mvc\CollectionInterface $model) {}

    /**
     * Sets a custom events manager for a specific model
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setCustomEventsManager(\Phalcon\Mvc\CollectionInterface $model, \Phalcon\Events\ManagerInterface $eventsManager) {}

    /**
     * Sets a connection service for a specific model
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @param string $connectionService
     */
    public function setConnectionService(\Phalcon\Mvc\CollectionInterface $model, string $connectionService) {}

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Sets the event manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager) {}

    /**
     * Sets whether a model must use implicit objects ids
     *
     * @param \Phalcon\Mvc\CollectionInterface $model
     * @param bool $useImplicitObjectIds
     */
    public function useImplicitObjectIds(\Phalcon\Mvc\CollectionInterface $model, bool $useImplicitObjectIds) {}

}
