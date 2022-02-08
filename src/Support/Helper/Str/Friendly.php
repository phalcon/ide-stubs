<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

use Phalcon\Support\Helper\Exception;

/**
 * Changes a text to a URL friendly one. Replaces commonly known accented
 * characters with their Latin equivalents. If a `replace` string or array
 * is passed, it will also be used to replace those characters with a space.
 */
class Friendly extends \Phalcon\Support\Helper\Str\AbstractStr
{
    /**
     * @param string     $text
     * @param string     $separator
     * @param bool       $lowercase
     * @param mixed|null $replace
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $text, string $separator = '-', bool $lowercase = true, $replace = null): string
    {
    }

    /**
     * @param mixed $replace
     *
     * @return array
     * @throws Exception
     */
    private function checkReplace($replace): array
    {
    }

    /**
     * @param mixed $replace
     *
     * @return array
     * @throws Exception
     */
    private function getMatrix(array $replace): array
    {
    }
}
