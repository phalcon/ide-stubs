<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR;

use Phalcon\ADR\Exceptions\MethodNotAllowed;
use Phalcon\ADR\Exceptions\RouteNotFound;
use Phalcon\ADR\Payload\Payload;
use Phalcon\ADR\Payload\Status;
use Phalcon\Contracts\ADR\Payload\Payload as PayloadContract;
use Phalcon\Contracts\ADR\Responder\Responder;
use Phalcon\Contracts\Logger\Logger;
use Phalcon\Http\RequestInterface;
use Phalcon\Http\ResponseInterface;
use Throwable;

/**
 * Turns a thrown exception into a response through the responder chain.
 *
 * The full diagnostic (class, message, file:line and the exception itself) goes
 * to the log with a correlation reference; the client receives only a generic
 * message plus that same reference, unless debug mode is on. Exceptions are
 * mapped to statuses deterministically: an exact class match first, then the
 * ancestor chain, so map ordering never matters.
 */
final class ErrorResponder
{
    protected \Phalcon\Contracts\ADR\Responder\Responder $chain;

    protected bool $debug;

    /**
     * @var array
     */
    protected array $exceptionMap;

    protected \Phalcon\Contracts\Logger\Logger $logger;

    /**
     * @param \Phalcon\Contracts\ADR\Responder\Responder $chain
     * @param \Phalcon\Contracts\Logger\Logger $logger
     * @param bool $debug
     * @param array $exceptionMap
     */
    public function __construct(\Phalcon\Contracts\ADR\Responder\Responder $chain, \Phalcon\Contracts\Logger\Logger $logger, bool $debug = false, array $exceptionMap = [])
    {
    }

    /**
     * @param \Phalcon\Http\RequestInterface $request
     * @param \Phalcon\Http\ResponseInterface $response
     * @param \Throwable $exception
     * @return ResponseInterface
     */
    public function handle(\Phalcon\Http\RequestInterface $request, \Phalcon\Http\ResponseInterface $response, \Throwable $exception): ResponseInterface
    {
    }

    /**
     * @param \Phalcon\Http\RequestInterface $request
     * @return string
     */
    protected function correlationId(\Phalcon\Http\RequestInterface $request): string
    {
    }

    /**
     * @return array
     */
    protected function defaultMap(): array
    {
    }

    /**
     * @param \Throwable $exception
     * @param string $ref
     * @param string $status
     * @return array
     */
    protected function details(\Throwable $exception, string $ref, string $status = Status::ERROR): array
    {
    }

    /**
     * The message that goes with the status. Reporting `Internal Server Error`
     * next to a `404` tells the client the opposite of what happened.
     *
     * @param string $status
     * @return string
     */
    protected function reason(string $status): string
    {
    }

    /**
     * @param \Throwable $exception
     * @return string
     */
    private function resolveStatus(\Throwable $exception): string
    {
    }
}
