<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Micro;

use Phalcon\Auth\AbstractAuthDispatcherListener;
use Phalcon\Auth\Exception;
use Phalcon\Contracts\Auth\Manager;
use Phalcon\Events\Event;
use Phalcon\Mvc\Micro;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Mvc\RouterInterface;

/**
 * Listener that enforces the active Phalcon\Auth access gate on each Micro
 * route execution. Attach to the events manager:
 *
 *   $eventsManager->attach('micro', new AuthMicroListener($manager));
 *   $app->setEventsManager($eventsManager);
 *
 * The action name is the matched route's name, falling back to the route
 * pattern when the route is unnamed. The ACL component is the configured
 * component name (default 'Micro'). redirectTo() is ignored - Micro has no
 * forward mechanism.
 *
 * No-op when no active access has been set on the manager.
 */
class AuthMicroListener extends AbstractAuthDispatcherListener
{
    /**
     * @var string
     */
    protected $componentName;

    /**
     * @param \Phalcon\Contracts\Auth\Manager $manager
     * @param string $componentName
     */
    public function __construct(\Phalcon\Contracts\Auth\Manager $manager, string $componentName = 'Micro')
    {
    }

    /**
     * @throws Exception
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Mvc\Micro $application
     * @return bool
     */
    public function beforeExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Mvc\Micro $application): bool
    {
    }

    /**
     * @return string
     */
    protected function getActionType(): string
    {
    }
}
