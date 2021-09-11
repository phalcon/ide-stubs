<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message\Stream;

use Phalcon\Http\Message\Stream;

/**
 * Describes a data stream from "php://memory"
 *
 * Typically, an instance will wrap a PHP stream; this interface provides
 * a wrapper around the most common operations, including serialization of
 * the entire stream to a string.
 */
class Memory extends Stream
{

    /**
     * Constructor
     *
     * @param mixed $mode
     */
    public function __construct($mode = 'rb')
    {
    }
}
