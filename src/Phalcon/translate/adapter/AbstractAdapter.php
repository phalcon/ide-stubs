<?php

namespace Phalcon\Translate\Adapter;

/**
 * Phalcon\Translate\Adapter
 *
 * Base class for Phalcon\Translate adapters
 */
abstract class AbstractAdapter implements \Phalcon\Translate\Adapter\AdapterInterface
{
    /**
     * @var string
     */
    protected $defaultInterpolator = '';

    /**
     * @var InterpolatorFactory
     */
    protected $interpolatorFactory;


    /**
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     * @param array $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options) {}

    /**
     * Returns the translation string of the given key (alias of method 't')
     *
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function _(string $translateKey, $placeholders = null): string {}

    /**
     * Check whether a translation key exists
     *
     * @param mixed $translateKey
     * @return bool
     */
    public function offsetExists($translateKey): bool {}

    /**
     * Returns the translation related to the given key
     *
     * @param mixed $translateKey
     * @return mixed
     */
    public function offsetGet($translateKey) {}

    /**
     * Sets a translation value
     *
     * @param mixed $offset
     * @param string $value
     */
    public function offsetSet($offset, $value) {}

    /**
     * Unsets a translation from the dictionary
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset) {}

    /**
     * Returns the translation string of the given key
     *
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function t(string $translateKey, $placeholders = null): string {}

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param mixed $placeholders
     * @return string
     */
    protected function replacePlaceholders(string $translation, $placeholders = null): string {}

}
