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
 * Phalcon\Translate\Adapter\NativeArray
 *
 * Allows to define translation lists using PHP arrays
 */
class NativeArray extends \Phalcon\Translate\Adapter\AbstractAdapter implements \ArrayAccess
{
    /**
     * @var array
     */
    private $translate;

    /**
     * @var bool
     */
    private $triggerError = false;


    /**
     * Phalcon\Translate\Adapter\NativeArray constructor
     *
     * @param array $options = [
     *     'content' => '',
     *     'triggerError' => false
     * ]
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool
    {
    }

    /**
     * Whenever a key is not found this method will be called
     *
     * @param string $index
     * @return string
     */
    public function notFound(string $index): string
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param string $index
     * @param array $placeholders
     * @return string
     */
    public function query(string $index, array $placeholders = array()): string
    {
    }
}
