<?php

namespace Phalcon\Translate\Adapter;

use Phalcon\Translate\InterpolatorFactory;

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
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Returns the translation string of the given key (alias of method 't')
     *
     * @param array $placeholders
     * @param string $translateKey
     * @return string
     */
    public function _(string $translateKey, array $placeholders = array()): string
    {
    }

    /**
     * Check whether a translation key exists
     *
     * @param mixed $translateKey
     * @return bool
     */
    public function offsetExists($translateKey): bool
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param mixed $translateKey
     * @return mixed
     */
    public function offsetGet($translateKey)
    {
    }

    /**
     * Sets a translation value
     *
     * @param string $value
     * @param mixed $offset
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * Unsets a translation from the dictionary
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Returns the translation string of the given key
     *
     * @param array $placeholders
     * @param string $translateKey
     * @return string
     */
    public function t(string $translateKey, array $placeholders = array()): string
    {
    }

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param array $placeholders
     * @return string
     */
    protected function replacePlaceholders(string $translation, array $placeholders = array()): string
    {
    }
}
