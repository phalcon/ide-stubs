<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

use Phalcon\Session\ManagerInterface;

/**
 * This is an implementation of the Phalcon\Flash\FlashInterface that
 * temporarily stores the messages in session, then messages can be printed in
 * the next request.
 *
 * Class Session
 *
 * @package Phalcon\Flash
 */
class Session extends \Phalcon\Flash\AbstractFlash
{
    const SESSION_KEY = '_flashMessages';


    /**
     * Clear messages in the session messenger
     *
     * @throws Exception
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * Returns the messages in the session flasher
     *
     * @param mixed|null $type
     * @param bool       $remove
     *
     * @return array
     * @throws Exception
     */
    public function getMessages($type = null, bool $remove = true): array
    {
    }

    /**
     * Checks whether there are messages
     *
     * @param string|null $type
     *
     * @return bool
     * @throws Exception
     */
    public function has(string $type = null): bool
    {
    }

    /**
     * Adds a message to the session flasher
     *
     * @param string $type
     * @param mixed  $message
     *
     * @return string|null
     * @throws Exception
     */
    public function message(string $type, $message): string|null
    {
    }

    /**
     * Prints the messages in the session flasher
     *
     * @param bool $remove
     *
     * @throws Exception
     * @return void
     */
    public function output(bool $remove = true): void
    {
    }

    /**
     * Returns the messages stored in session
     *
     * @param bool       $remove
     * @param mixed|null $type
     *
     * @return array
     * @throws Exception
     */
    protected function getSessionMessages(bool $remove, string $type = null): array
    {
    }

    /**
     * Stores the messages in session
     *
     * @param array $messages
     *
     * @return array
     * @throws Exception
     */
    protected function setSessionMessages(array $messages): array
    {
    }

    /**
     * Returns the Session Service
     *
     * @return ManagerInterface
     * @throws Exception
     */
    public function getSessionService(): ManagerInterface
    {
    }
}
