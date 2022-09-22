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
use Phalcon\Translate\InterpolatorFactory;

/**
 * Class NativeArray
 *
 * Defines translation lists using PHP arrays
 *
 * @package Phalcon\Translate\Adapter
 *
 * @property array $translate
 * @property bool  $triggerError
 */
class NativeArray extends \Phalcon\Translate\Adapter\AbstractAdapter implements \ArrayAccess
{
    /**
     * @var array
     */
    private $translate = [];

    /**
     * @var bool
     */
    private $triggerError = false;

    /**
     * NativeArray constructor.
     *
     * @param InterpolatorFactory $interpolator
     * @param array               $options = [
     *                                'content'      => '',
     *                                'triggerError' => false
     *                            ]
     *
     * @throws Exception
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     *
     * @return bool
     * @deprecated
     */
    public function exists(string $index): bool
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     *
     * @return bool
     */
    public function has(string $index): bool
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
     * Returns the translation related to the given key
     *
     * @param string $index
     * @param array  $placeholders
     *
     * @return string
     * @throws Exception
     * @param string $translateKey
     */
    public function query(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Returns the internal array
     *
     * @return array
     */
    public function toArray(): array
    {
    }
}
