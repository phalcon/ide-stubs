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
     * Timestamp when the profile ended
     *
     * @param double $finalTime
     */
    public function setFinalTime(float $finalTime)
    {
    }

    /**
     * Timestamp when the profile ended
     *
     * @return float
     */
    public function getFinalTime(): float
    {
    }

    /**
     * Timestamp when the profile started
     *
     * @param double $initialTime
     */
    public function setInitialTime(float $initialTime)
    {
    }

    /**
     * Timestamp when the profile started
     *
     * @return float
     */
    public function getInitialTime(): float
    {
    }

    /**
     * SQL bind types related to the profile
     *
     * @param array $sqlBindTypes
     */
    public function setSqlBindTypes(array $sqlBindTypes)
    {
    }

    /**
     * SQL bind types related to the profile
     *
     * @return array
     */
    public function getSqlBindTypes(): array
    {
    }

    /**
     * SQL statement related to the profile
     *
     * @param string $sqlStatement
     */
    public function setSqlStatement(string $sqlStatement)
    {
    }

    /**
     * SQL statement related to the profile
     *
     * @return string
     */
    public function getSqlStatement(): string
    {
    }

    /**
     * SQL variables related to the profile
     *
     * @param array $sqlVariables
     */
    public function setSqlVariables(array $sqlVariables)
    {
    }

    /**
     * SQL variables related to the profile
     *
     * @return array
     */
    public function getSqlVariables(): array
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
}
