<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Mvc\Model;

use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Di\DiInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface as EventsManagerInterface;
use Phalcon\Mvc\Model\Query\BuilderInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\Manager
 *
 * This components controls the initialization of models, keeping record of
 * relations between the different models of the application.
 *
 * A ModelsManager is injected to a model via a Dependency Injector/Services
 * Container such as Phalcon\Di.
 *
 * ```php
 * use Phalcon\Di;
 * use Phalcon\Mvc\Model\Manager as ModelsManager;
 *
 * $di = new Di();
 *
 * $di->set(
 *     "modelsManager",
 *     function() {
 *         return new ModelsManager();
 *     }
 * );
 *
 * $robot = new Robots($di);
 * ```
 */
class Manager implements ManagerInterface, InjectionAwareInterface, EventsAwareInterface
{

    protected $aliases = array();

    /**
     * Models' behaviors
     */
    protected $behaviors = array();

    /**
     * Belongs to relations
     */
    protected $belongsTo = array();

    /**
     * All the relationships by model
     */
    protected $belongsToSingle = array();


    protected $container;


    protected $customEventsManager = array();

    /**
     * Does the model use dynamic update, instead of updating all rows?
     */
    protected $dynamicUpdate = array();


    protected $eventsManager;

    /**
     * Has many relations
     */
    protected $hasMany = array();

    /**
     * Has many relations by model
     */
    protected $hasManySingle = array();

    /**
     * Has many-Through relations
     */
    protected $hasManyToMany = array();

    /**
     * Has many-Through relations by model
     */
    protected $hasManyToManySingle = array();

    /**
     * Has one relations
     */
    protected $hasOne = array();

    /**
     * Has one relations by model
     */
    protected $hasOneSingle = array();

    /**
     * Mark initialized models
     */
    protected $initialized = array();


    protected $keepSnapshots = array();

    /**
     * Last model initialized
     */
    protected $lastInitialized;

    /**
     * Last query created/executed
     */
    protected $lastQuery;


    protected $modelVisibility = array();


    protected $prefix = '';


    protected $readConnectionServices = array();


    protected $sources = array();


    protected $schemas = array();


    protected $writeConnectionServices = array();

    /**
     * Stores a list of reusable instances
     */
    protected $reusable = array();


    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets a global events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return \Phalcon\Events\ManagerInterface
     */
    public function getEventsManager(): EventsManagerInterface
    {
    }

    /**
     * Sets a custom events manager for a specific model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setCustomEventsManager(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Returns a custom events manager related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool|\Phalcon\Events\ManagerInterface
     */
    public function getCustomEventsManager(\Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Initializes a model in the model manager
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function initialize(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Check whether a model is already initialized
     *
     * @param string $className
     * @return bool
     */
    public function isInitialized(string $className): bool
    {
    }

    /**
     * Get last initialized model
     *
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getLastInitialized(): ModelInterface
    {
    }

    /**
     * Loads a model throwing an exception if it doesn't exist
     *
     * @param string $modelName
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function load(string $modelName): ModelInterface
    {
    }

    /**
     * Sets the prefix for all model sources.
     *
     * ```php
     * use Phalcon\Mvc\Model\Manager;
     *
     * $di->set(
     *     "modelsManager",
     *     function () {
     *         $modelsManager = new Manager();
     *
     *         $modelsManager->setModelPrefix("wp_");
     *
     *         return $modelsManager;
     *     }
     * );
     *
     * $robots = new Robots();
     *
     * echo $robots->getSource(); // wp_robots
     * ```
     *
     * @param string $prefix
     */
    public function setModelPrefix(string $prefix)
    {
    }

    /**
     * Returns the prefix for all model sources.
     *
     * @return string
     */
    public function getModelPrefix(): string
    {
    }

    /**
     * Sets the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $source
     */
    public function setModelSource(\Phalcon\Mvc\ModelInterface $model, string $source)
    {
    }

    /**
     * Check whether a model property is declared as public.
     *
     * ```php
     * $isPublic = $manager->isVisibleModelProperty(
     *     new Robots(),
     *     "name"
     * );
     * ```
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $property
     * @return bool
     */
    final public function isVisibleModelProperty(\Phalcon\Mvc\ModelInterface $model, string $property): bool
    {
    }

    /**
     * Returns the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSource(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Sets the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $schema
     */
    public function setModelSchema(\Phalcon\Mvc\ModelInterface $model, string $schema)
    {
    }

    /**
     * Returns the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSchema(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Sets both write and read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService)
    {
    }

    /**
     * Sets write connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setWriteConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService)
    {
    }

    /**
     * Sets read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setReadConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService)
    {
    }

    /**
     * Returns the connection to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    public function getReadConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface
    {
    }

    /**
     * Returns the connection to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    public function getWriteConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface
    {
    }

    /**
     * Returns the connection to read or write data related to a model depending on the connection services.
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $connectionServices
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    protected function _getConnection(\Phalcon\Mvc\ModelInterface $model, $connectionServices): AdapterInterface
    {
    }

    /**
     * Returns the connection service name used to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getReadConnectionService(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Returns the connection service name used to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getWriteConnectionService(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Returns the connection service name used to read or write data related to
     * a model depending on the connection services
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $connectionServices
     * @return string
     */
    public function _getConnectionService(\Phalcon\Mvc\ModelInterface $model, $connectionServices): string
    {
    }

    /**
     * Receives events generated in the models and dispatches them to an
     * events-manager if available. Notify the behaviors that are listening in
     * the model
     *
     * @param string $eventName
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notifyEvent(string $eventName, \Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that a least one was implemented
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $eventName
     * @param mixed $data
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $eventName, $data)
    {
    }

    /**
     * Binds a behavior to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Mvc\Model\BehaviorInterface $behavior
     */
    public function addBehavior(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Mvc\Model\BehaviorInterface $behavior)
    {
    }

    /**
     * Sets if a model must keep snapshots
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $keepSnapshots
     */
    public function keepSnapshots(\Phalcon\Mvc\ModelInterface $model, bool $keepSnapshots)
    {
    }

    /**
     * Checks if a model is keeping snapshots for the queried records
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function isKeepingSnapshots(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Sets if a model must use dynamic update instead of the all-field update
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $dynamicUpdate
     */
    public function useDynamicUpdate(\Phalcon\Mvc\ModelInterface $model, bool $dynamicUpdate)
    {
    }

    /**
     * Checks if a model is using dynamic update instead of all-field update
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function isUsingDynamicUpdate(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Setup a 1-1 relation between two models
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return \Phalcon\Mvc\Model\RelationInterface
     */
    public function addHasOne(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): RelationInterface
    {
    }

    /**
     * Setup a relation reverse many to one between two models
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return \Phalcon\Mvc\Model\RelationInterface
     */
    public function addBelongsTo(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): RelationInterface
    {
    }

    /**
     * Setup a relation 1-n between two models
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return \Phalcon\Mvc\Model\RelationInterface
     */
    public function addHasMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): RelationInterface
    {
    }

    /**
     * Setups a relation n-m between two models
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $fields
     * @param string $intermediateModel
     * @param string $intermediateFields
     * @param string $intermediateReferencedFields
     * @param string $referencedModel
     * @param string $referencedFields
     * @param array $options
     * @return \Phalcon\Mvc\Model\RelationInterface
     */
    public function addHasManyToMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, $options = null): RelationInterface
    {
    }

    /**
     * Checks whether a model has a belongsTo relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsBelongsTo(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasOne(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasManyToMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasManyToMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Returns a relation by its alias
     *
     * @param string $modelName
     * @param string $alias
     * @return bool|\Phalcon\Mvc\Model\RelationInterface
     */
    public function getRelationByAlias(string $modelName, string $alias)
    {
    }

    /**
     * Merge two arrays of find parameters
     *
     * @param mixed $findParamsOne
     * @param mixed $findParamsTwo
     * @return array
     */
    final protected function _mergeFindParameters($findParamsOne, $findParamsTwo): array
    {
    }

    /**
     * Helper method to query records based on a relation definition
     *
     * @param \Phalcon\Mvc\Model\RelationInterface $relation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @param string $method
     * @return \Phalcon\Mvc\Model\Resultset\Simple|Phalcon\Mvc\Model\Resultset\Simple|int|false
     */
    public function getRelationRecords(\Phalcon\Mvc\Model\RelationInterface $relation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null)
    {
    }

    /**
     * Returns a reusable object from the internal list
     *
     * @param string $modelName
     * @param string $key
     */
    public function getReusableRecords(string $modelName, string $key)
    {
    }

    /**
     * Stores a reusable record in the internal list
     *
     * @param string $modelName
     * @param string $key
     * @param mixed $records
     */
    public function setReusableRecords(string $modelName, string $key, $records)
    {
    }

    /**
     * Clears the internal reusable list
     */
    public function clearReusableObjects()
    {
    }

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @param string $method
     * @return bool|\Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getBelongsToRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null)
    {
    }

    /**
     * Gets hasMany related records from a model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @param string $method
     * @return bool|\Phalcon\Mvc\Model\ResultsetInterface
     */
    public function getHasManyRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null)
    {
    }

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @param string $method
     * @return bool|\Phalcon\Mvc\ModelInterface
     */
    public function getHasOneRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null)
    {
    }

    /**
     * Gets all the belongsTo relations defined in a model
     *
     * ```php
     * $relations = $modelsManager->getBelongsTo(
     *     new Robots()
     * );
     * ```
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getBelongsTo(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasMany(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getHasOne(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasManyToMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasManyToMany(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasOneAndHasMany(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Query all the relationships defined on a model
     *
     * @param string $modelName
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelations(string $modelName): array
    {
    }

    /**
     * Query the first relationship defined between two models
     *
     * @param string $first
     * @param string $second
     * @return array|bool|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelationsBetween(string $first, string $second)
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query without execute it
     *
     * @param string $phql
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function createQuery(string $phql): QueryInterface
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query and execute it
     *
     * @param string $phql
     * @param mixed $placeholders
     * @param mixed $types
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function executeQuery(string $phql, $placeholders = null, $types = null): QueryInterface
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query\Builder
     *
     * @param mixed $params
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function createBuilder($params = null): BuilderInterface
    {
    }

    /**
     * Returns the last query created or executed in the models manager
     *
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function getLastQuery(): QueryInterface
    {
    }

    /**
     * Destroys the current PHQL cache
     */
    public function __destruct()
    {
    }
}
