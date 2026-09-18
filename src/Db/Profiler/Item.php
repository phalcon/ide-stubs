<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Profiler;

use Phalcon\Contracts\Db\DbTypes;
use Phalcon\Db\Traits\ElapsedTimeTrait;

/**
 * This class identifies each profile in a Phalcon\Db\Profiler
 *
 * @phpstan-import-type db_bind_params from DbTypes
 * @phpstan-import-type db_bind_types from DbTypes
 */
class Item
{
    use \Phalcon\Db\Traits\ElapsedTimeTrait;


    /**
     * Timestamp when the profile ended
     *
     * @var float
     */
    protected $finalTime;

    /**
     * Timestamp when the profile started
     *
     * @var float
     */
    protected $initialTime;

    /**
     * SQL bind types related to the profile
     *
     * @var array
     *
     * @phpstan-var db_bind_types
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
     *
     * @phpstan-var db_bind_params
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
     * @phpstan-return db_bind_types
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
     * @phpstan-return db_bind_params
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
     * Return the timestamp when the profile ended
     *
     * @param double $finalTime
     * @return static
     */
    public function setFinalTime(float $finalTime): static
    {
    }

    /**
     * Return the timestamp when the profile started
     *
     * @param double $initialTime
     * @return static
     */
    public function setInitialTime(float $initialTime): static
    {
    }

    /**
     * Return the SQL bind types related to the profile
     *
     * @phpstan-param db_bind_types $sqlBindTypes
     * @param array $sqlBindTypes
     * @return static
     */
    public function setSqlBindTypes(array $sqlBindTypes): static
    {
    }

    /**
     * Return the SQL statement related to the profile
     *
     * @param string $sqlStatement
     * @return static
     */
    public function setSqlStatement(string $sqlStatement): static
    {
    }

    /**
     * Return the SQL variables related to the profile
     *
     * @phpstan-param db_bind_params $sqlVariables
     * @param array $sqlVariables
     * @return static
     */
    public function setSqlVariables(array $sqlVariables): static
    {
    }
}
