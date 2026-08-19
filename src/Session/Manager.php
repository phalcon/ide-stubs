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
use Phalcon\Contracts\Session\SessionTypes;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\DiInterface;
use Phalcon\Session\Exceptions\InvalidSessionAdapter;
use Phalcon\Session\Exceptions\InvalidSessionId;
use Phalcon\Session\Exceptions\InvalidSessionName;
use Phalcon\Session\Exceptions\SessionAlreadyStarted;
use Phalcon\Session\Exceptions\SessionModificationDenied;
use Phalcon\Traits\Php\HeaderTrait;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use SessionHandlerInterface;

/**
 * Session manager class
 *
 * @phpstan-import-type session_options from SessionTypes
 */
class Manager extends AbstractInjectionAware implements \Phalcon\Session\ManagerInterface
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;
    use \Phalcon\Traits\Php\HeaderTrait;


    private ?\SessionHandlerInterface $adapter = null;

    private string $name = '';

    /**
     * @var array<string, mixed>
     *
     * @phpstan-var session_options
     */
    private array $options = [];

    private string $uniqueId = '';

    /**
     * Manager constructor.
     *
     * @phpstan-param session_options $options
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Alias: Gets a session variable from an application context
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get(string $key): mixed
    {
    }

    /**
     * Alias: Check whether a session variable is set in an application context
     *
     * @param string $key
     *
     * @return bool
     */
    public function __isset(string $key): bool
    {
    }

    /**
     * Alias: Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed  $value
     * @return void
     */
    public function __set(string $key, $value): void
    {
    }

    /**
     * Alias: Removes a session variable from an application context
     *
     * @param string $key
     * @return void
     */
    public function __unset(string $key): void
    {
    }

    /**
     * Destroy/end a session
     *
     * @return void
     */
    public function destroy(): void
    {
    }

    /**
     * Check whether the session has been started
     *
     * @return bool
     */
    public function exists(): bool
    {
    }

    /**
     * Gets a session variable from an application context
     *
     * @param string     $key
     * @param mixed|null $defaultValue
     * @param bool       $remove
     *
     * @return mixed|null
     */
    public function get(string $key, $defaultValue = null, bool $remove = false): mixed
    {
    }

    /**
     * Returns the stored session adapter
     *
     * @return SessionHandlerInterface|null
     */
    public function getAdapter(): SessionHandlerInterface|null
    {
    }

    /**
     * Returns the session id
     *
     * @return string
     */
    public function getId(): string
    {
    }

    /**
     * Returns the name of the session
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Get internal options
     *
     * @phpstan-return session_options
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Regenerates the session id via `session_regenerate_id()` (when the
     * session is active). The registered save handler persists the data
     * under the new id.
     *
     * @param bool $deleteOldSession
     * @return ManagerInterface
     */
    public function regenerateId(bool $deleteOldSession = true): ManagerInterface
    {
    }

    /**
     * Removes a session variable from an application context
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key): void
    {
    }

    /**
     * Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function set(string $key, $value): void
    {
    }

    /**
     * Set the adapter for the session
     *
     * @param \SessionHandlerInterface $adapter
     * @return ManagerInterface
     */
    public function setAdapter(\SessionHandlerInterface $adapter): ManagerInterface
    {
    }

    /**
     * Set session Id
     *
     * @return ManagerInterface
     * @throws InvalidSessionId
     * @throws SessionAlreadyStarted
     * @param string $sessionId
     */
    public function setId(string $sessionId): ManagerInterface
    {
    }

    /**
     * Set the session name. Throw exception if the session has started
     * and do not allow poop names
     *
     * @param string $name
     *
     * @return ManagerInterface
     * @throws InvalidSessionName
     * @throws SessionModificationDenied
     */
    public function setName(string $name): ManagerInterface
    {
    }

    /**
     * Sets session's options
     *
     * @phpstan-param session_options $options
     * @param array $options
     * @return void
     */
    public function setOptions(array $options): void
    {
    }

    /**
     * Starts the session (if headers are already sent the session will not be
     * started)
     *
     * @return bool
     */
    public function start(): bool
    {
    }

    /**
     * Returns the status of the current session.
     *
     * @return int
     */
    public function status(): int
    {
    }

    /**
     * Returns the key prefixed
     *
     * @param string $key
     *
     * @return string
     */
    private function getUniqueKey(string $key): string
    {
    }
}
