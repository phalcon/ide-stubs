<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Helper;

/**
 * This class offers file operation helper
 */
class Fs
{

    /**
     * Gets the filename from a given path, Same as PHP's basename() but has non-ASCII support.
     * PHP's basename() does not properly support streams or filenames beginning with a non-US-ASCII character.
     * see https://bugs.php.net/bug.php?id=37738
     *
     * @param string $uri
     * @param string $suffix
     *
     * @return string
     */
    final public static function basename(string $uri, $suffix = null): string
    {
    }
}
