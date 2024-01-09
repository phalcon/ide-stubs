<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use JsonSerializable;
use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Db\Column;
use Phalcon\Db\DialectInterface;
use Phalcon\Db\Enum;
use Phalcon\Db\RawValue;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Events\ManagerInterface as EventsManagerInterface;
use Phalcon\Messages\Message;
use Phalcon\Messages\MessageInterface;
use Phalcon\Mvc\Model\BehaviorInterface;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Mvc\Model\CriteriaInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\ManagerInterface;
use Phalcon\Mvc\Model\MetaDataInterface;
use Phalcon\Mvc\Model\Query;
use Phalcon\Mvc\Model\Query\Builder;
use Phalcon\Mvc\Model\Query\BuilderInterface;
use Phalcon\Mvc\Model\QueryInterface;
use Phalcon\Mvc\Model\ResultInterface;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Relation;
use Phalcon\Mvc\Model\RelationInterface;
use Phalcon\Mvc\Model\TransactionInterface;
use Phalcon\Mvc\Model\ValidationFailed;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Filter\Validation\ValidationInterface;
use Phalcon\Support\Collection;
use Phalcon\Support\Collection\CollectionInterface;
use Serializable;

/**
 * Phalcon\Mvc\Model
 *
 * Phalcon\Mvc\Model connects business objects and database tables to create a
 * persistable domain model where logic and data are presented in one wrapping.
 * It‘s an implementation of the object-relational mapping (ORM).
 *
 * A model represents the information (data) of the application and the rules to
 * manipulate that data. Models are primarily used for managing the rules of
 * interaction with a corresponding database table. In most cases, each table in
 * your database will correspond to one model in your application. The bulk of
 * your application's business logic will be concentrated in the models.
 *
 * Phalcon\Mvc\Model is the first ORM written in Zephir/C languages for PHP,
 * giving to developers high performance when interacting with databases while
 * is also easy to use.
 *
 * ```php
 * $robot = new Robots();
 *
 * $robot->type = "mechanical";
 * $robot->name = "Astro Boy";
 * $robot->year = 1952;
 *
 * if ($robot->save() === false) {
 *     echo "Umh, We can store robots: ";
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
 */
abstract class Model extends AbstractInjectionAware implements \Phalcon\Mvc\EntityInterface, \Phalcon\Mvc\ModelInterface, \Phalcon\Mvc\Model\ResultInterface, \Serializable, \JsonSerializable
{
    const DIRTY_STATE_DETACHED = 2;

    const DIRTY_STATE_PERSISTENT = 0;

    const DIRTY_STATE_TRANSIENT = 1;

    const OP_CREATE = 1;

    const OP_DELETE = 3;

    const OP_NONE = 0;

    const OP_UPDATE = 2;

    const TRANSACTION_INDEX = 'transaction';

    /**
     * @var int
     */
    protected $dirtyState = 1;

    /**
     * @var array
     */
    protected $dirtyRelated = [];

    /**
     * @var array
     */
    protected $errorMessages = [];

    /**
     * @var ManagerInterface|null
     */
    protected $modelsManager = null;

    /**
     * @var MetaDataInterface|null
     */
    protected $modelsMetaData = null;

    /**
     * @var array
     */
    protected $related = [];

    /**
     * @var int
     */
    protected $operationMade = 0;

    /**
     * @var array
     */
    protected $oldSnapshot = [];

    /**
     * @var bool
     */
    protected $skipped = false;

    /**
     * @var array
     */
    protected $snapshot = [];

    /**
     * @var TransactionInterface|null
     */
    protected $transaction = null;

    /**
     * @var string|null
     */
    protected $uniqueKey = null;

    /**
     * @var array
     */
    protected $uniqueParams = [];

    /**
     * @var array
     */
    protected $uniqueTypes = [];

    /**
     * Phalcon\Mvc\Model constructor
     *
     * @param mixed $data
     * @param \Phalcon\Di\DiInterface $container
     * @param \Phalcon\Mvc\Model\ManagerInterface $modelsManager
     */
    final public function __construct($data = null, \Phalcon\Di\DiInterface $container = null, \Phalcon\Mvc\Model\ManagerInterface $modelsManager = null)
    {
    }

    /**
     * Handles method calls when a method is not implemented
     *
     * @return mixed
     * @throws \Phalcon\Mvc\Model\Exception If the method doesn't exist
     * @param string $method
     * @param array $arguments
     */
    public function __call(string $method, array $arguments)
    {
    }

    /**
     * Handles method calls when a static method is not implemented
     *
     * @return mixed
     * @throws \Phalcon\Mvc\Model\Exception If the method doesn't exist
     * @param string $method
     * @param array $arguments
     */
    public static function __callStatic(string $method, array $arguments)
    {
    }

    /**
     * Magic method to get related records using the relation alias as a
     * property
     *
     * @return mixed
     * @param string $property
     */
    public function __get(string $property)
    {
    }

    /**
     * Magic method to check if a property is a valid relation
     *
     * @param string $property
     * @return bool
     */
    public function __isset(string $property): bool
    {
    }

    /**
     * Serializes a model
     *
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * Magic method to assign values to the the model
     *
     * @param mixed $value
     * @param string $property
     */
    public function __set(string $property, $value)
    {
    }

    /**
     * Unserializes an array to the model
     *
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * Setups a behavior in a model
     *
     * ```php
     * use Phalcon\Mvc\Model;
     * use Phalcon\Mvc\Model\Behavior\Timestampable;
     *
     * class Robots extends Model
     * {
     *     public function initialize()
     *     {
     *         $this->addBehavior(
     *             new Timestampable(
     *                 [
     *                     "beforeCreate" => [
     *                         "field"  => "created_at",
     *                         "format" => "Y-m-d",
     *                     ],
     *                 ]
     *             )
     *         );
     *
     *         $this->addBehavior(
     *             new Timestampable(
     *                 [
     *                     "beforeUpdate" => [
     *                         "field"  => "updated_at",
     *                         "format" => "Y-m-d",
     *                     ],
     *                 ]
     *             )
     *         );
     *     }
     * }
     * ```
     *
     * @param \Phalcon\Mvc\Model\BehaviorInterface $behavior
     * @return void
     */
    public function addBehavior(\Phalcon\Mvc\Model\BehaviorInterface $behavior): void
    {
    }

    /**
     * Appends a customized message on the validation process
     *
     * ```php
     * use Phalcon\Mvc\Model;
     * use Phalcon\Messages\Message as Message;
     *
     * class Robots extends Model
     * {
     *     public function beforeSave()
     *     {
     *         if ($this->name === "Peter") {
     *             $message = new Message(
     *                 "Sorry, but a robot cannot be named Peter"
     *             );
     *
     *             $this->appendMessage($message);
     *         }
     *     }
     * }
     * ```
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return ModelInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ModelInterface
    {
    }

    /**
     * Assigns values to a model from an array
     *
     * ```php
     * $robot->assign(
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     *
     * // Assign by db row, column map needed
     * $robot->assign(
     *     $dbRow,
     *     [
     *         "db_type" => "type",
     *         "db_name" => "name",
     *         "db_year" => "year",
     *     ]
     * );
     *
     * // Allow assign only name and year
     * $robot->assign(
     *     $_POST,
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     *
     * // By default assign method will use setters if exist, you can disable it by using ini_set to directly use properties
     *
     * ini_set("phalcon.orm.disable_assign_setters", true);
     *
     * $robot->assign(
     *     $_POST,
     *     [
     *         "name",
     *         "year",
     *     ]
     * );
     * ```
     *
     * @param array $data
     * @param mixed $whiteList
     * @param mixed $dataColumnMap Array to transform keys of data to another
     *
     * @return ModelInterface
     */
    public function assign(array $data, $whiteList = null, $dataColumnMap = null): ModelInterface
    {
    }

    /**
     * Returns the average value on a column for a result-set of rows matching
     * the specified conditions.
     *
     * Returned value will be a float for simple queries or a ResultsetInterface
     * instance for when the GROUP condition is used. The results will
     * contain the average of each group.
     *
     * ```php
     * // What's the average price of robots?
     * $average = Robots::average(
     *     [
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The average price is ", $average, "\n";
     *
     * // What's the average price of mechanical robots?
     * $average = Robots::average(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The average price of mechanical robots is ", $average, "\n";
     * ```
     *
     * @param array $parameters
     * @return float | ResultsetInterface
     */
    public static function average(array $parameters = []): ResultsetInterface|float
    {
    }

    /**
     * Assigns values to a model from an array returning a new model
     *
     * ```php
     * $robot = Phalcon\Mvc\Model::cloneResult(
     *     new Robots(),
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     * ```
     *
     * @param \Phalcon\Mvc\ModelInterface $base
     * @param array $data
     * @param int $dirtyState
     * @return ModelInterface
     */
    public static function cloneResult(\Phalcon\Mvc\ModelInterface $base, array $data, int $dirtyState = 0): ModelInterface
    {
    }

    /**
     * Assigns values to a model from an array, returning a new model.
     *
     * ```php
     * $robot = \Phalcon\Mvc\Model::cloneResultMap(
     *     new Robots(),
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     * ```
     *
     * @param ModelInterface|\Phalcon\Mvc\Model\Row $base
     * @param mixed $columnMap
     * @param int $dirtyState
     * @param bool $keepSnapshots *
     * @return ModelInterface
     * @param array $data
     */
    public static function cloneResultMap($base, array $data, $columnMap, int $dirtyState = 0, bool $keepSnapshots = null): ModelInterface
    {
    }

    /**
     * Returns an hydrated result based on the data and the column map
     *
     * @param array $data
     * @param mixed $columnMap
     * @param int $hydrationMode *
     * @return mixed
     */
    public static function cloneResultMapHydrate(array $data, $columnMap, int $hydrationMode)
    {
    }

    /**
     * Collects previously queried (belongs-to, has-one and has-one-through)
     * related records along with freshly added one
     *
     * @return array Related records that should be saved
     */
    protected function collectRelatedToSave(): array
    {
    }

    /**
     * Counts how many records match the specified conditions.
     *
     * Returns an integer for simple queries or a ResultsetInterface
     * instance for when the GROUP condition is used. The results will
     * contain the count of each group.
     *
     * ```php
     * // How many robots are there?
     * $number = Robots::count();
     *
     * echo "There are ", $number, "\n";
     *
     * // How many mechanical robots are there?
     * $number = Robots::count("type = 'mechanical'");
     *
     * echo "There are ", $number, " mechanical robots\n";
     * ```
     *
     * @param array|string|null $parameters
     * @return int|ResultsetInterface
     */
    public static function count($parameters = null): ResultsetInterface|int
    {
    }

    /**
     * Inserts a model instance. If the instance already exists in the
     * persistence it will throw an exception
     * Returning true on success or false otherwise.
     *
     * ```php
     * // Creating a new robot
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * $robot->create();
     *
     * // Passing an array to create
     * $robot = new Robots();
     *
     * $robot->assign(
     *     [
     *         "type" => "mechanical",
     *         "name" => "Astro Boy",
     *         "year" => 1952,
     *     ]
     * );
     *
     * $robot->create();
     * ```
     *
     * @return bool
     */
    public function create(): bool
    {
    }

    /**
     * Deletes a model instance. Returning true on success or false otherwise.
     *
     * ```php
     * $robot = Robots::findFirst("id=100");
     *
     * $robot->delete();
     *
     * $robots = Robots::find("type = 'mechanical'");
     *
     * foreach ($robots as $robot) {
     *     $robot->delete();
     * }
     * ```
     *
     * @return bool
     */
    public function delete(): bool
    {
    }

    /**
     * Returns a simple representation of the object that can be used with
     * `var_dump()`
     *
     * ```php
     * var_dump(
     *     $robot->dump()
     * );
     * ```
     *
     * @return array
     */
    public function dump(): array
    {
    }

    /**
     * Query for a set of records that match the specified conditions
     *
     * ```php
     * // How many robots are there?
     * $robots = Robots::find();
     *
     * echo "There are ", count($robots), "\n";
     *
     * // How many mechanical robots are there?
     * $robots = Robots::find(
     *     "type = 'mechanical'"
     * );
     *
     * echo "There are ", count($robots), "\n";
     *
     * // Get and print virtual robots ordered by name
     * $robots = Robots::find(
     *     [
     *         "type = 'virtual'",
     *         "order" => "name",
     *     ]
     * );
     *
     * foreach ($robots as $robot) {
     *     echo $robot->name, "\n";
     * }
     *
     * // Get first 100 virtual robots ordered by name
     * $robots = Robots::find(
     *     [
     *         "type = 'virtual'",
     *         "order" => "name",
     *         "limit" => 100,
     *     ]
     * );
     *
     * foreach ($robots as $robot) {
     *     echo $robot->name, "\n";
     * }
     *
     * // encapsulate find it into an running transaction esp. useful for application unit-tests
     * // or complex business logic where we wanna control which transactions are used.
     *
     * $myTransaction = new Transaction(\Phalcon\Di\Di::getDefault());
     * $myTransaction->begin();
     *
     * $newRobot = new Robot();
     * $newRobot->setTransaction($myTransaction);
     *
     * $newRobot->assign(
     *     [
     *         'name' => 'test',
     *         'type' => 'mechanical',
     *         'year' => 1944,
     *     ]
     * );
     *
     * $newRobot->save();
     *
     * $resultInsideTransaction = Robot::find(
     *     [
     *         'name' => 'test',
     *         Model::TRANSACTION_INDEX => $myTransaction,
     *     ]
     * );
     *
     * $resultOutsideTransaction = Robot::find(['name' => 'test']);
     *
     * foreach ($setInsideTransaction as $robot) {
     *     echo $robot->name, "\n";
     * }
     *
     * foreach ($setOutsideTransaction as $robot) {
     *     echo $robot->name, "\n";
     * }
     *
     * // reverts all not commited changes
     * $myTransaction->rollback();
     *
     * // creating two different transactions
     * $myTransaction1 = new Transaction(\Phalcon\Di\Di::getDefault());
     * $myTransaction1->begin();
     * $myTransaction2 = new Transaction(\Phalcon\Di\Di::getDefault());
     * $myTransaction2->begin();
     *
     *  // add a new robots
     * $firstNewRobot = new Robot();
     * $firstNewRobot->setTransaction($myTransaction1);
     * $firstNewRobot->assign(
     *     [
     *         'name' => 'first-transaction-robot',
     *         'type' => 'mechanical',
     *         'year' => 1944,
     *     ]
     * );
     * $firstNewRobot->save();
     *
     * $secondNewRobot = new Robot();
     * $secondNewRobot->setTransaction($myTransaction2);
     * $secondNewRobot->assign(
     *     [
     *         'name' => 'second-transaction-robot',
     *         'type' => 'fictional',
     *         'year' => 1984,
     *     ]
     * );
     * $secondNewRobot->save();
     *
     * // this transaction will find the robot.
     * $resultInFirstTransaction = Robot::find(
     *     [
     *         'name'                   => 'first-transaction-robot',
     *         Model::TRANSACTION_INDEX => $myTransaction1,
     *     ]
     * );
     *
     * // this transaction won't find the robot.
     * $resultInSecondTransaction = Robot::find(
     *     [
     *         'name'                   => 'first-transaction-robot',
     *         Model::TRANSACTION_INDEX => $myTransaction2,
     *     ]
     * );
     *
     * // this transaction won't find the robot.
     * $resultOutsideAnyExplicitTransaction = Robot::find(
     *     [
     *         'name' => 'first-transaction-robot',
     *     ]
     * );
     *
     * // this transaction won't find the robot.
     * $resultInFirstTransaction = Robot::find(
     *     [
     *         'name'                   => 'second-transaction-robot',
     *         Model::TRANSACTION_INDEX => $myTransaction2,
     *     ]
     * );
     *
     * // this transaction will find the robot.
     * $resultInSecondTransaction = Robot::find(
     *     [
     *         'name'                   => 'second-transaction-robot',
     *         Model::TRANSACTION_INDEX => $myTransaction1,
     *     ]
     * );
     *
     * // this transaction won't find the robot.
     * $resultOutsideAnyExplicitTransaction = Robot::find(
     *     [
     *         'name' => 'second-transaction-robot',
     *     ]
     * );
     *
     * $transaction1->rollback();
     * $transaction2->rollback();
     * ```
     *
     * @param array|string|int|null $parameters = [
     *     'conditions' => '',
     *     'columns' => '',
     *     'bind' => [],
     *     'bindTypes' => [],
     *     'order' => '',
     *     'limit' => 10,
     *     'offset' => 5,
     *     'group' => 'name, status',
     *     'for_updated' => false,
     *     'shared_lock' => false,
     *     'cache' => [
     *         'lifetime' => 3600,
     *         'key' => 'my-find-key'
     *     ],
     *     'hydration' => null
     * ]
     * @return ResultsetInterface
     */
    public static function find($parameters = null): ResultsetInterface
    {
    }

    /**
     * Query the first record that matches the specified conditions
     *
     * ```php
     * // What's the first robot in robots table?
     * $robot = Robots::findFirst();
     *
     * echo "The robot name is ", $robot->name;
     *
     * // What's the first mechanical robot in robots table?
     * $robot = Robots::findFirst(
     *     "type = 'mechanical'"
     * );
     *
     * echo "The first mechanical robot name is ", $robot->name;
     *
     * // Get first virtual robot ordered by name
     * $robot = Robots::findFirst(
     *     [
     *         "type = 'virtual'",
     *         "order" => "name",
     *     ]
     * );
     *
     * echo "The first virtual robot name is ", $robot->name;
     *
     * // behaviour with transaction
     * $myTransaction = new Transaction(\Phalcon\Di\Di::getDefault());
     * $myTransaction->begin();
     *
     * $newRobot = new Robot();
     * $newRobot->setTransaction($myTransaction);
     * $newRobot->assign(
     *     [
     *         'name' => 'test',
     *         'type' => 'mechanical',
     *         'year' => 1944,
     *     ]
     * );
     * $newRobot->save();
     *
     * $findsARobot = Robot::findFirst(
     *     [
     *         'name'                   => 'test',
     *         Model::TRANSACTION_INDEX => $myTransaction,
     *     ]
     * );
     *
     * $doesNotFindARobot = Robot::findFirst(
     *     [
     *         'name' => 'test',
     *     ]
     * );
     *
     * var_dump($findARobot);
     * var_dump($doesNotFindARobot);
     *
     * $transaction->commit();
     *
     * $doesFindTheRobotNow = Robot::findFirst(
     *     [
     *         'name' => 'test',
     *     ]
     * );
     * ```
     *
     * @param array|string|int|null $parameters = [
     *     'conditions' => '',
     *     'columns' => '',
     *     'bind' => [],
     *     'bindTypes' => [],
     *     'order' => '',
     *     'limit' => 10,
     *     'offset' => 5,
     *     'group' => 'name, status',
     *     'for_updated' => false,
     *     'shared_lock' => false,
     *     'cache' => [
     *         'lifetime' => 3600,
     *         'key' => 'my-find-key'
     *     ],
     *     'hydration' => null
     * ]
     *
     * @return \Phalcon\Mvc\ModelInterface|\Phalcon\Mvc\Model\Row|null
     */
    public static function findFirst($parameters = null): mixed
    {
    }

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events
     * manager are notified
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEvent(string $eventName): bool
    {
    }

    /**
     * Fires an event, implicitly calls behaviors and listeners in the events
     * manager are notified
     * This method stops if one of the callbacks/listeners returns bool false
     *
     * @param string $eventName
     * @return bool
     */
    public function fireEventCancel(string $eventName): bool
    {
    }

    /**
     * Returns a list of changed values.
     *
     * ```php
     * $robots = Robots::findFirst();
     * print_r($robots->getChangedFields()); // []
     *
     * $robots->deleted = 'Y';
     *
     * $robots->getChangedFields();
     * print_r($robots->getChangedFields()); // ["deleted"]
     * ```
     *
     * @return array
     */
    public function getChangedFields(): array
    {
    }

    /**
     * Returns one of the DIRTY_STATE_ constants telling if the record exists
     * in the database or not
     *
     * @return int
     */
    public function getDirtyState(): int
    {
    }

    /**
     * Returns the custom events manager or null if there is no custom events manager
     *
     * @return EventsManagerInterface|null
     */
    public function getEventsManager(): EventsManagerInterface|null
    {
    }

    /**
     * Returns array of validation messages
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
     * @param mixed $filter
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages($filter = null): array
    {
    }

    /**
     * Returns the models manager related to the entity instance
     *
     * @return ManagerInterface
     */
    public function getModelsManager(): ManagerInterface
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return MetaDataInterface
     */
    public function getModelsMetaData(): MetaDataInterface
    {
    }

    /**
     * Returns the type of the latest operation performed by the ORM
     * Returns one of the OP_ class constants
     *
     * @return int
     */
    public function getOperationMade(): int
    {
    }

    /**
     * Returns the internal old snapshot data
     *
     * @return array
     */
    public function getOldSnapshotData(): array
    {
    }

    /**
     * Gets the connection used to read data for the model
     *
     * @return AdapterInterface
     */
    final public function getReadConnection(): AdapterInterface
    {
    }

    /**
     * Returns the DependencyInjection connection service name used to read data
     * related the model
     *
     * @return string
     */
    final public function getReadConnectionService(): string
    {
    }

    /**
     * Returns related records based on defined relations
     *
     * @param array $arguments
     * @return \Phalcon\Mvc\Model\Resultset\Simple|false
     * @param string $alias
     */
    public function getRelated(string $alias, $arguments = null)
    {
    }

    /**
     * Checks if saved related records have already been loaded.
     *
     * Only returns true if the records were previously fetched
     * through the model without any additional parameters.
     *
     * ```php
     * $robot = Robots::findFirst();
     * var_dump($robot->isRelationshipLoaded('robotsParts')); // false
     *
     * $robotsParts = $robot->getRobotsParts(['id > 0']);
     * var_dump($robot->isRelationshipLoaded('robotsParts')); // false
     *
     * $robotsParts = $robot->getRobotsParts(); // or $robot->robotsParts
     * var_dump($robot->isRelationshipLoaded('robotsParts')); // true
     *
     * $robot->robotsParts = [new RobotsParts()];
     * var_dump($robot->isRelationshipLoaded('robotsParts')); // false
     * ```
     *
     * @param string $relationshipAlias
     * @return bool
     */
    public function isRelationshipLoaded(string $relationshipAlias): bool
    {
    }

    /**
     * Returns schema name where the mapped table is located
     *
     * @return string|null
     */
    final public function getSchema(): string|null
    {
    }

    /**
     * Returns the internal snapshot data
     *
     * @return array
     */
    public function getSnapshotData(): array
    {
    }

    /**
     * Returns the table name mapped in the model
     *
     * @return string
     */
    final public function getSource(): string
    {
    }

    /**
     * Returns a list of updated values.
     *
     * ```php
     * $robots = Robots::findFirst();
     * print_r($robots->getChangedFields()); // []
     *
     * $robots->deleted = 'Y';
     *
     * $robots->getChangedFields();
     * print_r($robots->getChangedFields()); // ["deleted"]
     * $robots->save();
     * print_r($robots->getChangedFields()); // []
     * print_r($robots->getUpdatedFields()); // ["deleted"]
     * ```
     *
     * @return array
     */
    public function getUpdatedFields(): array
    {
    }

    /**
     * Gets the connection used to write data to the model
     *
     * @return AdapterInterface
     */
    final public function getWriteConnection(): AdapterInterface
    {
    }

    /**
     * Returns the DependencyInjection connection service name used to write
     * data related to the model
     *
     * @return string
     */
    final public function getWriteConnectionService(): string
    {
    }

    /**
     * Check if a specific attribute has changed
     * This only works if the model is keeping data snapshots
     *
     * ```php
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * $robot->create();
     *
     * $robot->type = "hydraulic";
     *
     * $hasChanged = $robot->hasChanged("type"); // returns true
     * $hasChanged = $robot->hasChanged(["type", "name"]); // returns true
     * $hasChanged = $robot->hasChanged(["type", "name"], true); // returns false
     * ```
     *
     * @param string|array $fieldName
     * @param boolean $allFields
     * @return bool
     */
    public function hasChanged($fieldName = null, bool $allFields = false): bool
    {
    }

    /**
     * Checks if the object has internal snapshot data
     *
     * @return bool
     */
    public function hasSnapshotData(): bool
    {
    }

    /**
     * Check if a specific attribute was updated
     * This only works if the model is keeping data snapshots
     *
     * @param string|array $fieldName
     * @param bool $allFields
     * @return bool
     */
    public function hasUpdated($fieldName = null, bool $allFields = false): bool
    {
    }

    /**
     * Serializes the object for json_encode
     *
     * ```php
     * echo json_encode($robot);
     * ```
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Returns the maximum value of a column for a result-set of rows that match
     * the specified conditions
     *
     * ```php
     * // What is the maximum robot id?
     * $id = Robots::maximum(
     *     [
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The maximum robot id is: ", $id, "\n";
     *
     * // What is the maximum id of mechanical robots?
     * $sum = Robots::maximum(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The maximum robot id of mechanical robots is ", $id, "\n";
     * ```
     *
     * @param array $parameters
     * @return mixed
     */
    public static function maximum($parameters = null): mixed
    {
    }

    /**
     * Returns the minimum value of a column for a result-set of rows that match
     * the specified conditions
     *
     * ```php
     * // What is the minimum robot id?
     * $id = Robots::minimum(
     *     [
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The minimum robot id is: ", $id;
     *
     * // What is the minimum id of mechanical robots?
     * $sum = Robots::minimum(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "id",
     *     ]
     * );
     *
     * echo "The minimum robot id of mechanical robots is ", $id;
     * ```
     *
     * @param array $parameters
     * @return mixed
     */
    public static function minimum($parameters = null): mixed
    {
    }

    /**
     * Create a criteria for a specific model
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return CriteriaInterface
     */
    public static function query(\Phalcon\Di\DiInterface $container = null): CriteriaInterface
    {
    }

    /**
     * Reads an attribute value by its name
     *
     * ```php
     * echo $robot->readAttribute("name");
     * ```
     *
     * @param string $attribute
     * @return mixed|null
     */
    public function readAttribute(string $attribute): mixed
    {
    }

    /**
     * Refreshes the model attributes re-querying the record from the database
     *
     * @return ModelInterface
     */
    public function refresh(): ModelInterface
    {
    }

    /**
     * Inserts or updates a model instance. Returning true on success or false
     * otherwise.
     *
     * ```php
     * // Creating a new robot
     * $robot = new Robots();
     *
     * $robot->type = "mechanical";
     * $robot->name = "Astro Boy";
     * $robot->year = 1952;
     *
     * $robot->save();
     *
     * // Updating a robot name
     * $robot = Robots::findFirst("id = 100");
     *
     * $robot->name = "Biomass";
     *
     * $robot->save();
     * ```
     *
     * @return bool
     */
    public function save(): bool
    {
    }

    /**
     * Inserted or updates model instance, expects a visited list of objects.
     *
     * @param CollectionInterface $visited
     *
     * @return bool
     */
    public function doSave(\Phalcon\Support\Collection\CollectionInterface $visited): bool
    {
    }

    /**
     * Serializes the object ignoring connections, services, related objects or
     * static properties
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializes the object from a serialized string
     *
     * @param mixed $data
     */
    public function unserialize($data)
    {
    }

    /**
     * Sets the DependencyInjection connection service name
     *
     * @param string $connectionService
     * @return void
     */
    final public function setConnectionService(string $connectionService): void
    {
    }

    /**
     * Sets the dirty state of the object using one of the DIRTY_STATE_ constants
     *
     * @param int $dirtyState
     * @return bool|ModelInterface
     */
    public function setDirtyState(int $dirtyState): ModelInterface|bool
    {
    }

    /**
     * Sets a custom events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Sets the DependencyInjection connection service name used to read data
     *
     * @param string $connectionService
     * @return void
     */
    final public function setReadConnectionService(string $connectionService): void
    {
    }

    /**
     * Sets the record's old snapshot data.
     * This method is used internally to set old snapshot data when the model
     * was set up to keep snapshot data
     *
     * @param array $data
     * @param array $columnMap
     */
    public function setOldSnapshotData(array $data, $columnMap = null)
    {
    }

    /**
     * Sets the record's snapshot data.
     * This method is used internally to set snapshot data when the model was
     * set up to keep snapshot data
     *
     * @param array $columnMap
     * @param array $data
     * @return void
     */
    public function setSnapshotData(array $data, $columnMap = null): void
    {
    }

    /**
     * Sets a transaction related to the Model instance
     *
     * ```php
     * use Phalcon\Mvc\Model\Transaction\Manager as TxManager;
     * use Phalcon\Mvc\Model\Transaction\Failed as TxFailed;
     *
     * try {
     *     $txManager = new TxManager();
     *
     *     $transaction = $txManager->get();
     *
     *     $robot = new Robots();
     *
     *     $robot->setTransaction($transaction);
     *
     *     $robot->name       = "WALL·E";
     *     $robot->created_at = date("Y-m-d");
     *
     *     if ($robot->save() === false) {
     *         $transaction->rollback("Can't save robot");
     *     }
     *
     *     $robotPart = new RobotParts();
     *
     *     $robotPart->setTransaction($transaction);
     *
     *     $robotPart->type = "head";
     *
     *     if ($robotPart->save() === false) {
     *         $transaction->rollback("Robot part cannot be saved");
     *     }
     *
     *     $transaction->commit();
     * } catch (TxFailed $e) {
     *     echo "Failed, reason: ", $e->getMessage();
     * }
     * ```
     *
     * @param \Phalcon\Mvc\Model\TransactionInterface $transaction
     * @return ModelInterface
     */
    public function setTransaction(\Phalcon\Mvc\Model\TransactionInterface $transaction): ModelInterface
    {
    }

    /**
     * @return TransactionInterface|null
     */
    public function getTransaction(): TransactionInterface|null
    {
    }

    /**
     * Enables/disables options in the ORM
     *
     * @param array $options
     * @return void
     */
    public static function setup(array $options): void
    {
    }

    /**
     * Sets the DependencyInjection connection service name used to write data
     *
     * @param string $connectionService
     * @return void
     */
    final public function setWriteConnectionService(string $connectionService): void
    {
    }

    /**
     * Skips the current operation forcing a success state
     *
     * @param bool $skip
     * @return void
     */
    public function skipOperation(bool $skip): void
    {
    }

    /**
     * Calculates the sum on a column for a result-set of rows that match the
     * specified conditions
     *
     * ```php
     * // How much are all robots?
     * $sum = Robots::sum(
     *     [
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The total price of robots is ", $sum, "\n";
     *
     * // How much are mechanical robots?
     * $sum = Robots::sum(
     *     [
     *         "type = 'mechanical'",
     *         "column" => "price",
     *     ]
     * );
     *
     * echo "The total price of mechanical robots is  ", $sum, "\n";
     * ```
     *
     * @param array $parameters
     * @return double | ResultsetInterface
     */
    public static function sum($parameters = null): ResultsetInterface|float
    {
    }

    /**
     * Returns the instance as an array representation
     *
     * ```php
     * print_r(
     *     $robot->toArray()
     * );
     * ```
     *
     * @param array $columns
     * @param mixed $useGetter
     * @return array
     */
    public function toArray($columns = null, $useGetter = true): array
    {
    }

    /**
     * Updates a model instance. If the instance doesn't exist in the
     * persistence it will throw an exception. Returning `true` on success or
     * `false` otherwise.
     *
     * ```php
     * <?php
     *
     * use MyApp\Models\Invoices;
     *
     * $invoice = Invoices::findFirst('inv_id = 4');
     *
     * $invoice->inv_total = 120;
     *
     * $invoice->update();
     * ```
     *
     * !!! warning "NOTE"
     *
     *     When retrieving the record with `findFirst()`, you need to get the full
     *     object back (no `columns` definition) but also retrieve it using the
     *     primary key. If not, the ORM will issue an `INSERT` instead of `UPDATE`.
     *
     * @return bool
     */
    public function update(): bool
    {
    }

    /**
     * Writes an attribute value by its name
     *
     * ```php
     * $robot->writeAttribute("name", "Rosey");
     * ```
     *
     * @param string $attribute
     * @param mixed $value
     * @return void
     */
    public function writeAttribute(string $attribute, $value): void
    {
    }

    /**
     * Reads "belongs to" relations and check the virtual foreign keys when
     * inserting or updating records to verify that inserted/updated values are
     * present in the related entity
     *
     * @return bool
     */
    final protected function checkForeignKeysRestrict(): bool
    {
    }

    /**
     * Reads both "hasMany" and "hasOne" relations and checks the virtual
     * foreign keys (cascade) when deleting records
     *
     * @return bool
     */
    final protected function checkForeignKeysReverseCascade(): bool
    {
    }

    /**
     * Reads both "hasMany" and "hasOne" relations and checks the virtual
     * foreign keys (restrict) when deleting records
     *
     * @return bool
     */
    final protected function checkForeignKeysReverseRestrict(): bool
    {
    }

    /**
     * Sends a pre-build INSERT SQL statement to the relational database system
     *
     * @param string|array $table
     * @param bool|string $identityField
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param \Phalcon\Db\Adapter\AdapterInterface $connection
     * @return bool
     */
    protected function doLowInsert(\Phalcon\Mvc\Model\MetaDataInterface $metaData, \Phalcon\Db\Adapter\AdapterInterface $connection, $table, $identityField): bool
    {
    }

    /**
     * Sends a pre-build UPDATE SQL statement to the relational database system
     *
     * @param string|array $table
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param \Phalcon\Db\Adapter\AdapterInterface $connection
     * @return bool
     */
    protected function doLowUpdate(\Phalcon\Mvc\Model\MetaDataInterface $metaData, \Phalcon\Db\Adapter\AdapterInterface $connection, $table): bool
    {
    }

    /**
     * Checks whether the current record already exists
     *
     * @return bool
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param \Phalcon\Db\Adapter\AdapterInterface $connection
     */
    protected function has(\Phalcon\Mvc\Model\MetaDataInterface $metaData, \Phalcon\Db\Adapter\AdapterInterface $connection): bool
    {
    }

    /**
     * Returns related records defined relations depending on the method name.
     * Returns false if the relation is non-existent.
     *
     * @param string $modelName
     * @param string $method
     * @param array $arguments *
     * @return ResultsetInterface|ModelInterface|bool|null
     */
    protected function getRelatedRecords(string $modelName, string $method, array $arguments)
    {
    }

    /**
     * Generate a PHQL SELECT statement for an aggregate
     *
     * @param string $functionName
     * @param string $alias
     * @param array|string|null $parameters *
     * @return ResultsetInterface
     */
    protected static function groupResult(string $functionName, string $alias, $parameters = null): ResultsetInterface
    {
    }

    /**
     * Try to check if the query must invoke a finder
     *
     * @return ModelInterface[]|ModelInterface|bool
     * @param string $method
     * @param array $arguments
     */
    final protected static function invokeFinder(string $method, array $arguments)
    {
    }

    /**
     * Check for, and attempt to use, possible setter.
     *
     * @param string $property
     * @param mixed $value
     * @return bool
     */
    final protected function possibleSetter(string $property, $value): bool
    {
    }

    /**
     * Executes internal hooks before save a record
     *
     * @return bool
     * @param \Phalcon\Mvc\Model\MetaDataInterface $metaData
     * @param bool $exists
     * @param mixed $identityField
     */
    protected function preSave(\Phalcon\Mvc\Model\MetaDataInterface $metaData, bool $exists, $identityField): bool
    {
    }

    /**
     * Saves related records that must be stored prior to save the master record
     *
     * @param ModelInterface[] $related
     * @param CollectionInterface $visited
     * @return bool
     * @param \Phalcon\Db\Adapter\AdapterInterface $connection
     */
    protected function preSaveRelatedRecords(\Phalcon\Db\Adapter\AdapterInterface $connection, $related, \Phalcon\Support\Collection\CollectionInterface $visited): bool
    {
    }

    /**
     * Executes internal events after save a record
     *
     * @return bool
     * @param bool $success
     * @param bool $exists
     */
    protected function postSave(bool $success, bool $exists): bool
    {
    }

    /**
     * Save the related records assigned in the has-one/has-many relations
     *
     * @param ModelInterface[] $related
     * @param CollectionInterface $visited
     * @return bool
     * @param \Phalcon\Db\Adapter\AdapterInterface $connection
     */
    protected function postSaveRelatedRecords(\Phalcon\Db\Adapter\AdapterInterface $connection, $related, \Phalcon\Support\Collection\CollectionInterface $visited): bool
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated UPDATE statement
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->allowEmptyStringValues(
     *             [
     *                 "name",
     *             ]
     *         );
     *     }
     * }
     * ```
     *
     * @param array $attributes
     * @return void
     */
    protected function allowEmptyStringValues(array $attributes): void
    {
    }

    /**
     * Cancel the current operation
     */
    protected function cancelOperation()
    {
    }

    /**
     * Setup a reverse 1-1 or n-1 relation between two models
     *
     * ```php
     * class RobotsParts extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->belongsTo(
     *             "robots_id",
     *             Robots::class,
     *             "id"
     *         );
     *     }
     * }
     * ```
     *
     * @param array $options = [
     *     'reusable' => false,
     *     'alias' => 'someAlias',
     *     'foreignKey' => [
     *         'message' => null,
     *         'allowNulls' => false,
     *         'action' => null
     *     ],
     *     'params' => [
     *         'conditions' => '',
     *         'columns' => '',
     *         'bind' => [],
     *         'bindTypes' => [],
     *         'order' => '',
     *         'limit' => 10,
     *         'offset' => 5,
     *         'group' => 'name, status',
     *         'for_updated' => false,
     *         'shared_lock' => false,
     *         'cache' => [
     *             'lifetime' => 3600,
     *             'key' => 'my-find-key'
     *         ],
     *         'hydration' => null
     *     ]
     * ]
     * @param mixed $fields
     * @param string $referenceModel
     * @param mixed $referencedFields
     * @return Relation
     */
    protected function belongsTo($fields, string $referenceModel, $referencedFields, array $options = []): Relation
    {
    }

    /**
     * shared prepare query logic for find and findFirst method
     *
     * @param mixed $params
     * @param mixed $limit
     * @return QueryInterface
     */
    private static function getPreparedQuery($params, $limit = null): QueryInterface
    {
    }

    /**
     * Setup a 1-n relation between two models
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->hasMany(
     *             "id",
     *             RobotsParts::class,
     *             "robots_id"
     *         );
     *     }
     * }
     * ```
     *
     * @param array $options = [
     *     'reusable' => false,
     *     'alias' => 'someAlias',
     *     'foreignKey' => [
     *         'message' => null,
     *         'allowNulls' => false,
     *         'action' => null
     *     ],
     *     'params' => [
     *         'conditions' => '',
     *         'columns' => '',
     *         'bind' => [],
     *         'bindTypes' => [],
     *         'order' => '',
     *         'limit' => 10,
     *         'offset' => 5,
     *         'group' => 'name, status',
     *         'for_updated' => false,
     *         'shared_lock' => false,
     *         'cache' => [
     *             'lifetime' => 3600,
     *             'key' => 'my-find-key'
     *         ],
     *         'hydration' => null
     *     ]
     * ]
     * @param mixed $fields
     * @param string $referenceModel
     * @param mixed $referencedFields
     * @return Relation
     */
    protected function hasMany($fields, string $referenceModel, $referencedFields, array $options = []): Relation
    {
    }

    /**
     * Setup an n-n relation between two models, through an intermediate
     * relation
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         // Setup a many-to-many relation to Parts through RobotsParts
     *         $this->hasManyToMany(
     *             "id",
     *             RobotsParts::class,
     *             "robots_id",
     *             "parts_id",
     *             Parts::class,
     *             "id",
     *         );
     *     }
     * }
     * ```
     *
     * @param string|array $fields
     * @param string $intermediateModel
     * @param string|array $intermediateFields
     * @param string|array $intermediateReferencedFields
     * @param string $referenceModel
     * @param string|array $referencedFields
     * @param array $options = [
     *     'reusable' => false,
     *     'alias' => 'someAlias',
     *     'foreignKey' => [
     *         'message' => null,
     *         'allowNulls' => false,
     *         'action' => null
     *     ],
     *     'params' => [
     *         'conditions' => '',
     *         'columns' => '',
     *         'bind' => [],
     *         'bindTypes' => [],
     *         'order' => '',
     *         'limit' => 10,
     *         'offset' => 5,
     *         'group' => 'name, status',
     *         'for_updated' => false,
     *         'shared_lock' => false,
     *         'cache' => [
     *             'lifetime' => 3600,
     *             'key' => 'my-find-key'
     *         ],
     *         'hydration' => null
     *     ]
     * ]
     * @return Relation
     */
    protected function hasManyToMany($fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referenceModel, $referencedFields, array $options = []): Relation
    {
    }

    /**
     * Setup a 1-1 relation between two models
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->hasOne(
     *             "id",
     *             RobotsDescription::class,
     *             "robots_id"
     *         );
     *     }
     * }
     * ```
     *
     * @param array $options = [
     *     'reusable' => false,
     *     'alias' => 'someAlias',
     *     'foreignKey' => [
     *         'message' => null,
     *         'allowNulls' => false,
     *         'action' => null
     *     ],
     *     'params' => [
     *         'conditions' => '',
     *         'columns' => '',
     *         'bind' => [],
     *         'bindTypes' => [],
     *         'order' => '',
     *         'limit' => 10,
     *         'offset' => 5,
     *         'group' => 'name, status',
     *         'for_updated' => false,
     *         'shared_lock' => false,
     *         'cache' => [
     *             'lifetime' => 3600,
     *             'key' => 'my-find-key'
     *         ],
     *         'hydration' => null
     *     ]
     * ]
     * @param mixed $fields
     * @param string $referenceModel
     * @param mixed $referencedFields
     * @return Relation
     */
    protected function hasOne($fields, string $referenceModel, $referencedFields, array $options = []): Relation
    {
    }

    /**
     * Setup a 1-1 relation between two models, through an intermediate
     * relation
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         // Setup a 1-1 relation to one item from Parts through RobotsParts
     *         $this->hasOneThrough(
     *             "id",
     *             RobotsParts::class,
     *             "robots_id",
     *             "parts_id",
     *             Parts::class,
     *             "id",
     *         );
     *     }
     * }
     * ```
     *
     * @param    string|array $fields
     * @param    string|array $intermediateFields
     * @param    string|array $intermediateReferencedFields
     * @param    string|array $referencedFields
     * @param    array $options
     * @param string $intermediateModel
     * @param string $referenceModel
     * @return Relation
     */
    protected function hasOneThrough($fields, string $intermediateModel, $intermediateFields, $intermediateReferencedFields, string $referenceModel, $referencedFields, array $options = []): Relation
    {
    }

    /**
     * Sets if the model must keep the original record snapshot in memory
     *
     * ```php
     * use Phalcon\Mvc\Model;
     *
     * class Robots extends Model
     * {
     *     public function initialize()
     *     {
     *         $this->keepSnapshots(true);
     *     }
     * }
     * ```
     *
     * @param bool $keepSnapshot
     * @return void
     */
    protected function keepSnapshots(bool $keepSnapshot): void
    {
    }

    /**
     * Sets schema name where the mapped table is located
     *
     * @param string $schema
     * @return ModelInterface
     */
    final protected function setSchema(string $schema): ModelInterface
    {
    }

    /**
     * Sets the table name to which model should be mapped
     *
     * @param string $source
     * @return ModelInterface
     */
    final protected function setSource(string $source): ModelInterface
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated INSERT/UPDATE statement
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->skipAttributes(
     *             [
     *                 "price",
     *             ]
     *         );
     *     }
     * }
     * ```
     *
     * @param array $attributes
     * @return void
     */
    protected function skipAttributes(array $attributes): void
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated INSERT statement
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->skipAttributesOnCreate(
     *             [
     *                 "created_at",
     *             ]
     *         );
     *     }
     * }
     * ```
     *
     * @param array $attributes
     * @return void
     */
    protected function skipAttributesOnCreate(array $attributes): void
    {
    }

    /**
     * Sets a list of attributes that must be skipped from the
     * generated UPDATE statement
     *
     * ```php
     * class Robots extends \Phalcon\Mvc\Model
     * {
     *     public function initialize()
     *     {
     *         $this->skipAttributesOnUpdate(
     *             [
     *                 "modified_in",
     *             ]
     *         );
     *     }
     * }
     * ```
     *
     * @param array $attributes
     * @return void
     */
    protected function skipAttributesOnUpdate(array $attributes): void
    {
    }

    /**
     * Sets if a model must use dynamic update instead of the all-field update
     *
     * ```php
     * use Phalcon\Mvc\Model;
     *
     * class Robots extends Model
     * {
     *     public function initialize()
     *     {
     *         $this->useDynamicUpdate(true);
     *     }
     * }
     * ```
     *
     * @param bool $dynamicUpdate
     * @return void
     */
    protected function useDynamicUpdate(bool $dynamicUpdate): void
    {
    }

    /**
     * Executes validators on every validation call
     *
     * ```php
     * use Phalcon\Mvc\Model;
     * use Phalcon\Filter\Validation;
     * use Phalcon\Filter\Validation\Validator\ExclusionIn;
     *
     * class Subscriptors extends Model
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
     * @param \Phalcon\Filter\Validation\ValidationInterface $validator
     * @return bool
     */
    protected function validate(\Phalcon\Filter\Validation\ValidationInterface $validator): bool
    {
    }

    /**
     * Check whether validation process has generated any messages
     *
     * ```php
     * use Phalcon\Mvc\Model;
     * use Phalcon\Filter\Validation;
     * use Phalcon\Filter\Validation\Validator\ExclusionIn;
     *
     * class Subscriptors extends Model
     * {
     *     public function validation()
     *     {
     *         $validator = new Validation();
     *
     *         $validator->validate(
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
     * @return bool
     */
    public function validationHasFailed(): bool
    {
    }

    /**
     * Attempts to find key case-insensitively
     *
     * @param mixed $columnMap
     * @param mixed $key
     * @return string
     */
    private static function caseInsensitiveColumnMap($columnMap, $key): string
    {
    }

    /**
     * Append messages to this model from another Model.
     *
     * @param mixed $model
     * @return void
     */
    public function appendMessagesFrom($model): void
    {
    }
}
