<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by Zend Diactoros
 * @link    https://github.com/zendframework/zend-diactoros
 * @license https://github.com/zendframework/zend-diactoros/blob/master/LICENSE.md
 */

namespace Phalcon\Http\Message;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * PSR-17 RequestFactory
 */
final class RequestFactory implements RequestFactoryInterface
{

    /**
     * Create a new request.
     *
     * @param UriInterface|string|null $uri
     *
     * @param string $method
     * @param mixed $uri
     * @return \Psr\Http\Message\RequestInterface
     */
    public function createRequest(string $method, $uri): RequestInterface
    {
    }
}
