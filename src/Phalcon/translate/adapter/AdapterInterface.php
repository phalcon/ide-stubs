<?php

namespace Phalcon\Translate\Adapter;

/**
 * Phalcon\Translate\AdapterInterface
 *
 * Interface for Phalcon\Translate adapters
 */
interface AdapterInterface
{

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool;

    /**
     * Returns the translation related to the given key
     *
     * @param array $placeholders
     * @param string $translateKey
     * @return string
     */
    public function query(string $translateKey, array $placeholders = array()): string;

    /**
     * Returns the translation string of the given key
     *
     * @param array $placeholders
     * @param string $translateKey
     * @return string
     */
    public function t(string $translateKey, array $placeholders = array()): string;
}
