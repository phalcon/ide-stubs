<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth;

use Phalcon\Auth\Access\AccessLocator;
use Phalcon\Auth\Adapter\AdapterLocator;
use Phalcon\Auth\Guard\GuardLocator;
use Phalcon\Auth\Internal\ContainerResolver;
use Phalcon\Auth\Internal\Options;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\Guard\Guard;
use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Di\DiInterface;
use Phalcon\Encryption\Security;

/**
 * Single entry-point factory that builds a fully wired Phalcon\Auth\Manager
 * from a config tree. Framework-shared services (RequestInterface,
 * CookiesInterface, SessionManagerInterface) are resolved from the injected
 * container so the manager wires against the real application singletons,
 * not separately constructed copies.
 *
 *  [
 *      'guards' => [
 *          'web' => [
 *              'type'    => 'session',
 *              'default' => true,
 *              'adapter' => [
 *                  'name'    => 'model',
 *                  'options' => [
 *                      'model' => User::class
 *                  ],
 *              ],
 *              'options' => [],
 *          ],
 *          'api' => [
 *              'type'    => 'token',
 *              'adapter' => [
 *                  'name'    => 'model',
 *                  'options' => [
 *                      'model' => User::class
 *                  ]
 *              ],
 *              'options' => [
 *                  'inputKey'   => 'api_token',
 *                  'storageKey' => 'api_token'
 *              ],
 *          ],
 *      ],
 *      'access' => [
 *          'auth'  => \Phalcon\Auth\Access\Auth::class,
 *          'guest' => \Phalcon\Auth\Access\Guest::class,
 *      ],
 *  ]
 *
 * @phpstan-type GuardConfig array{
 *     type: string,
 *     default?: bool,
 *     adapter: array{name: string, options?: array<string, mixed>},
 *     options?: array<string, mixed>,
 * }
 *
 * @phpstan-type AuthConfig array{
 *     guards?: array<string, GuardConfig>,
 *     access?: array<string, class-string<Access>>,
 * }
 */
class ManagerFactory
{
    /**
     * @var AccessLocator
     */
    protected $accessLocator;

    /**
     * @var AdapterLocator
     */
    protected $adapterLocator;

    /**
     * @var Collection|DiInterface
     */
    protected $container;

    /**
     * @var GuardLocator
     */
    protected $guardLocator;

    /**
     * @var Security
     */
    protected $hasher;

    /**
     * @param \Phalcon\Encryption\Security $hasher
     * @param mixed $container
     * @param \Phalcon\Auth\Adapter\AdapterLocator|null $adapterLocator
     * @param \Phalcon\Auth\Guard\GuardLocator|null $guardLocator
     * @param \Phalcon\Auth\Access\AccessLocator|null $accessLocator
     */
    public function __construct(\Phalcon\Encryption\Security $hasher, $container, ?\Phalcon\Auth\Adapter\AdapterLocator $adapterLocator = null, ?\Phalcon\Auth\Guard\GuardLocator $guardLocator = null, ?\Phalcon\Auth\Access\AccessLocator $accessLocator = null)
    {
    }

    /**
     * @phpstan-param AuthConfig|ConfigInterface $config
     *
     * @throws Exception
     * @param mixed $config
     * @return Manager
     */
    public function load($config): Manager
    {
    }

    /**
     * @param array{name: string, options?: array<string, mixed>} $cfg
     *
     * @throws Exception
     * @param \Phalcon\Auth\Adapter\AdapterLocator $locator
     * @return Adapter
     */
    protected function buildAdapter(\Phalcon\Auth\Adapter\AdapterLocator $locator, array $cfg): Adapter
    {
    }

    /**
     * @param array<string, mixed> $options
     *
     * @throws Exception
     * @param \Phalcon\Auth\Guard\GuardLocator $locator
     * @param string $type
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @return Guard
     */
    protected function buildGuard(\Phalcon\Auth\Guard\GuardLocator $locator, string $type, \Phalcon\Contracts\Auth\Adapter\Adapter $adapter, array $options): Guard
    {
    }
}
