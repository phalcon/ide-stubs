<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Http;

use Phalcon\Di\AbstractInjectionAware;

/**
 * Provide OO wrappers to manage a HTTP cookie.
 */
class Cookie extends AbstractInjectionAware implements CookieInterface
{

    protected $domain;


    protected $expire;


    protected $filter;


    protected $httpOnly;


    protected $name;


    protected $path;


    protected $read = false;


    protected $restored = false;


    protected $secure;

    /**
     * The cookie's sign key.
     *
     * @var string|null
     */
    protected $signKey = null;


    protected $useEncryption = false;


    protected $value;


    /**
     * Phalcon\Http\Cookie constructor.
     *
     * @param string $name
     * @param mixed $value
     * @param int $expire
     * @param string $path
     * @param bool $secure
     * @param string $domain
     * @param bool $httpOnly
     */
    public function __construct(string $name, $value = null, int $expire = 0, string $path = '/', bool $secure = null, string $domain = null, bool $httpOnly = false)
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
     * Deletes the cookie by setting an expire time in the past
     */
    public function delete()
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
     * @return string
     */
    public function getExpiration(): string
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
     * @param mixed $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getValue($filters = null, $defaultValue = null)
    {
    }

    /**
     * Check if the cookie is using implicit encryption
     *
     * @return bool
     */
    public function isUsingEncryption(): bool
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
     * Sets the cookie's expiration time
     *
     * @param string $path
     * @return CookieInterface
     */
    public function setPath(string $path): CookieInterface
    {
    }

    /**
     * Sets if the cookie must only be sent when the connection is secure (HTTPS)
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
     * @see \Phalcon\Security\Random
     * @throws \Phalcon\Http\Cookie\Exception
     * @param string $signKey
     * @return CookieInterface
     */
    public function setSignKey(string $signKey = null): CookieInterface
    {
    }

    /**
     * Sets the cookie's value
     *
     * @param string $value
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
     */
    protected function assertSignKeyIsLongEnough(string $signKey)
    {
    }
}
