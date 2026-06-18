<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Guard;

use DateTimeImmutable;
use Phalcon\Auth\Exception;
use Phalcon\Auth\Exceptions\DoesNotImplement;
use Phalcon\Auth\Guard\Config\SessionGuardConfig;
use Phalcon\Auth\Internal\ContainerResolver;
use Phalcon\Auth\Internal\Options;
use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\Adapter\RememberAdapter;
use Phalcon\Contracts\Auth\AuthRemember;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\Guard\BasicAuth;
use Phalcon\Contracts\Auth\Guard\GuardStateful;
use Phalcon\Contracts\Auth\RememberToken;
use Phalcon\Http\RequestInterface;
use Phalcon\Http\Response\CookiesInterface;
use Phalcon\Session\ManagerInterface as SessionManagerInterface;
use Phalcon\Support\Helper\Json\Encode;
use Phalcon\Time\Clock\ClockInterface;
use Phalcon\Time\Clock\SystemClock;

/**
 * @phpstan-import-type AuthCredentials from Adapter
 *
 * @extends AbstractGuard<SessionGuardConfig>
 */
class Session extends \Phalcon\Auth\Guard\AbstractGuard implements \Phalcon\Contracts\Auth\Guard\GuardStateful, \Phalcon\Contracts\Auth\Guard\BasicAuth
{
    /**
     * @var ClockInterface
     */
    protected $clock;

    /**
     * @var CookiesInterface
     */
    protected $cookies;

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var SessionManagerInterface
     */
    protected $session;

    /**
     * @var bool
     */
    protected $viaRemember = false;

    /**
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @param \Phalcon\Http\RequestInterface $request
     * @param \Phalcon\Http\Response\CookiesInterface $cookies
     * @param \Phalcon\Session\ManagerInterface $session
     * @param \Phalcon\Auth\Guard\Config\SessionGuardConfig|null $config
     * @param \Phalcon\Time\Clock\ClockInterface|null $clock
     */
    public function __construct(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter, \Phalcon\Http\RequestInterface $request, \Phalcon\Http\Response\CookiesInterface $cookies, \Phalcon\Session\ManagerInterface $session, ?\Phalcon\Auth\Guard\Config\SessionGuardConfig $config = null, ?\Phalcon\Time\Clock\ClockInterface $clock = null)
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @param mixed $container
     * @param array $options
     * @return static
     */
    public static function fromOptions(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter, $container, array $options): static
    {
    }

    /**
     * @phpstan-param AuthCredentials $credentials
     *
     * @throws Exception
     * @param array $credentials
     * @param bool $remember
     * @return bool
     */
    public function attempt(array $credentials = [], bool $remember = false): bool
    {
    }

    /**
     * @param array<string, mixed> $extraConditions
     *
     * @throws Exception
     * @param string $field
     * @return bool
     */
    public function basic(string $field = 'email', array $extraConditions = []): bool
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * @return string
     */
    public function getRememberName(): string
    {
    }

    /**
     * @throws Exception
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @param bool $remember
     * @return void
     */
    public function login(\Phalcon\Contracts\Auth\AuthUser $user, bool $remember = false): void
    {
    }

    /**
     * @throws Exception
     * @param mixed $id
     * @param bool $remember
     * @return false|AuthUser
     */
    public function loginById($id, bool $remember = false): AuthUser|false
    {
    }

    /**
     * @return void
     */
    public function logout(): void
    {
    }

    /**
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return bool
     */
    public function once(array $credentials = []): bool
    {
    }

    /**
     * @param array<string, mixed> $extraConditions
     * @param string $field
     * @return false|AuthUser
     */
    public function onceBasic(string $field = 'email', array $extraConditions = []): AuthUser|false
    {
    }

    /**
     * @return AuthUser|null
     */
    public function user(): AuthUser|null
    {
    }

    /**
     * @phpstan-param AuthCredentials $credentials
     *
     * @phpstan-assert-if-true !null $this->lastUserAttempted
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool
    {
    }

    /**
     * @return bool
     */
    public function viaRemember(): bool
    {
    }

    /**
     * @param array<string, mixed> $extraConditions
     *
     * @throws Exception
     * @param string $field
     * @return bool
     */
    protected function attemptBasic(string $field, array $extraConditions = []): bool
    {
    }

    /**
     * @return array<string, mixed>|null
     * @param string $field
     */
    protected function basicCredentials(string $field): array|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @return RememberToken
     */
    protected function createRememberToken(\Phalcon\Contracts\Auth\AuthUser $user): RememberToken
    {
    }

    /**
     * @return UserRemember|null
     */
    protected function recaller(): UserRemember|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @return void
     */
    protected function rememberUser(\Phalcon\Contracts\Auth\AuthUser $user): void
    {
    }

    /**
     * @param UserRemember $recaller
     * @return AuthUser|null
     */
    protected function userFromRecaller(UserRemember $recaller): AuthUser|null
    {
    }
}
