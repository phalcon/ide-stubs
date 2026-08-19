<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http;

use Phalcon\Contracts\Http\HttpTypes;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\DiInterface;
use Phalcon\Encryption\Crypt\CryptInterface;
use Phalcon\Filter\FilterInterface;
use Phalcon\Http\Cookie\CookieInterface;
use Phalcon\Http\Cookie\Exception as CookieException;
use Phalcon\Http\Cookie\Exceptions\CookieKeyTooShort;
use Phalcon\Http\Cookie\Exceptions\CryptInterfaceRequired;
use Phalcon\Http\Cookie\Exceptions\CryptServiceUnavailable;
use Phalcon\Http\Cookie\Exceptions\FilterServiceUnavailable;
use Phalcon\Http\Response\Exception;
use Phalcon\Http\Traits\EncryptionAwareTrait;
use Phalcon\Session\ManagerInterface as SessionManagerInterface;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use Stringable;

/**
 * Provide OO wrappers to manage a HTTP cookie.
 *
 * @phpstan-import-type http_cookie_definition from HttpTypes
 * @phpstan-import-type http_cookie_options from HttpTypes
 * @phpstan-import-type http_setcookie_options from HttpTypes
 */
class Cookie extends AbstractInjectionAware implements \Phalcon\Http\Cookie\CookieInterface, \Stringable
{
    use \Phalcon\Http\Traits\EncryptionAwareTrait;
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;


    protected string $domain = '';

    protected int $expire = 0;

    protected ?\Phalcon\Filter\FilterInterface $filter = null;

    protected bool $httpOnly = false;

    protected string $name;

    protected array $options = [];

    protected string $path = '/';

    protected bool $isRead = false;

    protected bool $isRestored = false;

    protected bool $secure = false;

    /**
     * The cookie's sign key.
     */
    protected ?string $signKey = null;

    /**
     * @var mixed
     */
    protected $value = null;

    /**
     * Phalcon\Http\Cookie constructor.
     *
     * @phpstan-param http_cookie_options $options
     * @param string $name
     * @param mixed $value
     * @param int $expire
     * @param string $path
     * @param bool $secure
     * @param string $domain
     * @param bool $httpOnly
     * @param array $options
     */
    public function __construct(string $name, $value = null, int $expire = 0, string $path = '/', bool $secure = false, string $domain = '', bool $httpOnly = false, array $options = [])
    {
    }

    /**
     * Magic __toString method converts the cookie's value to string
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Deletes the cookie by setting an expiration time in the past
     *
     * @return void
     */
    public function delete(): void
    {
    }

    /**
     * Returns the domain that the cookie is available to
     *
     * @return string
     */
    public function getDomain(): string
    {
    }

    /**
     * Returns the current expiration time
     *
     * @return int
     */
    public function getExpiration(): int
    {
    }

    /**
     * Returns if the cookie is accessible only through the HTTP protocol
     *
     * @return bool
     */
    public function getHttpOnly(): bool
    {
    }

    /**
     * Returns the current cookie's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Returns the current cookie's options
     *
     * @phpstan-return http_cookie_options
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Returns the current cookie's path
     *
     * @return string
     */
    public function getPath(): string
    {
    }

    /**
     * Returns whether the cookie must only be sent when the connection is
     * secure (HTTPS)
     *
     * @return bool
     */
    public function getSecure(): bool
    {
    }

    /**
     * Returns the cookie's value.
     *
     * @todo filters needs to be array/string
     * @param mixed $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getValue($filters = null, $defaultValue = null): mixed
    {
    }

    /**
     * Reads the cookie-related info from the SESSION to restore the cookie as
     * it was set.
     *
     * This method is automatically called internally so normally you don't
     * need to call it.
     *
     * @return CookieInterface
     */
    public function restore(): CookieInterface
    {
    }

    /**
     * Sends the cookie to the HTTP client.
     *
     * Stores the cookie definition in session.
     *
     * @return CookieInterface
     */
    public function send(): CookieInterface
    {
    }

    /**
     * Sets the domain that the cookie is available to
     *
     * @param string $domain
     * @return CookieInterface
     */
    public function setDomain(string $domain): CookieInterface
    {
    }

    /**
     * Sets the cookie's expiration time
     *
     * @param int $expire
     * @return CookieInterface
     */
    public function setExpiration(int $expire): CookieInterface
    {
    }

    /**
     * Sets if the cookie is accessible only through the HTTP protocol
     *
     * @param bool $httpOnly
     * @return CookieInterface
     */
    public function setHttpOnly(bool $httpOnly): CookieInterface
    {
    }

    /**
     * Sets the cookie's options
     *
     * @phpstan-param http_cookie_options $options
     * @param array $options
     * @return CookieInterface
     */
    public function setOptions(array $options): CookieInterface
    {
    }

    /**
     * Sets the cookie's path
     *
     * @param string $path
     * @return CookieInterface
     */
    public function setPath(string $path): CookieInterface
    {
    }

    /**
     * Sets if the cookie must only be sent when the connection is secure
     * (HTTPS)
     *
     * @param bool $secure
     * @return CookieInterface
     */
    public function setSecure(bool $secure): CookieInterface
    {
    }

    /**
     * Sets the cookie's sign key.
     *
     * The `$signKey' MUST be at least 32 characters long
     * and generated using a cryptographically secure pseudo random generator.
     *
     * Use NULL to disable cookie signing.
     *
     * @see \Phalcon\Encryption\Security\Random
     * @param string|null $signKey
     * @return CookieInterface
     */
    public function setSignKey(?string $signKey = null): CookieInterface
    {
    }

    /**
     * Sets the cookie's value
     *
     * @param mixed $value
     * @return CookieInterface
     */
    public function setValue($value): CookieInterface
    {
    }

    /**
     * Sets if the cookie must be encrypted/decrypted automatically
     *
     * @param bool $useEncryption
     * @return CookieInterface
     */
    public function useEncryption(bool $useEncryption): CookieInterface
    {
    }

    /**
     * Assert the cookie's key is enough long.
     *
     * @throws \Phalcon\Http\Cookie\Exception
     * @param string $signKey
     * @return void
     */
    protected function assertSignKeyIsLongEnough(string $signKey): void
    {
    }

    /**
     * Check if the cookie is restored and restore it if not
     *
     * @return void
     */
    private function checkRestored(): void
    {
    }

    /**
     * @phpstan-return http_setcookie_options
     * @param int $expiresDefault
     * @return array
     */
    private function getCookieOptions(int $expiresDefault): array
    {
    }

    /**
     * The session key under which this cookie's definition is stored
     *
     * @return string
     */
    private function getSessionKey(): string
    {
    }

    /**
     * Returns the session manager from the container when the service is
     * available and the session has been started; `null` otherwise
     *
     * @return SessionManagerInterface|null
     */
    private function getStartedSession(): SessionManagerInterface|null
    {
    }
}
