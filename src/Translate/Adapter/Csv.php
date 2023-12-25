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
 * @property array $translate
 */
class Csv extends \Phalcon\Translate\Adapter\AbstractAdapter implements \ArrayAccess
{
    /**
     * @var array
     */
    protected $translate = [];

    /**
     * Csv constructor.
     *
     * @param InterpolatorFactory $interpolator
     * @param array               $options = [
     *                                       'content'   => '',
     *                                       'delimiter' => ';',
     *                                       'enclosure' => '"'
     *                                       ]
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
     * Returns the translation related to the given key
     *
     * @param string $translateKey
     * @param array  $placeholders
     *
     * @return string
     */
    public function query(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Load translations from file
     *
     * @param string $file
     * @param int    $length
     * @param string $separator
     * @param string $enclosure
     *
     * @throws Exception
     * @param string $delimiter
     * @return void
     */
    private function load(string $file, int $length, string $delimiter, string $enclosure): void
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

    /**
     * @todo to be removed when we get traits
     * @param string $filename
     * @param string $mode
     */
    protected function phpFopen(string $filename, string $mode)
    {
    }
}
