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
 * Negotiates a formatter against the request `Accept` header and renders the
 * payload as the response body + content type.
 *
 * If no formatter accepts the header it falls back to the first (default)
 * formatter, so the content type and body are never left unset.
 */
class FormatResponder implements \Phalcon\Contracts\ADR\Responder\Responder
{
    /**
     * @var array
     */
    protected array $formatters = [];

    /**
     * @param array $formatters
     */
    public function __construct(array $formatters = [])
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
