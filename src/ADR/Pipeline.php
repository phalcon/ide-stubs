<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR;

use Phalcon\Contracts\ADR\Handler;
use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\ResponseInterface;

/**
 * Self-recursive middleware runner. It is itself a Handler: it carries an index
 * and hands a new Pipeline (advanced by one) forward as the `next` handler, so
 * `next` is always a real Handler - no anonymous classes or callables.
 *
 * When the middleware is exhausted it invokes the terminal handler (the Action).
 */
final class Pipeline implements \Phalcon\Contracts\ADR\Handler
{
    protected int $index;

    /**
     * @var array
     */
    protected array $middleware;

    /**
     * @var Handler
     */
    protected $terminal;

    /**
     * @param array $middleware
     * @param \Phalcon\Contracts\ADR\Handler $terminal
     * @param int $index
     */
    public function __construct(array $middleware, \Phalcon\Contracts\ADR\Handler $terminal, int $index = 0)
    {
    }

    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Contracts\Http\AttributeRequest $request): ResponseInterface
    {
    }
}
