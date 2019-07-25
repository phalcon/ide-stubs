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
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function query(string $translateKey, $placeholders = null): string;

    /**
     * Returns the translation string of the given key
     *
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function t(string $translateKey, $placeholders = null): string;

}
