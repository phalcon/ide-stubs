<?php

/* This file is part of the Phalcon Framework.
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
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Query\Builder;
use Phalcon\Mvc\Model\Query\BuilderInterface;
use Phalcon\Mvc\Model\Query\StatusInterface;
use ReflectionClass;
use ReflectionProperty;

/**
 * Phalcon\Mvc\Model\Manager
 *
 * This components controls the initialization of models, keeping record of
 * relations between the different models of the application.
 *
 * A ModelsManager is injected to a model via a Dependency Injector/Services
 * Container such as Phalcon\Di\Di.
 *
 * ```php
 * use Phalcon\Di\Di;
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
class Manager implements \Phalcon\Mvc\Model\ManagerInterface, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * @var array
     */
    protected $aliases = [];

    /**
     * Models' behaviors
     *
     * @var array
     */
    protected $behaviors = [];

    /**
     * Belongs to relations
     *
     * @var array
     */
    protected $belongsTo = [];

    /**
     * All the relationships by model
     *
     * @var array
     */
    protected $belongsToSingle = [];

    /**
     * @var BuilderInterface|null
     */
    protected $builder = null;

    /**
     * @var DiInterface|null
     */
    protected $container = null;

    /**
     * @var array
     */
    protected $customEventsManager = [];

    /**
     * Does the model use dynamic update, instead of updating all rows?
     *
     * @var array
     */
    protected $dynamicUpdate = [];

    /**
     * @var EventsManagerInterface|null
     */
    protected $eventsManager = null;

    /**
     * Has many relations
     *
     * @var array
     */
    protected $hasMany = [];

    /**
     * Has many relations by model
     *
     * @var array
     */
    protected $hasManySingle = [];

    /**
     * Has many-Through relations
     *
     * @var array
     */
    protected $hasManyToMany = [];

    /**
     * Has many-Through relations by model
     *
     * @var array
     */
    protected $hasManyToManySingle = [];

    /**
     * Has one relations
     *
     * @var array
     */
    protected $hasOne = [];

    /**
     * Has one relations by model
     *
     * @var array
     */
    protected $hasOneSingle = [];

    /**
     * Has one through relations
     *
     * @var array
     */
    protected $hasOneThrough = [];

    /**
     * Has one through relations by model
     *
     * @var array
     */
    protected $hasOneThroughSingle = [];

    /**
     * Mark initialized models
     *
     * @var array
     */
    protected $initialized = [];

    /**
     * @var array
     */
    protected $keepSnapshots = [];

    /**
     * Last model initialized
     *
     * @var ModelInterface|null
     */
    protected $lastInitialized = null;

    /**
     * Last query created/executed
     *
     * @var QueryInterface|null
     */
    protected $lastQuery = null;

    /**
     * @var array
     */
    protected $modelVisibility = [];

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * @var array
     */
    protected $readConnectionServices = [];

    /**
     * @var array
     */
    protected $sources = [];

    /**
     * @var array
     */
    protected $schemas = [];

    /**
     * @var array
     */
    protected $writeConnectionServices = [];

    /**
     * Stores a list of reusable instances
     *
     * @var array
     */
    protected $reusable = [];

    /**
     * Destroys the current PHQL cache
     */
    public function __destruct()
    {
    }

    /**
     * Binds a behavior to a model
     *
     * @param ModelInterface    $model
     * @param BehaviorInterface $behavior
     * @return void
     */
    public function addBehavior(\Phalcon\Mvc\ModelInterface $model, BehaviorInterface $behavior): void
    {
    }

    /**
     * Setup a relation reverse many to one between two models
     *
     * @param ModelInterface $model
     * @param mixed          $fields
     * @param string         $referencedModel
     * @param mixed          $referencedFields
     * @param array          $options
     *
     * @return RelationInterface
     */
    public function addBelongsTo(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, array $options = []): RelationInterface
    {
    }

    /**
     * Setup a relation 1-n between two models
     *
     * @param ModelInterface $model
     * @param mixed          $fields
     * @param string         $referencedModel
     * @param mixed          $referencedFields
     * @param array          $options
     *
     * @return RelationInterface
     */
    public function addHasMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, array $options = []): RelationInterface
    {
    }

    /**
     * Setups a relation n-m between two models
     *
     * @param ModelInterface $model
     * @param mixed          $fields
     * @param string         $intermediateModel
     * @param mixed          $intermediateFields
     * @param mixed          $intermediateReferencedFields
     * @param string         $referencedModel
     * @param mixed          $referencedFields
     * @param array          $options
     *
     * @return RelationInterface
     */
    public function addHasManyToMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, array $options = []): RelationInterface
    {
    }

    /**
     * Setup a 1-1 relation between two models
     *
     * @param ModelInterface $model
     * @param mixed          $fields
     * @param string         $referencedModel
     * @param mixed          $referencedFields
     * @param array          $options
     *
     * @return RelationInterface
     */
    public function addHasOne(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, array $options = []): RelationInterface
    {
    }

    /**
     * Setups a relation 1-1 between two models using an intermediate model
     *
     * @param ModelInterface $model
     * @param mixed          $fields
     * @param string         $intermediateModel
     * @param mixed          $intermediateFields
     * @param mixed          $intermediateReferencedFields
     * @param string         $referencedModel
     * @param mixed          $referencedFields
     * @param array          $options
     *
     * @return RelationInterface
     */
    public function addHasOneThrough(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, array $options = []): RelationInterface
    {
    }

    /**
     * Clears the internal reusable list
     *
     * @return void
     */
    public function clearReusableObjects(): void
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query\Builder
     *
     * @param array|string|null $params
     * @return BuilderInterface
     */
    public function createBuilder($params = null): BuilderInterface
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query without execute it
     *
     * @param string $phql
     *
     * @return QueryInterface
     */
    public function createQuery(string $phql): QueryInterface
    {
    }

    /**
     * Creates a Phalcon\Mvc\Model\Query and execute it
     *
     * ```php
     * $model = new Robots();
     * $manager = $model->getModelsManager();
     *
     * // \Phalcon\Mvc\Model\Resultset\Simple
     * $manager->executeQuery('SELECT FROM Robots');
     *
     * // \Phalcon\Mvc\Model\Resultset\Complex
     * $manager->executeQuery('SELECT COUNT(type) FROM Robots GROUP BY type');
     *
     * // \Phalcon\Mvc\Model\Query\StatusInterface
     * $manager->executeQuery('INSERT INTO Robots (id) VALUES (1)');
     *
     * // \Phalcon\Mvc\Model\Query\StatusInterface
     * $manager->executeQuery('UPDATE Robots SET id = 0 WHERE id = :id:', ['id' => 1]);
     *
     * // \Phalcon\Mvc\Model\Query\StatusInterface
     * $manager->executeQuery('DELETE FROM Robots WHERE id = :id:', ['id' => 1]);
     * ```
     *
     * @param string     $phql
     * @param array|null $placeholders
     * @param array|null $types
     *
     * @return ResultsetInterface|StatusInterface
     */
    public function executeQuery(string $phql, $placeholders = null, $types = null): mixed
    {
    }

    /**
     * Checks whether a model has a belongsTo relation with another model
     *
     * @deprecated
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
     * @deprecated
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasManyToMany relation with another model
     *
     * @deprecated
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasManyToMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @deprecated
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasOne(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasOneThrough relation with another model
     *
     * @deprecated
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasOneThrough(string $modelName, string $modelRelation): bool
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
     * @param ModelInterface $model
     *
     * @return RelationInterface[] | array
     */
    public function getBelongsTo(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Gets belongsTo related records from a model
     *
     * @param string         $modelName
     * @param string         $modelRelation
     * @param ModelInterface $record
     * @param mixed|null     $parameters
     * @param string|null    $method
     *
     * @return ResultsetInterface | bool
     */
    public function getBelongsToRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null): ResultsetInterface|bool
    {
    }

    /**
     * Returns the newly created Phalcon\Mvc\Model\Query\Builder or null
     *
     * @return BuilderInterface | null
     */
    public function getBuilder(): BuilderInterface|null
    {
    }

    /**
     * Returns the connection service name used to read or write data related to
     * a model depending on the connection services
     *
     * @param ModelInterface $model
     * @param array          $connectionServices
     *
     * @return string
     */
    public function getConnectionService(\Phalcon\Mvc\ModelInterface $model, array $connectionServices): string
    {
    }

    /**
     * Returns a custom events manager related to a model or null if there is
     * no related events manager
     *
     * @param ModelInterface $model
     *
     * @return EventsManagerInterface | null
     */
    public function getCustomEventsManager(\Phalcon\Mvc\ModelInterface $model): EventsManagerInterface|null
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return EventsManagerInterface|null
     */
    public function getEventsManager(): EventsManagerInterface|null
    {
    }

    /**
     * Gets hasMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasMany(\Phalcon\Mvc\ModelInterface $model): array
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
     * @return bool|ResultsetInterface
     */
    public function getHasManyRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null): ResultsetInterface|bool
    {
    }

    /**
     * Gets hasManyToMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasManyToMany(\Phalcon\Mvc\ModelInterface $model): array
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
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasOneAndHasMany(\Phalcon\Mvc\ModelInterface $model): array
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
     * @return bool|ModelInterface
     */
    public function getHasOneRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null): ModelInterface|bool
    {
    }

    /**
     * Gets hasOneThrough relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasOneThrough(\Phalcon\Mvc\ModelInterface $model): array
    {
    }

    /**
     * Get last initialized model
     *
     * @return ModelInterface
     */
    public function getLastInitialized(): ModelInterface
    {
    }

    /**
     * Returns the last query created or executed in the models manager
     *
     * @return QueryInterface
     */
    public function getLastQuery(): QueryInterface
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
     * Returns the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string|null
     */
    public function getModelSchema(\Phalcon\Mvc\ModelInterface $model): string|null
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
     * Returns the connection to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return AdapterInterface
     */
    public function getReadConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface
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
     * Returns a relation by its alias
     *
     * @param string $modelName
     * @param string $alias *
     * @return RelationInterface|bool
     */
    public function getRelationByAlias(string $modelName, string $alias): RelationInterface|bool
    {
    }

    /**
     * Helper method to query records based on a relation definition
     *
     * @param RelationInterface $relation
     * @param ModelInterface    $record
     * @param mixed|null        $parameters
     * @param string|null       $method
     *
     * @return \Phalcon\Mvc\Model\Resultset\Simple|int|false
     */
    public function getRelationRecords(RelationInterface $relation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null)
    {
    }

    /**
     * Query all the relationships defined on a model
     *
     * @param string $modelName
     *
     * @return RelationInterface[]
     */
    public function getRelations(string $modelName): array
    {
    }

    /**
     * Query the first relationship defined between two models
     *
     * @param string $first
     * @param string $second
     *
     * @return RelationInterface[] | bool
     */
    public function getRelationsBetween(string $first, string $second): bool|array
    {
    }

    /**
     * Returns a reusable object from the internal list
     *
     * @param string $modelName
     * @param string $key
     *
     * @return mixed
     */
    public function getReusableRecords(string $modelName, string $key)
    {
    }

    /**
     * Returns the connection to write data related to a model
     *
     * @param ModelInterface $model
     *
     * @return AdapterInterface
     */
    public function getWriteConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface
    {
    }

    /**
     * Returns the connection service name used to write data related to a model
     *
     * @param ModelInterface $model
     *
     * @return string
     */
    public function getWriteConnectionService(\Phalcon\Mvc\ModelInterface $model): string
    {
    }

    /**
     * Checks whether a model has a belongsTo relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     *
     * @return bool
     */
    public function hasBelongsTo(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     *
     * @return bool
     */
    public function hasHasMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasManyToMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     *
     * @return bool
     */
    public function hasHasManyToMany(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     *
     * @return bool
     */
    public function hasHasOne(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Checks whether a model has a hasOneThrough relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     *
     * @return bool
     */
    public function hasHasOneThrough(string $modelName, string $modelRelation): bool
    {
    }

    /**
     * Initializes a model in the model manager
     *
     * @param ModelInterface $model
     *
     * @return bool
     */
    public function initialize(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Check whether a model is already initialized
     *
     * @param string $className
     *
     * @return bool
     */
    public function isInitialized(string $className): bool
    {
    }

    /**
     * Checks if a model is keeping snapshots for the queried records
     *
     * @param ModelInterface $model
     *
     * @return bool
     */
    public function isKeepingSnapshots(\Phalcon\Mvc\ModelInterface $model): bool
    {
    }

    /**
     * Checks if a model is using dynamic update instead of all-field update
     *
     * @param ModelInterface $model
     *
     * @return bool
     */
    public function isUsingDynamicUpdate(\Phalcon\Mvc\ModelInterface $model): bool
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
     * @param ModelInterface $model
     * @param string         $property
     *
     * @return bool
     */
    final public function isVisibleModelProperty(\Phalcon\Mvc\ModelInterface $model, string $property): bool
    {
    }

    /**
     * Sets if a model must keep snapshots
     *
     * @param ModelInterface $model
     * @param bool           $keepSnapshots
     *
     * @return void
     */
    public function keepSnapshots(\Phalcon\Mvc\ModelInterface $model, bool $keepSnapshots): void
    {
    }

    /**
     * Loads a model throwing an exception if it doesn't exist
     *
     * @param string $modelName
     *
     * @return ModelInterface
     */
    public function load(string $modelName): ModelInterface
    {
    }

    /**
     * Receives events generated in the models and dispatches them to an
     * events-manager if available. Notify the behaviors that are listening in
     * the model
     *
     * @param string         $eventName
     * @param ModelInterface $model
     */
    public function notifyEvent(string $eventName, \Phalcon\Mvc\ModelInterface $model)
    {
    }

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that a least one was implemented
     *
     * @param ModelInterface $model
     * @param string         $eventName
     * @param mixed          $data
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $eventName, $data)
    {
    }

    /**
     * Sets both write and read connection service for a model
     *
     * @param ModelInterface $model
     * @param string         $connectionService
     *
     * @return void
     */
    public function setConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService): void
    {
    }

    /**
     * Sets a custom events manager for a specific model
     *
     * @param ModelInterface         $model
     * @param EventsManagerInterface $eventsManager
     *
     * @return void
     */
    public function setCustomEventsManager(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param DiInterface $container
     *
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Sets a global events manager
     *
     * @param EventsManagerInterface $eventsManager
     *
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
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
     * $param string $prefix
     *
     * @return void
     * @param string $prefix
     */
    public function setModelPrefix(string $prefix): void
    {
    }

    /**
     * Sets the mapped schema for a model
     *
     * @param ModelInterface $model
     * @param string         $schema
     *
     * @return void
     */
    public function setModelSchema(\Phalcon\Mvc\ModelInterface $model, string $schema): void
    {
    }

    /**
     * Sets the mapped source for a model
     *
     * @param ModelInterface $model
     * @param string         $source
     *
     * @return void
     */
    public function setModelSource(\Phalcon\Mvc\ModelInterface $model, string $source): void
    {
    }

    /**
     * Sets read connection service for a model
     *
     * @param ModelInterface $model
     * @param string         $connectionService
     *
     * @return void
     */
    public function setReadConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService): void
    {
    }

    /**
     * Stores a reusable record in the internal list
     *
     * @param ModelInterface $model
     * @param string         $key
     * @param mixed          $records
     *
     * @return void
     * @param string $modelName
     */
    public function setReusableRecords(string $modelName, string $key, $records): void
    {
    }

    /**
     * Sets write connection service for a model
     *
     * @param ModelInterface $model
     * @param string         $connectionService
     *
     * @return void
     */
    public function setWriteConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService): void
    {
    }

    /**
     * Sets if a model must use dynamic update instead of the all-field update
     *
     * @param ModelInterface $model
     * @param bool           $dynamicUpdate
     *
     * @return void
     */
    public function useDynamicUpdate(\Phalcon\Mvc\ModelInterface $model, bool $dynamicUpdate): void
    {
    }

    /**
     * Returns the connection to read or write data related to a model
     * depending on the connection services.
     *
     * @param ModelInterface $model
     * @param array          $connectionServices
     *
     * @return AdapterInterface
     */
    protected function getConnection(\Phalcon\Mvc\ModelInterface $model, array $connectionServices): AdapterInterface
    {
    }

    /**
     * Merge two arrays of find parameters
     *
     * @param mixed $findParamsOne
     * @param mixed $findParamsTwo
     *
     * @return array
     */
    final protected function mergeFindParameters($findParamsOne, $findParamsTwo): array
    {
    }

    /**
     * @param string $collection
     * @param string $modelName
     * @param string $modelRelation
     *
     * @return bool
     */
    private function checkHasRelationship(string $collection, string $modelName, string $modelRelation): bool
    {
    }
}
