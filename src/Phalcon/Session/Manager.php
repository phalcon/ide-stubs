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
use Phalcon\Helper\Arr;

/**
 * Phalcon\Session\Manager
 *
 * Session manager class
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
    private $options = array();

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
    public function __construct(array $options = array())
    {
    }

    /**
     * Alias: Gets a session variable from an application context
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key)
    {
    }

    /**
     * Alias: Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool
    {
    }

    /**
     * Alias: Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(string $key, $value)
    {
    }

    /**
     * Alias: Removes a session variable from an application context
     *
     * @param string $key
     * @return void
     */
    public function __unset(string $key)
    {
    }

    /**
     * Destroy/end a session
     *
     * @return void
     */
    public function destroy()
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
     * @param string $key
     * @param mixed $defaultValue
     * @param bool $remove
     * @return mixed
     */
    public function get(string $key, $defaultValue = null, bool $remove = false)
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
     * @param mixed $deleteOldSession
     * @return ManagerInterface
     */
    public function regenerateId($deleteOldSession = true): ManagerInterface
    {
    }

    /**
     * Removes a session variable from an application context
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key)
    {
    }

    /**
     * Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function set(string $key, $value)
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
     * @param string $id
     * @return ManagerInterface
     */
    public function setId(string $id): ManagerInterface
    {
    }

    /**
     * Set the session name. Throw exception if the session has started
     * and do not allow poop names
     *
     * @param string $name *
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
    public function setOptions(array $options)
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
     * @return string
     */
    private function getUniqueKey(string $key): string
    {
    }
}
