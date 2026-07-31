<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Container;

use Phalcon\ADR\Dispatcher;
use Phalcon\ADR\Emitter\SapiEmitter;
use Phalcon\ADR\Responder\JsonResponder;
use Phalcon\ADR\Router\AttributeFilter;
use Phalcon\ADR\Router\Router;
use Phalcon\Contracts\ADR\Dispatcher as DispatcherContract;
use Phalcon\Contracts\ADR\Emitter\Emitter as EmitterContract;
use Phalcon\Contracts\ADR\Responder\Responder as ResponderContract;
use Phalcon\Contracts\ADR\Router\AttributeFilter as AttributeFilterContract;
use Phalcon\Contracts\ADR\Router\Router as RouterContract;
use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Contracts\Container\Service\Provider;
use Phalcon\Contracts\Events\Manager as EventsManagerContract;
use Phalcon\Contracts\Http\AttributeRequest as RequestContract;
use Phalcon\Contracts\Logger\Logger as LoggerContract;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Html\Escaper;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\TagFactory;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Http\ResponseInterface;
use Phalcon\Logger\Adapter\Noop;
use Phalcon\Logger\Logger;

/**
 * Registers the ADR seams in the container; concretes autowire.
 *
 * Used instead of `Phalcon\Container\Provider\Web` for ADR applications. It
 * shares the short aliases (`request`/`response`/`router`/`eventsManager`) but
 * binds the ADR contracts behind them.
 */
class AdrProvider implements \Phalcon\Contracts\Container\Service\Provider
{
    /**
     * @param Collection $services
     *
     * @return void
     */
    public function provide(\Phalcon\Contracts\Container\Service\Collection $services): void
    {
    }
}
