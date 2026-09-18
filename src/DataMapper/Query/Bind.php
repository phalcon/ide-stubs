<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use Phalcon\Contracts\DataMapper\DataMapperTypes;

/**
 * Class Bind
 *
 * @phpstan-import-type datamapper_bind_store from DataMapperTypes
 * @phpstan-import-type datamapper_bind_values from DataMapperTypes
 * @phpstan-import-type datamapper_values from DataMapperTypes
 */
class Bind
{
    protected int $inlineCount = 0;

    /**
     * @phpstan-var datamapper_bind_store
     */
    protected array $store = [];

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
     * @param mixed $value
     * @param int $type
     * @return void
     */
    public function setValue(string $key, $value, int $type = -1): void
    {
    }

    /**
     * Sets values from an array
     *
     * @phpstan-param datamapper_bind_values $values
     * @param array $values
     * @param int $type
     * @return void
     */
    public function setValues(array $values, int $type = -1): void
    {
    }

    /**
     * Returns the internal collection
     *
     * @phpstan-return datamapper_bind_store
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Auto detects the PDO type
     *
     * @param mixed $value
     * @return int
     */
    protected function getType($value): int
    {
    }

    /**
     * Processes an array - if passed as an `inline` parameter
     *
     * @phpstan-param datamapper_values $data
     * @param array $data
     * @param int $type
     * @return string
     */
    protected function inlineArray(array $data, int $type): string
    {
    }
}
