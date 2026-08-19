<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use ArrayAccess;
use Phalcon\Contracts\Translate\TranslateTypes;
use Phalcon\Translate\Exception;
use Phalcon\Translate\Exceptions\ImmutableObject;
use Phalcon\Translate\Exceptions\KeyNotFound;
use Phalcon\Translate\Interpolator\InterpolatorInterface;
use Phalcon\Translate\InterpolatorFactory;

/**
 * @phpstan-import-type translate_adapter_options from TranslateTypes
 * @phpstan-import-type translate_placeholders from TranslateTypes
 *
 * @implements ArrayAccess<string, string>
 */
abstract class AbstractAdapter implements \Phalcon\Translate\Adapter\AdapterInterface, \ArrayAccess
{
    protected string $defaultInterpolator = '';

    protected ?\Phalcon\Translate\Interpolator\InterpolatorInterface $interpolator = null;

    protected \Phalcon\Translate\InterpolatorFactory $interpolatorFactory;

    protected bool $triggerError = false;

    /**
     * AbstractAdapter constructor.
     *
     * @phpstan-param translate_adapter_options $options
     * @param \Phalcon\Translate\InterpolatorFactory $interpolatorFactory
     * @param array $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolatorFactory, array $options = [])
    {
    }

    /**
     * Returns the translation string of the given key (alias of method 't')
     *
     * @phpstan-param translate_placeholders $placeholders
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function _(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Whenever a key is not found this method will be called
     *
     * @throws KeyNotFound
     * @param string $index
     * @return string
     */
    public function notFound(string $index): string
    {
    }

    /**
     * Check whether a translation key exists
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param string $offset
     *
     * @return string
     */
    public function offsetGet($offset): string
    {
    }

    /**
     * Sets a translation value
     *
     * @throws ImmutableObject
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Unsets a translation from the dictionary
     *
     * @throws ImmutableObject
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Returns the translation string of the given key
     *
     * @phpstan-param translate_placeholders $placeholders
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function t(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Replaces placeholders by the values passed
     *
     * @phpstan-param translate_placeholders $placeholders
     *
     * @throws Exception
     * @param string $translation
     * @param array $placeholders
     * @return string
     */
    protected function replacePlaceholders(string $translation, array $placeholders = []): string
    {
    }
}
