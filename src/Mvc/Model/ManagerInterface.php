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
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Query\BuilderInterface;
use Phalcon\Mvc\Model\Query\StatusInterface;

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
     * @param BehaviorInterface $behavior
     * @return void
     */
    public function addBehavior(\Phalcon\Mvc\ModelInterface $model, BehaviorInterface $behavior): void;

    /**
     * Setup a relation reverse 1-1  between two models
     *
     * @param mixed $fields
     * @param mixed $referencedFields
     * @param array $options
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $referencedModel
     * @return RelationInterface
     */
    public function addBelongsTo(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, array $options = []): RelationInterface;

    /**
     * Setup a relation 1-n between two models
     *
     * @param mixed $fields
     * @param mixed $referencedFields
     * @param array $options
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $referencedModel
     * @return RelationInterface
     */
    public function addHasMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, array $options = []): RelationInterface;

    /**
     * Setup a 1-1 relation between two models
     *
     * @param mixed $fields
     * @param mixed $referencedFields
     * @param array $options
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $referencedModel
     * @return RelationInterface
     */
    public function addHasOne(\Phalcon\Mvc\ModelInterface $model, $fields, string $referencedModel, $referencedFields, array $options = []): RelationInterface;

    /**
     * Setups a 1-1 relation between two models using an intermediate table
     *
     * @param string $fields
     * @param string $intermediateFields
     * @param string $intermediateReferencedFields
     * @param string $referencedFields
     * @param array $options
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $intermediateModel
     * @param string $referencedModel
     * @return RelationInterface
     */
    public function addHasOneThrough(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, array $options = []): RelationInterface;

    /**
     * Setups a relation n-m between two models
     *
     * @param string $fields
     * @param string $intermediateFields
     * @param string $intermediateReferencedFields
     * @param string $referencedFields
     * @param array $options
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $intermediateModel
     * @param string $referencedModel
     * @return RelationInterface
     */
    public function addHasManyToMany(\Phalcon\Mvc\ModelInterface $model, $fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referencedModel, $referencedFields, array $options = []): RelationInterface;

    /**
     * Creates a Phalcon\Mvc\Model\Query\Builder
     *
     * @param array|string|null $params
     * @return BuilderInterface
     */
    public function createBuilder($params = null): BuilderInterface;

    /**
     * Creates a Phalcon\Mvc\Model\Query without execute it
     *
     * @param string $phql
     * @return QueryInterface
     */
    public function createQuery(string $phql): QueryInterface;

    /**
     * Creates a Phalcon\Mvc\Model\Query and execute it
     *
     * @param array|null $placeholders
     * @param array|null $types
     * @return ResultsetInterface|StatusInterface
     * @param string $phql
     */
    public function executeQuery(string $phql, $placeholders = null, $types = null): mixed;

    /**
     * Gets belongsTo relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getBelongsTo(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets belongsTo related records from a model
     *
     * @param string            $modelName
     * @param string            $modelRelation
     * @param ModelInterface    $record
     * @param array|string|null $parameters
     * @param string|null       $method
     * @return bool|ResultsetInterface
     */
    public function getBelongsToRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null): ResultsetInterface|bool;

    /**
     * Returns the newly created Phalcon\Mvc\Model\Query\Builder or null
     *
     * @return BuilderInterface|null
     */
    public function getBuilder(): BuilderInterface|null;

    /**
     * Gets hasMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasMany(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasMany related records from a model
     *
     * @param string            $modelName
     * @param string            $modelRelation
     * @param ModelInterface    $record
     * @param array|string|null $parameters
     * @param string|null       $method
     * @return bool|ResultsetInterface
     */
    public function getHasManyRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null): ResultsetInterface|bool;

    /**
     * Gets hasManyToMany relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasManyToMany(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasOne(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasOneThrough relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasOneThrough(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasOne relations defined on a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|RelationInterface[]
     */
    public function getHasOneAndHasMany(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Gets hasOne related records from a model
     *
     * @param string            $modelName
     * @param string            $modelRelation
     * @param ModelInterface    $record
     * @param array|string|null $parameters
     * @param string|null       $method
     * @return bool|ModelInterface
     */
    public function getHasOneRecords(string $modelName, string $modelRelation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null): ModelInterface|bool;

    /**
     * Get last initialized model
     *
     * @return ModelInterface
     */
    public function getLastInitialized(): ModelInterface;

    /**
     * Returns the last query created or executed in the models manager
     *
     * @return QueryInterface
     */
    public function getLastQuery(): QueryInterface;

    /**
     * Returns the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string|null
     */
    public function getModelSchema(\Phalcon\Mvc\ModelInterface $model): string|null;

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
     * @return AdapterInterface
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
     * @param string $alias *
     * @return RelationInterface|bool
     */
    public function getRelationByAlias(string $modelName, string $alias): RelationInterface|bool;

    /**
     * Helper method to query records based on a relation definition
     *
     * @return \Phalcon\Mvc\Model\Resultset\Simple|int|false
     * @param RelationInterface $relation
     * @param \Phalcon\Mvc\ModelInterface $record
     * @param mixed $parameters
     * @param string $method
     */
    public function getRelationRecords(RelationInterface $relation, \Phalcon\Mvc\ModelInterface $record, $parameters = null, string $method = null);

    /**
     * Query all the relationships defined on a model
     *
     * @param string $modelName
     * @return array|RelationInterface[]
     */
    public function getRelations(string $modelName): array;

    /**
     * Query the relations between two models
     *
     * @param string $first
     * @param string $second
     * @return array|bool|RelationInterface[]
     */
    public function getRelationsBetween(string $first, string $second): bool|array;

    /**
     * Returns the connection to write data related to a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return AdapterInterface
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
     * Checks whether a model has a belongsTo relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function hasBelongsTo(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function hasHasMany(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasOne relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function hasHasOne(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasOneThrough relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function hasHasOneThrough(string $modelName, string $modelRelation): bool;

    /**
     * Checks whether a model has a hasManyToMany relation with another model
     *
     * @param string $modelName
     * @param string $modelRelation
     * @return bool
     */
    public function hasHasManyToMany(string $modelName, string $modelRelation): bool;

    /**
     * Loads a model throwing an exception if it doesn't exist
     *
     * @param string $modelName
     * @return ModelInterface
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
    public function isVisibleModelProperty(\Phalcon\Mvc\ModelInterface $model, string $property): bool;

    /**
     * Sets if a model must keep snapshots
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param bool $keepSnapshots
     * @return void
     */
    public function keepSnapshots(\Phalcon\Mvc\ModelInterface $model, bool $keepSnapshots): void;

    /**
     * Dispatch an event to the listeners and behaviors
     * This method expects that the endpoint listeners/behaviors returns true
     * meaning that a least one is implemented
     *
     * @param array $data
     * @return bool
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $eventName
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
     * @return void
     */
    public function setConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService): void;

    /**
     * Sets read connection service for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $connectionService
     * @return void
     */
    public function setReadConnectionService(\Phalcon\Mvc\ModelInterface $model, string $connectionService): void;

    /**
     * Sets the mapped schema for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $schema
     * @return void
     */
    public function setModelSchema(\Phalcon\Mvc\ModelInterface $model, string $schema): void;

    /**
     * Sets the mapped source for a model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $source
     * @return void
     */
    public function setModelSource(\Phalcon\Mvc\ModelInterface $model, string $source): void;

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
     * @return void
     */
    public function useDynamicUpdate(\Phalcon\Mvc\ModelInterface $model, bool $dynamicUpdate): void;
}
