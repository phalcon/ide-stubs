<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Str;

/**
 * Accepts a directory name and ensures that it ends with
 * DIRECTORY_SEPARATOR
 */
class DirSeparator
{
    /**
     * @param string $directory
     *
     * @return string
     */
    public function __invoke(string $directory): string
    {
    }
}
