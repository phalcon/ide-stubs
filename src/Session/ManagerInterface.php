<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session;

use InvalidArgumentException;
use RuntimeException;
use SessionHandlerInterface;

/**
 * Phalcon\Session
 *
 * Interface for the Phalcon\Session\Manager
 */
interface ManagerInterface
{
    const SESSION_ACTIVE = 2;

    const SESSION_DISABLED = 0;

    const SESSION_NONE = 1;


    /**
     * Alias: Gets a session variable from an application context
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key): mixed;

    /**
     * Alias: Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool;

    /**
     * Alias: Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(string $key, $value): void;

    /**
     * Alias: Removes a session variable from an application context
     *
     * @param string $key
     * @return void
     */
    public function __unset(string $key): void;

    /**
     * Check whether the session has been started
     *
     * @return bool
     */
    public function exists(): bool;

    /**
     * Destroy/end a session
     *
     * @return void
     */
    public function destroy(): void;

    /**
     * Gets a session variable from an application context
     *
     * @param string $key
     * @param mixed $defaultValue
     * @param bool $remove
     * @return mixed
     */
    public function get(string $key, $defaultValue = null, bool $remove = false): mixed;

    /**
     * Returns the session id
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Returns the stored session adapter
     *
     * @return SessionHandlerInterface
     */
    public function getAdapter(): SessionHandlerInterface;

    /**
     * Returns the name of the session
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get internal options
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Removes a session variable from an application context
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key): void;

    /**
     * Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function set(string $key, $value): void;

    /**
     * Set the adapter for the session
     *
     * @param \SessionHandlerInterface $adapter
     * @return ManagerInterface
     */
    public function setAdapter(\SessionHandlerInterface $adapter): ManagerInterface;

    /**
     * Set session Id
     *
     * @param string $sessionId
     * @return ManagerInterface
     */
    public function setId(string $sessionId): ManagerInterface;

    /**
     * Set the session name. Throw exception if the session has started
     * and do not allow poop names
     *
     * @throws InvalidArgumentException
     * @param string $name
     * @return ManagerInterface
     */
    public function setName(string $name): ManagerInterface;

    /**
     * Sets session's options
     *
     * @param array $options
     * @return void
     */
    public function setOptions(array $options): void;

    /**
     * Returns the status of the current session.
     *
     * @return int
     */
    public function status(): int;

    /**
     * Starts the session (if headers are already sent the session will not be
     * started)
     *
     * @return bool
     */
    public function start(): bool;

    /**
     * Regenerates the session id using the adapter.
     *
     * @param bool $deleteOldSession
     * @return ManagerInterface
     */
    public function regenerateId(bool $deleteOldSession = true): ManagerInterface;
}
