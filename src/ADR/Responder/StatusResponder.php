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
 * Sets the response HTTP status code from the payload status, via StatusMapper.
 */
class StatusResponder implements \Phalcon\Contracts\ADR\Responder\Responder
{
    protected StatusMapper $mapper;

    /**
     * @param StatusMapper|null $mapper
     */
    public function __construct(?StatusMapper $mapper = null)
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
}
