<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\ManagerInterface
 *
 * Interface for Phalcon\Mvc\Model\Manager
 */
interface ManagerInterface
{

    /**
     * Binds a behavior to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Mvc\Model\BehaviorInterface $behavior
     */
    public function addBehavior(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Mvc\Model\BehaviorInterface $behavior);

    /**
     * Setup a relation reverse 1-1  between two models
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $fields
     * @param string $referencedModel
     * @param mixed $referencedFields
     * @param array $options
     * @return \Phalcon\Mvc\Model\RelationInterface
     */
    public function addBelongsTo(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): RelationInterface;

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
    public function addHasMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): RelationInterface;

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
    public function addHasOne(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, $options = null): RelationInterface;

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
    public function addHasManyToMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, $options = null): RelationInterface;

    /**
     * Creates a Phalcon\Mvc\Model\Query\Builder
     *
     * @param string $params
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function createBuilder($params = null): BuilderInterface;

    /**
     * Creates a Phalcon\Mvc\Model\Query without execute it
     *
     * @param string $phql
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function createQuery(string $phql): QueryInterface;

    /**
     * Creates a Phalcon\Mvc\Model\Query and execute it
     *
     * @param string $phql
     * @param array $placeholders
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function executeQuery(string $phql, $placeholders = null): QueryInterface;

    /**
     * Checks whether a model has a belongsTo relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsBelongsTo(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasMany(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasOne(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasManyToMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function existsHasManyToMany(string $modelName, string $modelRelation): bool;

    /**
     * Gets belongsTo relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getBelongsTo(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @param ModelInterface $record
     * @param array|string|null $parameters
     * @param string|null $method
     * @return bool|ResultsetInterface
     */
    public function getBelongsToRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null);

    /**
     * Gets hasMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasMany(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasMany related records from a model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @param ModelInterface $record
     * @param array|string|null $parameters
     * @param string|null $method
     * @return bool|ResultsetInterface
     */
    public function getHasManyRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null);

    /**
     * Gets hasManyToMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasManyToMany(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasOne(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getHasOneAndHasMany(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets belongsTo related records from a model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @param ModelInterface $record
     * @param array|string|null $parameters
     * @param string|null $method
     * @return bool|\Phalcon\Mvc\ModelInterface
     */
    public function getHasOneRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null);

    /**
     * Get last initialized model
     *
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getLastInitialized(): ModelInterface;

    /**
     * Returns the last query created or executed in the models manager
     *
     * @return \Phalcon\Mvc\Model\QueryInterface
     */
    public function getLastQuery(): QueryInterface;

    /**
     * Returns the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSchema(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Returns the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getModelSource(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Returns the connection to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    public function getReadConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface;

    /**
     * Returns the connection service name used to read data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getReadConnectionService(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Returns a relation by its alias
     *
     * @param string $modelName
     * @param string $alias
     * @return bool|Relation
     */
    public function getRelationByAlias(string $modelName, string $alias);

    /**
     * Helper method to query records based on a relation definition
     *
     * @param \Phalcon\Mvc\Model\RelationInterface $relation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @param string $method
     * @return \Phalcon\Mvc\Model\Resultset\Simple|Phalcon\Mvc\Model\Resultset\Simple|int|false
     */
    public function getRelationRecords(\Phalcon\Mvc\Model\RelationInterface $relation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null);

    /**
     * Query all the relationships defined on a model
     *
     * @param string $modelName
     * @return array|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelations(string $modelName): array;

    /**
     * Query the relations between two models
     *
     * @param string $first
     * @param string $second
     * @return array|bool|\Phalcon\Mvc\Model\RelationInterface[]
     */
    public function getRelationsBetween(string $first, string $second);

    /**
     * Returns the connection to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return \Phalcon\Db\Adapter\AdapterInterface
     */
    public function getWriteConnection(\Phalcon\Mvc\ModelInterface $model): AdapterInterface;

    /**
     * Returns the connection service name used to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string
     */
    public function getWriteConnectionService(\Phalcon\Mvc\ModelInterface $model): string;

    /**
     * Loads a model throwing an exception if it doesn't exist
     *
     * @param string $modelName
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function load(string $modelName): ModelInterface;

    /**
     * Initializes a model in the model manager
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function initialize(\Phalcon\Mvc\ModelInterface $model);

    /**
     * Check of a model is already initialized
     *
     * @param string $className
     * @return bool
     */
    public function isInitialized(string $className): bool;

    /**
     * Checks if a model is keeping snapshots for the queried records
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function isKeepingSnapshots(\Phalcon\Mvc\ModelInterface $model): bool;

    /**
     * Checks if a model is using dynamic update instead of all-field update
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool
     */
    public function isUsingDynamicUpdate(\Phalcon\Mvc\ModelInterface $model): bool;

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
    final public function isVisibleModelProperty(\Phalcon\Mvc\ModelInterface $model, string $property): bool;

    /**
     * Sets if a model must keep snapshots
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $keepSnapshots
     */
    public function keepSnapshots(\Phalcon\Mvc\ModelInterface $model, bool $keepSnapshots);

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that a least one is implemented
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $eventName
     * @param array $data
     * @return bool
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $eventName, $data);

    /**
     * Receives events generated in the models and dispatches them to an events-manager if available
     * Notify the behaviors that are listening in the model
     *
     * @param string $eventName
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notifyEvent(string $eventName, \Phalcon\Mvc\ModelInterface $model);

    /**
     * Sets both write and read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService);

    /**
     * Sets read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setReadConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService);

    /**
     * Sets the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $schema
     */
    public function setModelSchema(\Phalcon\Mvc\ModelInterface $model, string $schema);

    /**
     * Sets the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $source
     */
    public function setModelSource(\Phalcon\Mvc\ModelInterface $model, string $source);

    /**
     * Sets write connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     */
    public function setWriteConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService);

    /**
     * Sets if a model must use dynamic update instead of the all-field update
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $dynamicUpdate
     */
    public function useDynamicUpdate(\Phalcon\Mvc\ModelInterface $model, bool $dynamicUpdate);

}
