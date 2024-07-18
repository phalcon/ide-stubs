<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Collection;

/**
 * Phalcon\Support\Collection\CollectionInterface
 *
 * Interface for Phalcon\Support\Collection class
 */
interface CollectionInterface
{
    /**
     * @param string $element
     * @return mixed
     */
    public function __get(string $element): mixed;

    /**
     * @param string $element
     * @return bool
     */
    public function __isset(string $element): bool;

    /**
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function __set(string $element, $value): void;

    /**
     * @param string $element
     * @return void
     */
    public function __unset(string $element): void;

    /**
     * @return void
     */
    public function clear(): void;

    /**
     * @param string $element
     * @param mixed $defaultValue
     * @param string $cast
     * @return mixed
     */
    public function get(string $element, $defaultValue = null, string $cast = null): mixed;

    /**
     * @param bool $insensitive
     * @return array
     */
    public function getKeys(bool $insensitive = true): array;

    /**
     * @return array
     */
    public function getValues(): array;

    /**
     * @param string $element
     * @return bool
     */
    public function has(string $element): bool;

    /**
     * @param array $data
     * @return void
     */
    public function init(array $data = []): void;

    /**
     * @param string $element
     * @return void
     */
    public function remove(string $element): void;

    /**
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value): void;

    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @param int $options
     * @return string
     */
    public function toJson(int $options = 79): string;
}
