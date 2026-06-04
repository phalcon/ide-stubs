<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Exceptions;

use Phalcon\Auth\Exception;
use Throwable;

/**
 * Not a valid JSON
 */
class FileNotValidJson extends Exception
{
    /**
     * @param string $path
     * @param \Throwable $ex
     */
    public function __construct(string $path, \Throwable $ex)
    {
    }
}
