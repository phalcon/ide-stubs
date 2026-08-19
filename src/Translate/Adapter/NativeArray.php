<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use Phalcon\Contracts\Translate\TranslateTypes;
use Phalcon\Translate\Exception;
use Phalcon\Translate\Exceptions\InvalidDataType;
use Phalcon\Translate\Exceptions\MissingContent;
use Phalcon\Translate\InterpolatorFactory;

/**
 * Defines translation lists using PHP arrays
 *
 * @phpstan-import-type translate_array_options from TranslateTypes
 * @phpstan-import-type translate_data from TranslateTypes
 * @phpstan-import-type translate_placeholders from TranslateTypes
 */
class NativeArray extends \Phalcon\Translate\Adapter\AbstractAdapter
{
    /**
     * @phpstan-var translate_data
     */
    private array $translate = [];

    /**
     * NativeArray constructor.
     *
     * @phpstan-param translate_array_options $options
     *
     * @throws InvalidDataType
     * @throws MissingContent
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     * @param array $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @deprecated
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function has(string $index): bool
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @phpstan-param translate_placeholders $placeholders
     *
     * @throws Exception
     * @param string $translateKey
     * @param array $placeholders
     * @return string
     */
    public function query(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Returns the internal array
     *
     * @phpstan-return translate_data
     * @return array
     */
    public function toArray(): array
    {
    }
}
