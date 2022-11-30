<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

use Phalcon\Db\Profiler\Item;

/**
 * Instances of Phalcon\Db can generate execution profiles
 * on SQL statements sent to the relational database. Profiled
 * information includes execution time in milliseconds.
 * This helps you to identify bottlenecks in your applications.
 *
 * ```php
 * use Phalcon\Db\Profiler;
 * use Phalcon\Events\Event;
 * use Phalcon\Events\Manager;
 *
 * $profiler = new Profiler();
 * $eventsManager = new Manager();
 *
 * $eventsManager->attach(
 *     "db",
 *     function (Event $event, $connection) use ($profiler) {
 *         if ($event->getType() === "beforeQuery") {
 *             $sql = $connection->getSQLStatement();
 *
 *             // Start a profile with the active connection
 *             $profiler->startProfile($sql);
 *         }
 *
 *         if ($event->getType() === "afterQuery") {
 *             // Stop the active profile
 *             $profiler->stopProfile();
 *         }
 *     }
 * );
 *
 * // Set the event manager on the connection
 * $connection->setEventsManager($eventsManager);
 *
 * $sql = "SELECT buyer_name, quantity, product_name
 * FROM buyers LEFT JOIN products ON
 * buyers.pid=products.id";
 *
 * // Execute a SQL statement
 * $connection->query($sql);
 *
 * // Get the last profile in the profiler
 * $profile = $profiler->getLastProfile();
 *
 * echo "SQL Statement: ", $profile->getSQLStatement(), "\n";
 * echo "Start Time: ", $profile->getInitialTime(), "\n";
 * echo "Final Time: ", $profile->getFinalTime(), "\n";
 * echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "\n";
 * ```
 */
class Profiler
{
    /**
     * Active Item
     *
     * @var Item
     */
    protected $activeProfile;

    /**
     * All the Items in the active profile
     *
     * @var Item[]
     */
    protected $allProfiles;

    /**
     * Total time spent by all profiles to complete in nanoseconds
     *
     * @var float
     */
    protected $totalNanoseconds = 0;

    /**
     * Returns the last profile executed in the profiler
     *
     * @return Item
     */
    public function getLastProfile(): Item
    {
    }

    /**
     * Returns the total number of SQL statements processed
     *
     * @return int
     */
    public function getNumberTotalStatements(): int
    {
    }

    /**
     * Returns the total time in nanoseconds spent by the profiles
     *
     * @return float
     */
    public function getTotalElapsedNanoseconds(): float
    {
    }

    /**
     * Returns the total time in milliseconds spent by the profiles
     *
     * @return float
     */
    public function getTotalElapsedMilliseconds(): float
    {
    }

    /**
     * Returns the total time in seconds spent by the profiles
     *
     * @return float
     */
    public function getTotalElapsedSeconds(): float
    {
    }

    /**
     * Returns all the processed profiles
     *
     * @return array|\Phalcon\Db\Profiler\Item[]
     */
    public function getProfiles(): array
    {
    }

    /**
     * Resets the profiler, cleaning up all the profiles
     *
     * @return Profiler
     */
    public function reset(): Profiler
    {
    }

    /**
     * Starts the profile of a SQL sentence
     *
     * @param string $sqlStatement
     * @param array $sqlVariables
     * @param array $sqlBindTypes
     * @return Profiler
     */
    public function startProfile(string $sqlStatement, array $sqlVariables = [], array $sqlBindTypes = []): Profiler
    {
    }

    /**
     * Stops the active profile
     *
     * @return Profiler
     */
    public function stopProfile(): Profiler
    {
    }
}
