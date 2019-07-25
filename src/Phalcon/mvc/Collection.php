<?php

namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\Collection
 *
 * This component implements a high level abstraction for NoSQL databases which
 * works with documents
 */
abstract class Collection implements \Phalcon\Mvc\EntityInterface, \Phalcon\Mvc\CollectionInterface, \Phalcon\Di\InjectionAwareInterface, \Serializable
{

    const DIRTY_STATE_DETACHED = 2;


    const DIRTY_STATE_PERSISTENT = 0;


    const DIRTY_STATE_TRANSIENT = 1;


    const OP_CREATE = 1;


    const OP_DELETE = 3;


    const OP_NONE = 0;


    const OP_UPDATE = 2;


    public $_id;


    protected $connection;


    protected $container;


    protected $dirtyState = 1;


    static protected $disableEvents;


    protected $errorMessages = array();


    protected $modelsManager;


    protected $operationMade = 0;


    static protected $reserved;


    protected $skipped = false;


    protected $source;


    /**
     * Phalcon\Mvc\Collection constructor
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param \Phalcon\Mvc\Collection\ManagerInterface $modelsManager
     */
    final public function __construct(\Phalcon\Di\DiInterface $container = null, \Phalcon\Mvc\Collection\ManagerInterface $modelsManager = null) {}

    /**
     * Sets up a behavior in a collection
     *
     * @param \Phalcon\Mvc\Collection\BehaviorInterface $behavior
     */
    protected function addBehavior(\Phalcon\Mvc\Collection\BehaviorInterface $behavior) {}

    /**
     * Perform an aggregation using the Mongo aggregation framework
     *
     * @param array $parameters
     * @param array $options
     * @return array
     */
    public static function aggregate(array $parameters = null, array $options = null): array {}

    /**
     * Appends a customized message on the validation process
     *
     * ```php
     * use \Phalcon\Messages\Message as Message;
     *
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function beforeSave()
     *     {
     *         if ($this->name === "Peter") {
     *             $message = new Message(
     *                 "Sorry, but a robot cannot be named Peter"
     *             );
     *
     *             $this->appendMessage(message);
     *         }
     *     }
     * }
     * ```
     *
     * @param \Phalcon\Messages\MessageInterface $message
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message) {}

    /**
     * Returns a cloned collection
     *
     * @param CollectionInterface $collection
     * @param array $document
     * @return CollectionInterface
     */
    public static function cloneResult(CollectionInterface $collection, array $document): CollectionInterface {}

    /**
     * Creates a collection based on the values in the attributes
     *
     * @return bool
     */
    public function create(): bool {}

    /**
     * Creates a document based on the values in the attributes, if not found by
     * criteria. Preferred way to avoid duplication is to create index o
     * attribute
     *
     * ```php
     * $robot = new Robot();
     *
     * $robot->name = "MyRobot";
     * $robot->type = "Droid";
     *
     * // Create only if robot with same name and type does not exist
     * $robot->createIfNotExist(
     *     [
     *         "name",
     *         "type",
     *     ]
     * );
     * ```
     *
     * @param array $criteria
     * @return bool
     */
    public function createIfNotExist(array $criteria): bool {}

    /**
     * Perform a count over a collection
     *
     * ```php
     * echo "There are ", Robots::count(), " robots";
     * ```
     *
     * @param array $parameters
     * @return int
     */
    public static function count(array $parameters = null): int {}

    /**
     * Deletes a model instance. Returning true on success or false otherwise.
     *
     * ```php
     * $robot = Robots::findFirst();
     *
     * $robot->delete();
     *
     * $robots = Robots::find();
     *
     * foreach ($robots as $robot) {
     *     $robot->delete();
     * }
     * ```
     *
     * @return bool
     */
    public function delete(): bool {}

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * ```php
     * // How many robots are there?
     * $robots = Robots::find();
     *
     * echo "There are ", count($robots), "\n";
     *
     * // How many mechanical robots are there?
     * $robots = Robots::find(
     *     [
     *         [
     *             "type" => "mechanical",
     *         ]
     *     ]
     * );
     *
     * echo "There are ", count(robots), "\n";
     *
     * // Get and print virtual robots ordered by name
     * $robots = Robots::findFirst(
     *     [
     *         [
     *             "type" => "virtual"
     *         ],
     *         "order" => [
     *             "name" => 1,
     *         ]
     *     ]
     * );
     *
     * foreach ($robots as $robot) {
     *       echo $robot->name, "\n";
     * }
     *
     * // Get first 100 virtual robots ordered by name
     * $robots = Robots::find(
     *     [
     *         [
     *             "type" => "virtual",
     *         ],
     *         "order" => [
     *             "name" => 1,
     *         ],
     *         "limit" => 100,
     *     ]
     * );
     *
     * foreach ($robots as $robot) {
     *       echo $robot->name, "\n";
     * }
     * ```
     *
     * @param array $parameters
     * @return array
     */
    public static function find(array $parameters = null): array {}

    /**
     * Find a document by its id (_id)
     *
     * ```php
     * // Find user by using \MongoId object
     * $user = Users::findById(
     *     new \MongoId("545eb081631d16153a293a66")
     * );
     *
     * // Find user by using id as sting
     * $user = Users::findById("45cbc4a0e4123f6920000002");
     *
     * // Validate input
     * if ($user = Users::findById($_POST["id"])) {
     *     // ...
     * }
     * ```
     *
     * @param mixed $id
     * @return null|CollectionInterface
     */
    public static function findById($id): ?CollectionInterface {}

    /**
     * Allows to query the first record that match the specified conditions
     *
     * ```php
     * // What's the first robot in the robots table?
     * $robot = Robots::findFirst();
     *
     * echo "The robot name is ", $robot->name, "\n";
     *
     * // What's the first mechanical robot in robots table?
     * $robot = Robots::findFirst(
     *     [
     *         [
     *             "type" => "mechanical",
     *         ]
     *     ]
     * );
     *
     * echo "The first mechanical robot name is ", $robot->name, "\n";
     *
     * // Get first virtual robot ordered by name
     * $robot = Robots::findFirst(
     *     [
     *         [
     *             "type" => "mechanical",
     *         ],
     *         "order" => [
     *             "name" => 1,
     *         ],
     *     ]
     * );
     *
     * echo "The first virtual robot name is ", $robot->name, "\n";
     *
     * // Get first robot by id (_id)
     * $robot = Robots::findFirst(
     *     [
     *         [
     *             "_id" => new \MongoId("45cbc4a0e4123f6920000002"),
     *         ]
     *     ]
     * );
     *
     * echo "The robot id is ", $robot->_id, "\n";
     * ```
     *
     * @param array $parameters
     * @return array
     */
    public static function findFirst(array $parameters = null): array {}

    /**
     * Fires an internal event
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEvent(string $eventName): bool {}

    /**
     * Fires an internal event that cancels the operation
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEventCancel(string $eventName): bool {}

    /**
     * Returns the models manager related to the entity instance
     *
     * @return \Phalcon\Mvc\Collection\ManagerInterface
     */
    public function getCollectionManager(): ManagerInterface {}

    /**
     * Retrieves a database connection
     *
     * @return \MongoDb
     */
    public function getConnection() {}

    /**
     * Returns DependencyInjection connection service
     *
     * @return string
     */
    public function getConnectionService(): string {}

    /**
     * Returns the dependency injection container
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface {}

    /**
     * Returns one of the DIRTY_STATE_ constants telling if the document exists
     * in the collection or not
     *
     * @return int
     */
    public function getDirtyState(): int {}

    /**
     * Returns the custom events manager
     *
     * @return \Phalcon\Mvc\Collection\ManagerInterface
     */
    protected function getEventsManager(): ManagerInterface {}

    /**
     * Returns the value of the _id property
     *
     * @return \MongoId
     */
    public function getId() {}

    /**
     * Returns all the validation messages
     *
     * ```php
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * if ($robot->save() === false) {
     *     echo "Umh, We can't store robots right now ";
     *
     *     $messages = $robot->getMessages();
     *
     *     foreach ($messages as $message) {
     *         echo $message;
     *     }
     * } else {
     *     echo "Great, a new robot was saved successfully!";
     * }
     * ```
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array {}

    /**
     * Returns an array with reserved properties that cannot be part of the
     * insert/update
     *
     * @return array
     */
    public function getReservedAttributes(): array {}

    /**
     * Returns collection name mapped in the model
     *
     * @return string
     */
    public function getSource(): string {}

    /**
     * Reads an attribute value by its name
     *
     * ```php
     *    echo $robot->readAttribute("name");
     * ```
     *
     * @param string $attribute
     * @return mixed|null
     */
    public function readAttribute(string $attribute): ? {}

    /**
     * Creates/Updates a collection based on the values in the attributes
     *
     * @return bool
     */
    public function save(): bool {}

    /**
     * Serializes the object ignoring connections or protected properties
     *
     * @return string
     */
    public function serialize(): string {}

    /**
     * Sets the DependencyInjection connection service name
     *
     * @param string $connectionService
     * @return Collection
     */
    public function setConnectionService(string $connectionService): Collection {}

    /**
     * Sets the dependency injection container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Sets the dirty state of the object using one of the DIRTY_STATE_
     * constants
     *
     * @param int $dirtyState
     * @return CollectionInterface
     */
    public function setDirtyState(int $dirtyState): CollectionInterface {}

    /**
     * Sets a custom events manager
     *
     * @param \Phalcon\Mvc\Collection\ManagerInterface $eventsManager
     */
    protected function setEventsManager(\Phalcon\Mvc\Collection\ManagerInterface $eventsManager) {}

    /**
     * Sets a value for the _id property, creates a MongoId object if needed
     *
     * @param mixed $id
     */
    public function setId($id) {}

    /**
     * Sets collection name which model should be mapped
     *
     * @param string $source
     * @return Collection
     */
    protected function setSource(string $source): Collection {}

    /**
     * Skips the current operation forcing a success state
     *
     * @param bool $skip
     */
    public function skipOperation(bool $skip) {}

    /**
     * Allows to perform a summatory group for a column in the collection
     *
     * @param string $field
     * @param mixed $conditions
     * @param mixed $finalize
     * @return array
     */
    public static function summatory(string $field, $conditions = null, $finalize = null): array {}

    /**
     * Returns the instance as an array representation
     *
     * ```php
     * print_r(
     *     $robot->toArray()
     * );
     * ```
     *
     * @return array
     */
    public function toArray(): array {}

    /**
     * Unserializes the object from a serialized string
     *
     * @param mixed $data
     */
    public function unserialize($data) {}

    /**
     * Creates/Updates a collection based on the values in the attributes
     *
     * @return bool
     */
    public function update(): bool {}

    /**
     * Executes validators on every validation call
     *
     * ```php
     * use Phalcon\Mvc\Collection;
     * use Phalcon\Validation;
     * use Phalcon\Validation\Validator\ExclusionIn;
     *
     * class Subscriptors extends Collection
     * {
     *     public function validation()
     *     {
     *         $validator = new Validation();
     *
     *         $validator->add(
     *             "status",
     *             new ExclusionIn(
     *                 [
     *                     "domain" => [
     *                         "A",
     *                         "I",
     *                     ],
     *                 ]
     *             )
     *         );
     *
     *         return $this->validate($validator);
     *     }
     * }
     * ```
     *
     * @param \Phalcon\Validation\ValidationInterface $validator
     * @return bool
     */
    protected function validate(\Phalcon\Validation\ValidationInterface $validator): bool {}

    /**
     * Sets if a model must use implicit objects ids
     *
     * @param bool $useImplicitObjectIds
     */
    protected function useImplicitObjectIds(bool $useImplicitObjectIds) {}

    /**
     * Writes an attribute value by its name
     *
     * ```php
     *    $robot->writeAttribute("name", "Rosey");
     * ```
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function writeAttribute(string $attribute, $value) {}

    /**
     * Cancel the current operation
     *
     * @param bool $disableEvents
     * @return bool
     */
    protected function cancelOperation(bool $disableEvents): bool {}

    /**
     * Checks if the document exists in the collection
     *
     * @param MongoCollection $collection
     * @return bool
     */
    protected function exists($collection): bool {}

    /**
     * Perform a count over a resultset
     *
     * @param array $params
     * @param Collection $collection
     * @param \MongoDb $connection
     * @return int
     */
    protected static function getGroupResultset($params, Collection $collection, $connection): int {}

    /**
     * Returns a collection resultset
     *
     * @param array $params
     * @param CollectionInterface $collection
     * @param \MongoDb $connection
     * @param bool $unique
     * @return array
     */
    protected static function getResultset($params, CollectionInterface $collection, $connection, bool $unique) {}

    /**
     * Executes internal hooks before save a document
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param bool $disableEvents
     * @param bool $exists
     * @return bool
     */
    final protected function preSave(\Phalcon\Di\DiInterface $container, bool $disableEvents, bool $exists): bool {}

    /**
     * Executes internal events after save a document
     *
     * @param bool $disableEvents
     * @param bool $success
     * @param bool $exists
     * @return bool
     */
    final protected function postSave(bool $disableEvents, bool $success, bool $exists): bool {}

    /**
     * Shared Code for CU Operations
     * Prepares Collection
     */
    protected function prepareCU() {}

}
