<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

/**
 * Class Bind
 */
class Bind
{
    /**
     * @var int
     */
    protected $inlineCount = 0;

    /**
     * @var array
     */
    protected $store = [];

    /**
     * @param mixed $value
     * @param int   $type
     *
     * @return string
     */
    public function bindInline($value, int $type = -1): string
    {
    }

    /**
     * Removes a value from the store
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key): void
    {
    }

    /**
     * Sets a value
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $type
     * @return void
     */
    public function setValue(string $key, $value, int $type = -1): void
    {
    }

    /**
     * Sets values from an array
     *
     * @param array $values
     * @param int   $type
     * @return void
     */
    public function setValues(array $values, int $type = -1): void
    {
    }

    /**
     * Returns the internal collection
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Auto detects the PDO type
     *
     * @param mixed $value
     *
     * @return int
     */
    protected function getType($value): int
    {
    }

    /**
     * Processes an array - if passed as an `inline` parameter
     *
     * @param array $array
     * @param int   $type
     *
     * @return string
     * @param array $data
     */
    protected function inlineArray(array $data, int $type): string
    {
    }
}
