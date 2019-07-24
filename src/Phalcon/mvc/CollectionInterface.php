<?php

namespace Phalcon\Mvc;

/**
 * Interface for Phalcon\Mvc\Collection
 */
interface CollectionInterface
{

    /**
     * Appends a customized message on the validation process
     *
     * @param \Phalcon\Messages\MessageInterface $message
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message);

    /**
     * Returns a cloned collection
     *
     * @param CollectionInterface $collection
     * @param array $document
     * @return CollectionInterface
     */
    public static function cloneResult(CollectionInterface $collection, array $document): CollectionInterface;

    /**
     * Perform a count over a collection
     *
     * @param array $parameters
     * @return int
     */
    public static function count(array $parameters = null): int;

    /**
     * Deletes a model instance. Returning true on success or false otherwise
     *
     * @return bool
     */
    public function delete(): bool;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param array $parameters
     * @return array
     */
    public static function find(array $parameters = null): array;

    /**
     * Find a document by its id
     *
     * @param string $id
     * @return null|CollectionInterface
     */
    public static function findById($id): ?CollectionInterface;

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param array $parameters
     * @return array
     */
    public static function findFirst(array $parameters = null): array;

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events
     * manager are notified
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEvent(string $eventName): bool;

    /**
     * Fires an event, implicitly listeners in the events manager are notified
     * This method stops if one of the callbacks/listeners returns bool false
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEventCancel(string $eventName): bool;

    /**
     * Retrieves a database connection
     *
     * @return MongoDb
     */
    public function getConnection();

    /**
     * Returns one of the DIRTY_STATE_ constants telling if the record exists
     * in the database or not
     *
     * @return int
     */
    public function getDirtyState(): int;

    /**
     * Returns the value of the _id property
     *
     * @return MongoId
     */
    public function getId();

    /**
     * Returns all the validation messages
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Returns an array with reserved properties that cannot be part of the
     * insert/update
     *
     * @return array
     */
    public function getReservedAttributes(): array;

    /**
     * Returns collection name mapped in the model
     *
     * @return string
     */
    public function getSource(): string;

    /**
     * Creates/Updates a collection based on the values in the attributes
     *
     * @return bool
     */
    public function save(): bool;

    /**
     * Sets a service in the services container that returns the Mongo database
     *
     * @param string $connectionService
     */
    public function setConnectionService(string $connectionService);

    /**
     * Sets the dirty state of the object using one of the DIRTY_STATE_
     * constants
     *
     * @param int $dirtyState
     * @return CollectionInterface
     */
    public function setDirtyState(int $dirtyState): CollectionInterface;

    /**
     * Sets a value for the _id property, creates a MongoId object if needed
     *
     * @param mixed $id
     */
    public function setId($id);

    /**
     * Check whether validation process has generated any messages
     *
     * @return bool
     */
    public function validationHasFailed(): bool;

}
