<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Response;

use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Http\Cookie\Exception;
use Phalcon\Http\Cookie\CookieInterface;

/**
 * Phalcon\Http\Response\Cookies
 *
 * This class is a bag to manage the cookies.
 *
 * A cookies bag is automatically registered as part of the 'response' service
 * in the DI. By default, cookies are automatically encrypted before being sent
 * to the client and are decrypted when retrieved from the user. To set sign key
 * used to generate a message authentication code use
 * `Phalcon\Http\Response\Cookies::setSignKey()`.
 *
 * ```php
 * use Phalcon\Di\Di;
 * use Phalcon\Encryption\Crypt;
 * use Phalcon\Http\Response\Cookies;
 *
 * $di = new Di();
 *
 * $di->set(
 *     'crypt',
 *     function () {
 *         $crypt = new Crypt();
 *
 *         // The `$key' should have been previously generated in a cryptographically safe way.
 *         $key = "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3";
 *
 *         $crypt->setKey($key);
 *
 *         return $crypt;
 *     }
 * );
 *
 * $di->set(
 *     'cookies',
 *     function () {
 *         $cookies = new Cookies();
 *
 *         // The `$key' MUST be at least 32 characters long and generated using a
 *         // cryptographically secure pseudo random generator.
 *         $key = "#1dj8$=dp?.ak//j1V$~%0XaK\xb1\x8d\xa9\x98\x054t7w!z%CF-Jk\x98\x05\\\x5c";
 *
 *         $cookies->setSignKey($key);
 *
 *         return $cookies;
 *     }
 * );
 * ```
 */
class Cookies extends AbstractInjectionAware implements \Phalcon\Http\Response\CookiesInterface
{
    /**
     * @var array
     */
    protected $cookies = [];

    /**
     * @var bool
     */
    protected $isSent = false;

    /**
     * @var bool
     */
    protected $registered = false;

    /**
     * The cookie's sign key.
     *
     * @var string|null
     */
    protected $signKey = null;

    /**
     * @var bool
     */
    protected $useEncryption = true;

    /**
     * Phalcon\Http\Response\Cookies constructor
     *
     * @param bool $useEncryption
     * @param string $signKey
     */
    public function __construct(bool $useEncryption = true, string $signKey = null)
    {
    }

    /**
     * Deletes a cookie by its name
     * This method does not removes cookies from the _COOKIE superglobal
     *
     * @param string $name
     * @return bool
     */
    public function delete(string $name): bool
    {
    }

    /**
     * Gets a cookie from the bag
     *
     * @param string $name
     * @return CookieInterface
     */
    public function get(string $name): CookieInterface
    {
    }

    /**
     * Gets all cookies from the bag
     *
     * @return array
     */
    public function getCookies(): array
    {
    }

    /**
     * Check if a cookie is defined in the bag or exists in the _COOKIE
     * superglobal
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Returns if the headers have already been sent
     *
     * @return bool
     */
    public function isSent(): bool
    {
    }

    /**
     * Returns if the bag is automatically encrypting/decrypting cookies
     *
     * @return bool
     */
    public function isUsingEncryption(): bool
    {
    }

    /**
     * Reset set cookies
     *
     * @return CookiesInterface
     */
    public function reset(): CookiesInterface
    {
    }

    /**
     * Sends the cookies to the client
     * Cookies aren't sent if headers are sent in the current request
     *
     * @return bool
     */
    public function send(): bool
    {
    }

    /**
     * Sets a cookie to be sent at the end of the request.
     *
     * This method overrides any cookie set before with the same name.
     *
     * ```php
     * use Phalcon\Http\Response\Cookies;
     *
     * $now = new DateTimeImmutable();
     * $tomorrow = $now->modify('tomorrow');
     *
     * $cookies = new Cookies();
     * $cookies->set(
     *     'remember-me',
     *     json_encode(['user_id' => 1]),
     *     (int) $tomorrow->format('U'),
     * );
     * ```
     *
     * @param string $name
     * @param mixed $value
     * @param int $expire
     * @param string $path
     * @param bool $secure
     * @param string $domain
     * @param bool $httpOnly
     * @param array $options
     * @return CookiesInterface
     */
    public function set(string $name, $value = null, int $expire = 0, string $path = '/', bool $secure = null, string $domain = null, bool $httpOnly = null, array $options = []): CookiesInterface
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
     * @see \Phalcon\Security\Random
     * @param string $signKey
     * @return CookiesInterface
     */
    public function setSignKey(string $signKey = null): CookiesInterface
    {
    }

    /**
     * Set if cookies in the bag must be automatically encrypted/decrypted
     *
     * @param bool $useEncryption
     * @return CookiesInterface
     */
    public function useEncryption(bool $useEncryption): CookiesInterface
    {
    }
}
