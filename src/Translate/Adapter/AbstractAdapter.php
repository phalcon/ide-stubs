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
use Phalcon\Translate\Exception;
use Phalcon\Translate\Exceptions\ImmutableObject;
use Phalcon\Translate\Exceptions\KeyNotFound;
use Phalcon\Translate\InterpolatorFactory;
use Phalcon\Translate\Interpolator\InterpolatorInterface;

/**
 * @psalm-type TOptions array{
 *     defaultInterpolator?: string
 * }
 *
 * @template TKey of string
 * @template TValue of string
 * @implements ArrayAccess<TKey, TValue>
 */
abstract class AbstractAdapter implements \Phalcon\Translate\Adapter\AdapterInterface, \ArrayAccess
{
    /**
     * @var string
     */
    protected $defaultInterpolator = '';

    /**
     * @var InterpolatorInterface | null
     */
    protected $interpolator = null;

    /**
     * @var InterpolatorFactory
     */
    protected $interpolatorFactory;

    /**
     * @var bool
     */
    protected $triggerError = false;

    /**
     * AbstractAdapter constructor.
     *
     * @param TOptions            $options
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options = [])
    {
    }

    /**
     * Returns the translation string of the given key (alias of method 't')
     *
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @param string $translateKey
     * @param array $placeholders
     */
    public function _(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Whenever a key is not found this method will be called
     *
     * @param string $index
     *
     * @return string
     * @throws Exception
     */
    public function notFound(string $index): string
    {
    }

    /**
     * Check whether a translation key exists
     *
     * @param mixed $translateKey
     *
     * @return bool
     */
    public function offsetExists($translateKey): bool
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param TKey $translateKey
     *
     * @return TValue
     */
    public function offsetGet($translateKey): string|null
    {
    }

    /**
     * Sets a translation value
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     * @throws ImmutableObject
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Unsets a translation from the dictionary
     *
     * @param mixed $offset
     *
     * @return void
     * @throws ImmutableObject
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Returns the translation string of the given key
     *
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @param string $translateKey
     * @param array $placeholders
     */
    public function t(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Replaces placeholders by the values passed
     *
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @param string $translation
     * @param array $placeholders
     */
    protected function replacePlaceholders(string $translation, array $placeholders = []): string
    {
    }
}
