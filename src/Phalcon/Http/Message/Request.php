<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message;

use Phalcon\Http\Message\Stream\Input;
use Phalcon\Http\Message\AbstractRequest;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * PSR-7 Request
 */
final class Request extends AbstractRequest implements \Psr\Http\Message\RequestInterface
{

    /**
     * Request constructor.
     *
     * @param string                          $method
     * @param UriInterface|string|null        $uri
     * @param StreamInterface|resource|string $body
     * @param array                           $headers
     */
    public function __construct(string $method = 'GET', $uri = null, $body = 'php://memory', $headers = array())
    {
    }
}
