<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message;

/**
 * Interface for Request methods
 *
 * Implementation of this file has been influenced by PHP FIG
 *
 * @link    https://github.com/php-fig/http-message-util/
 * @license https://github.com/php-fig/http-message-util/blob/master/LICENSE
 */
interface RequestMethodInterface
{
    /**
     * @var string
     */
    const string METHOD_CONNECT = 'CONNECT';

    /**
     * @var string
     */
    const string METHOD_DELETE = 'DELETE';

    /**
     * @var string
     */
    const string METHOD_GET = 'GET';

    /**
     * @var string
     */
    const string METHOD_HEAD = 'HEAD';

    /**
     * @var string
     */
    const string METHOD_OPTIONS = 'OPTIONS';

    /**
     * @var string
     */
    const string METHOD_PATCH = 'PATCH';

    /**
     * @var string
     */
    const string METHOD_POST = 'POST';

    /**
     * @var string
     */
    const string METHOD_PURGE = 'PURGE';

    /**
     * @var string
     */
    const string METHOD_PUT = 'PUT';

    /**
     * @var string
     */
    const string METHOD_TRACE = 'TRACE';
}
