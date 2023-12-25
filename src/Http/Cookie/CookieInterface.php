<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Cookie;

/**
 * Interface for Phalcon\Http\Cookie
 */
interface CookieInterface
{
    /**
     * Deletes the cookie
     */
    public function delete();

    /**
     * Returns the domain that the cookie is available to
     *
     * @return string
     */
    public function getDomain(): string;

    /**
     * Returns the current expiration time
     *
     * @return string
     */
    public function getExpiration(): string;

    /**
     * Returns if the cookie is accessible only through the HTTP protocol
     *
     * @return bool
     */
    public function getHttpOnly(): bool;

    /**
     * Returns the current cookie's name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns the current cookie's options
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Returns the current cookie's path
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Returns whether the cookie must only be sent when the connection is
     * secure (HTTPS)
     *
     * @return bool
     */
    public function getSecure(): bool;

    /**
     * Returns the cookie's value.
     *
     * @param mixed $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getValue($filters = null, $defaultValue = null): mixed;

    /**
     * Check if the cookie is using implicit encryption
     *
     * @return bool
     */
    public function isUsingEncryption(): bool;

    /**
     * Sends the cookie to the HTTP client
     *
     * @return CookieInterface
     */
    public function send(): CookieInterface;

    /**
     * Sets the domain that the cookie is available to
     *
     * @param string $domain
     * @return CookieInterface
     */
    public function setDomain(string $domain): CookieInterface;

    /**
     * Sets the cookie's expiration time
     *
     * @param int $expire
     * @return CookieInterface
     */
    public function setExpiration(int $expire): CookieInterface;

    /**
     * Sets if the cookie is accessible only through the HTTP protocol
     *
     * @param bool $httpOnly
     * @return CookieInterface
     */
    public function setHttpOnly(bool $httpOnly): CookieInterface;

    /**
     * Sets the cookie's options
     *
     * @param array $options
     * @return CookieInterface
     */
    public function setOptions(array $options): CookieInterface;

    /**
     * Sets the cookie's expiration time
     *
     * @param string $path
     * @return CookieInterface
     */
    public function setPath(string $path): CookieInterface;

    /**
     * Sets if the cookie must only be sent when the connection is secure
     * (HTTPS)
     *
     * @param bool $secure
     * @return CookieInterface
     */
    public function setSecure(bool $secure): CookieInterface;

    /**
     * Sets the cookie's value
     *
     * @param string $value
     * @return CookieInterface
     */
    public function setValue($value): CookieInterface;

    /**
     * Sets if the cookie must be encrypted/decrypted automatically
     *
     * @param bool $useEncryption
     * @return CookieInterface
     */
    public function useEncryption(bool $useEncryption): CookieInterface;
}
