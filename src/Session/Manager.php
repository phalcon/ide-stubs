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
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\DiInterface;
use Phalcon\Support\Helper\Arr\Get;

/**
 * @property SessionHandlerInterface|null $adapter
 * @property string                       $name
 * @property array                        $options
 * @property string                       $uniqueId
 */
class Manager extends AbstractInjectionAware implements \Phalcon\Session\ManagerInterface
{
    /**
     * @var SessionHandlerInterface|null
     */
    private $adapter = null;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var string
     */
    private $uniqueId = '';

    /**
     * Manager constructor.
     *
     * @param array $options = [
     *     'uniqueId' => null
     * ]
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
     * @return SessionHandlerInterface
     */
    public function getAdapter(): SessionHandlerInterface
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
     * Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Get internal options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Regenerates the session id using the adapter.
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
     * @param string $sessionId
     * @return ManagerInterface
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
     * @throws InvalidArgumentException
     *
     * @return Manager
     */
    public function setName(string $name): ManagerInterface
    {
    }

    /**
     * Sets session's options
     *
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
     * Checks if or where headers have been sent
     *
     * @return bool
     *
     * @link https://php.net/manual/en/function.headers-sent.php
     */
    protected function phpHeadersSent(): bool
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

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    private function getArrVal(array $collection, $index, $defaultValue = null): mixed
    {
    }
}
