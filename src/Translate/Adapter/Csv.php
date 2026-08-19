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
use Phalcon\Traits\Php\FileTrait;
use Phalcon\Translate\Exception;
use Phalcon\Translate\Exceptions\FileOpenError;
use Phalcon\Translate\Exceptions\MissingRequiredParameter;
use Phalcon\Translate\InterpolatorFactory;

/**
 * @phpstan-import-type translate_csv_options from TranslateTypes
 * @phpstan-import-type translate_data from TranslateTypes
 * @phpstan-import-type translate_placeholders from TranslateTypes
 */
class Csv extends \Phalcon\Translate\Adapter\AbstractAdapter
{
    use \Phalcon\Traits\Php\FileTrait;


    /**
     * @phpstan-var translate_data
     */
    protected array $translate = [];

    /**
     * Csv constructor.
     *
     * @phpstan-param translate_csv_options $options
     *
     * @throws Exception
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

    /**
     * Load translations from file
     *
     * Lines whose first column begins with a `#` are treated as comments
     * and skipped.
     *
     * @phpstan-param int<0, max> $length
     *
     * @throws FileOpenError
     * @param string $file
     * @param int $length
     * @param string $delimiter
     * @param string $enclosure
     * @param string $escape
     * @return void
     */
    private function load(string $file, int $length, string $delimiter, string $enclosure, string $escape): void
    {
    }
}
