<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

use Phalcon\Contracts\Flash\FlashTypes;
use Phalcon\Flash\Exceptions\SessionServiceUnavailable;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Session\ManagerInterface;

/**
 * This is an implementation of the Phalcon\Flash\FlashInterface that
 * temporarily stores the messages in session, then messages can be printed in
 * the next request.
 *
 * Class Session
 *
 * @package Phalcon\Flash
 *
 * @phpstan-import-type flash_session_messages from FlashTypes
 */
class Session extends \Phalcon\Flash\AbstractFlash
{
    /**
     * @var string
     */
    const string SESSION_KEY = '_flashMessages';

    protected string $sessionKey = '';

    /**
     * Session constructor.
     *
     * @param \Phalcon\Html\Escaper\EscaperInterface|null $escaper
     * @param \Phalcon\Session\ManagerInterface|null $session
     * @param string|null $sessionKey
     */
    public function __construct(?\Phalcon\Html\Escaper\EscaperInterface $escaper = null, ?\Phalcon\Session\ManagerInterface $session = null, ?string $sessionKey = null)
    {
    }

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
     * @param string|null $type
     * @param bool        $remove
     *
     * @phpstan-return ($type is null ? flash_session_messages : list<mixed>)
     * @throws Exception
     * @return array
     */
    public function getMessages($type = null, bool $remove = true): array
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

    /**
     * Checks whether there are messages
     *
     * @throws Exception
     * @param string|null $type
     * @return bool
     */
    public function has(?string $type = null): bool
    {
    }

    /**
     * Adds a message to the session flasher
     *
     * @throws Exception
     * @param string $type
     * @param mixed $message
     * @return string|null
     */
    public function message(string $type, $message): string|null
    {
    }

    /**
     * Prints the messages in the session flasher
     *
     * @throws Exception
     * @param bool $remove
     * @return void
     */
    public function output(bool $remove = true): void
    {
    }

    /**
     * Returns the messages stored in session
     *
     * @param bool        $remove
     * @param string|null $type
     *
     * @phpstan-return ($type is null ? flash_session_messages : list<mixed>)
     * @throws Exception
     * @return array
     */
    protected function getSessionMessages(bool $remove, ?string $type = null): array
    {
    }

    /**
     * Stores the messages in session
     *
     * @phpstan-param  flash_session_messages $messages
     * @phpstan-return flash_session_messages
     *
     * @throws Exception
     * @param array $messages
     * @return array
     */
    protected function setSessionMessages(array $messages): array
    {
    }
}
