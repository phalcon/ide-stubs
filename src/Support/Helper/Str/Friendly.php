<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

use Phalcon\Support\Helper\Str\Exceptions\InvalidReplaceFormat;

/**
 * Changes a text to a URL friendly one. Replaces commonly known accented
 * characters with their Latin equivalents. If a `replace` string or array
 * is passed, it will also be used to replace those characters with a space.
 */
class Friendly extends \Phalcon\Support\Helper\Str\AbstractStr
{
    /**
     * @param array<array-key, string>|string|null $replace
     *
     * @throws InvalidReplaceFormat
     * @param string $text
     * @param string $separator
     * @param bool $lowercase
     * @return string
     */
    public function __invoke(string $text, string $separator = '-', bool $lowercase = true, $replace = null): string
    {
    }

    /**
     * @param array<array-key, string>|string $replace
     *
     * @return array<array-key, string>
     * @throws InvalidReplaceFormat
     */
    private function checkReplace($replace): array
    {
    }

    /**
     * @param array<array-key, string> $replace
     *
     * @return array<string, string>
     */
    private function getMatrix(array $replace): array
    {
    }
}
