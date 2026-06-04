<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Cli;

use Phalcon\Auth\AbstractAuthDispatcherListener;
use Phalcon\Auth\Exception;
use Phalcon\Cli\Dispatcher;
use Phalcon\Events\Event;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by sinbadxiii/cphalcon-auth
 *
 * @link    https://github.com/sinbadxiii/cphalcon-auth
 */
class AuthDispatcherListener extends AbstractAuthDispatcherListener
{
    /**
     * @throws Exception
     * @param \Phalcon\Events\Event $event
     * @param \Phalcon\Cli\Dispatcher $dispatcher
     * @return bool
     */
    public function beforeExecuteRoute(\Phalcon\Events\Event $event, \Phalcon\Cli\Dispatcher $dispatcher): bool
    {
    }

    /**
     * @return string
     */
    protected function getActionType(): string
    {
    }
}
