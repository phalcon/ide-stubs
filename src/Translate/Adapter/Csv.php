<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use Phalcon\Translate\Exception;
use Phalcon\Translate\Exceptions\MissingRequiredParameter;
use Phalcon\Translate\Exceptions\FileOpenError;
use Phalcon\Translate\InterpolatorFactory;

/**
 * @phpstan-type TOptions array{
 *      content?: string,
 *      delimiter?: string,
 *      enclosure?: string,
 *      escape?: string
 * }
 */
class Csv extends \Phalcon\Translate\Adapter\AbstractAdapter
{
    /**
     * @var array
     */
    protected $translate = [];

    /**
     * Csv constructor.
     *
     * @phpstan-param TOptions            $options
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
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @throws Exception
     * @param string $translateKey
     * @param array $placeholders
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

    /**
     * @todo to be removed when we get traits
     * @param string $filename
     * @param string $mode
     */
    protected function phpFopen(string $filename, string $mode)
    {
    }

    /**
     * Load translations from file
     *
     * Lines whose first column begins with a `#` are treated as comments
     * and skipped.
     *
     * @param string $file
     * @param int    $length
     * @param string $separator
     * @param string $enclosure
     * @param string $escape
     *
     * @return void
     * @throws FileOpenError
     * @param string $delimiter
     */
    private function load(string $file, int $length, string $delimiter, string $enclosure, string $escape): void
    {
    }
}
