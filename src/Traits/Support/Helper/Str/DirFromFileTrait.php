<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Traits\Support\Helper\Str;

/**
 * Accepts a file name (without extension) and returns a calculated
 * directory structure with the filename in the end
 */
trait DirFromFileTrait
{
    /**
     * @param string $file
     * @param bool   $filesystemSafe
     *
     * @return string
     */
    protected static function toDirFromFile(string $file, bool $filesystemSafe = false): string
    {
    }
}
