<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Responder;

use Phalcon\Contracts\ADR\Payload\Payload;
use Phalcon\Contracts\ADR\Responder\Responder;
use Phalcon\Http\RequestInterface;
use Phalcon\Http\ResponseInterface;

/**
 * Composes single-purpose responders. Each link receives the request, the
 * response threaded so far, and the payload, and returns the response.
 */
class ChainResponder implements \Phalcon\Contracts\ADR\Responder\Responder
{
    /**
     * @var Responder[]
     */
    protected $links = [];

    /**
     * @param array $links
     */
    public function __construct(array $links = [])
    {
    }

    /**
     * @param \Phalcon\Http\RequestInterface $request
     * @param \Phalcon\Http\ResponseInterface $response
     * @param \Phalcon\Contracts\ADR\Payload\Payload $payload
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Http\RequestInterface $request, \Phalcon\Http\ResponseInterface $response, \Phalcon\Contracts\ADR\Payload\Payload $payload): ResponseInterface
    {
    }

    /**
     * @param \Phalcon\Contracts\ADR\Responder\Responder $link
     * @return ChainResponder
     */
    public function with(\Phalcon\Contracts\ADR\Responder\Responder $link): ChainResponder
    {
    }
}
