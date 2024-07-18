<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use Phalcon\Support\Helper\Arr\Get;
use Phalcon\Translate\Exception;
use Phalcon\Translate\InterpolatorFactory;

/**
 * Class AbstractAdapter
 *
 * @package Phalcon\Translate\Adapter
 *
 * @property string              $defaultInterpolator
 * @property InterpolatorFactory $interpolatorFactory
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
     * AbstractAdapter constructor.
     *
     * @param InterpolatorFactory $interpolator
     * @param array               $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options = [])
    {
    }

    /**
     * Returns the translation string of the given key (alias of method 't')
     *
     * @param string $translateKey
     * @param array  $placeholders
     *
     * @return string
     */
    public function _(string $translateKey, array $placeholders = []): string
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
     * @param mixed $translateKey
     *
     * @return mixed
     */
    public function offsetGet($translateKey): mixed
    {
    }

    /**
     * Sets a translation value
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @throws Exception
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Unsets a translation from the dictionary
     *
     * @param mixed $offset
     *
     * @throws Exception
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Returns the translation string of the given key
     *
     * @param string $translateKey
     * @param array  $placeholders
     *
     * @return string
     */
    public function t(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param array  $placeholders
     *
     * @return string
     */
    protected function replacePlaceholders(string $translation, array $placeholders = []): string
    {
    }
}
