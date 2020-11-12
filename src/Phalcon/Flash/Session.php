<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

use Phalcon\Di\DiInterface;
use Phalcon\Session\ManagerInterface;

/**
 * This is an implementation of the Phalcon\Flash\FlashInterface that
 * temporarily stores the messages in session, then messages can be printed in
 * the next request.
 */
class Session extends \Phalcon\Flash\AbstractFlash
{

    /**
     * Clear messages in the session messenger
     *
     * @return void
     */
    public function clear()
    {
    }

    /**
     * Returns the messages in the session flasher
     *
     * @param mixed $type
     * @param bool $remove
     * @return array
     */
    public function getMessages($type = null, bool $remove = true): array
    {
    }

    /**
     * Checks whether there are messages
     *
     * @param mixed $type
     * @return bool
     */
    public function has($type = null): bool
    {
    }

    /**
     * Adds a message to the session flasher
     *
     * @return null|string|void
     * @param string $type
     * @param string $message
     */
    public function message(string $type, string $message): ?string
    {
    }

    /**
     * Prints the messages in the session flasher
     *
     * @param bool $remove
     * @return void
     */
    public function output(bool $remove = true)
    {
    }

    /**
     * Returns the messages stored in session
     *
     * @param bool $remove
     * @param mixed $type
     * @return array
     */
    protected function getSessionMessages(bool $remove, $type = null): array
    {
    }

    /**
     * Stores the messages in session
     *
     * @param array $messages
     * @return array
     */
    protected function setSessionMessages(array $messages): array
    {
    }

    /**
     * Returns the Session Service
     *
     * @return ManagerInterface
     */
    public function getSessionService(): ManagerInterface
    {
    }
}
