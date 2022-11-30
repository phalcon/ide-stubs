<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Profiler;

/**
 * This class identifies each profile in a Phalcon\Db\Profiler
 */
class Item
{
    /**
     * Timestamp when the profile ended
     *
     * @var double
     */
    protected $finalTime;

    /**
     * Timestamp when the profile started
     *
     * @var double
     */
    protected $initialTime;

    /**
     * SQL bind types related to the profile
     *
     * @var array
     */
    protected $sqlBindTypes;

    /**
     * SQL statement related to the profile
     *
     * @var string
     */
    protected $sqlStatement;

    /**
     * SQL variables related to the profile
     *
     * @var array
     */
    protected $sqlVariables;

    /**
     * Return the timestamp when the profile ended
     *
     * @return float
     */
    public function getFinalTime(): float
    {
    }

    /**
     * Return the timestamp when the profile started
     *
     * @return float
     */
    public function getInitialTime(): float
    {
    }

    /**
     * Return the SQL bind types related to the profile
     *
     * @return array
     */
    public function getSqlBindTypes(): array
    {
    }

    /**
     * Return the SQL statement related to the profile
     *
     * @return string
     */
    public function getSqlStatement(): string
    {
    }

    /**
     * Return the SQL variables related to the profile
     *
     * @return array
     */
    public function getSqlVariables(): array
    {
    }

    /**
     * Returns the total time in nanoseconds spent by the profile
     *
     * @return float
     */
    public function getTotalElapsedNanoseconds(): float
    {
    }

    /**
     * Returns the total time in milliseconds spent by the profile
     *
     * @return float
     */
    public function getTotalElapsedMilliseconds(): float
    {
    }

    /**
     * Returns the total time in seconds spent by the profile
     *
     * @return float
     */
    public function getTotalElapsedSeconds(): float
    {
    }

    /**
     * Return the timestamp when the profile ended
     *
     * @param double $finalTime
     * @return Item
     */
    public function setFinalTime(float $finalTime): Item
    {
    }

    /**
     * Return the timestamp when the profile started
     *
     * @param double $initialTime
     * @return Item
     */
    public function setInitialTime(float $initialTime): Item
    {
    }

    /**
     * Return the SQL bind types related to the profile
     *
     * @param array $sqlBindTypes
     * @return Item
     */
    public function setSqlBindTypes(array $sqlBindTypes): Item
    {
    }

    /**
     * Return the SQL statement related to the profile
     *
     * @param string $sqlStatement
     * @return Item
     */
    public function setSqlStatement(string $sqlStatement): Item
    {
    }

    /**
     * Return the SQL variables related to the profile
     *
     * @param array $sqlVariables
     * @return Item
     */
    public function setSqlVariables(array $sqlVariables): Item
    {
    }
}
