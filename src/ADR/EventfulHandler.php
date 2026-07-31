<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR;

use Phalcon\ADR\Events\Event;
use Phalcon\Contracts\ADR\Action;
use Phalcon\Contracts\ADR\Handler;
use Phalcon\Contracts\Events\Manager;
use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\ResponseInterface;

/**
 * The terminal handler of the pipeline: fires the `adr:` events around the
 * Action's execution.
 */
final class EventfulHandler implements \Phalcon\Contracts\ADR\Handler
{
    protected \Phalcon\Contracts\ADR\Action $action;

    protected \Phalcon\Contracts\Events\Manager $events;

    /**
     * @param \Phalcon\Contracts\ADR\Action $action
     * @param \Phalcon\Contracts\Events\Manager $events
     */
    public function __construct(\Phalcon\Contracts\ADR\Action $action, \Phalcon\Contracts\Events\Manager $events)
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
