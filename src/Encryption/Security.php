<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption;

use Phalcon\Contracts\Encryption\Security\Security as SecurityContract;
use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Http\RequestInterface;
use Phalcon\Encryption\Security\Exception;
use Phalcon\Encryption\Security\Exceptions\UnknownHashAlgorithm;
use Phalcon\Encryption\Security\Random;
use Phalcon\Session\ManagerInterface as SessionInterface;

/**
 * This component provides a set of functions to improve the security in Phalcon
 * applications
 *
 * ```php
 * $login    = $this->request->getPost("login");
 * $password = $this->request->getPost("password");
 *
 * $user = Users::findFirstByLogin($login);
 *
 * if ($user) {
 *     if ($this->security->checkHash($password, $user->password)) {
 *         // The password is valid
 *     }
 * }
 * ```
 */
class Security extends AbstractInjectionAware implements SecurityContract
{
    /**
     * @var int
     */
    const int CRYPT_ARGON2I = 10;

    /**
     * @var int
     */
    const int CRYPT_ARGON2ID = 11;

    /**
     * @var int
     */
    const int CRYPT_BCRYPT = 0;

    /**
     * @var int
     */
    const int CRYPT_DEFAULT = 0;

    /**
     * @deprecated Not implemented; resolves to bcrypt. To be removed.
     *
     * @var int
     */
    const int CRYPT_BLOWFISH = 4;

    /**
     * @var int
     */
    const int CRYPT_BLOWFISH_A = 5;

    /**
     * @var int
     */
    const int CRYPT_BLOWFISH_X = 6;

    /**
     * @deprecated Not implemented; resolves to bcrypt. To be removed.
     *
     * @var int
     */
    const int CRYPT_BLOWFISH_Y = 7;

    /**
     * @deprecated Not implemented; resolves to bcrypt. To be removed.
     *
     * @var int
     */
    const int CRYPT_EXT_DES = 2;

    /**
     * @deprecated Weak legacy algorithm. To be removed.
     *
     * @var int
     */
    const int CRYPT_MD5 = 3;

    /**
     * @var int
     */
    const int CRYPT_SHA256 = 8;

    /**
     * @var int
     */
    const int CRYPT_SHA512 = 9;

    /**
     * @deprecated Not implemented; resolves to bcrypt. To be removed.
     *
     * @var int
     */
    const int CRYPT_STD_DES = 1;

    /**
     * @var bool
     */
    protected $autoRefresh = true;

    /**
     * @var int
     */
    protected $defaultHash = self::CRYPT_DEFAULT;

    /**
     * @var int
     */
    protected $numberBytes = 16;

    /**
     * @var Random
     */
    protected $random;

    /**
     * @var string|null
     */
    protected $requestToken = null;

    /**
     * @var string|null
     */
    protected $token = null;

    /**
     * @var string|null
     */
    protected $tokenKey = null;

    /**
     * @var string
     */
    protected $tokenKeySessionId = '$PHALCON/CSRF/KEY$';

    /**
     * @var string
     */
    protected $tokenValueSessionId = '$PHALCON/CSRF$';

    /**
     * @var int
     */
    protected $workFactor = 10;

    /**
     * @var SessionInterface|null
     */
    private $localSession = null;

    /**
     * @var RequestInterface|null
     */
    private $localRequest = null;

    /**
     * Security constructor.
     *
     * @param SessionInterface|null $session
     * @param RequestInterface|null $request
     */
    public function __construct(?\Phalcon\Session\ManagerInterface $session = null, ?\Phalcon\Http\RequestInterface $request = null)
    {
    }

    /**
     * Checks a plain text password and its hash version to check if the
     * password matches
     *
     * @param string $password
     * @param string $passwordHash
     * @param int    $maxPassLength
     *
     * @return bool
     */
    public function checkHash(string $password, string $passwordHash, int $maxPassLength = 0): bool
    {
    }

    /**
     * Check if the CSRF token sent in the request is the same that the current
     * in session
     *
     * @param string|null $tokenKey
     * @param mixed|null  $tokenValue
     * @param bool        $destroyIfValid
     *
     * @return bool
     */
    public function checkToken(?string $tokenKey = null, $tokenValue = null, bool $destroyIfValid = true): bool
    {
    }

    /**
     * Computes a HMAC
     *
     * @param string $data
     * @param string $key
     * @param string $algo
     * @param bool   $raw
     *
     * @return string
     * @throws Exception
     * @param string $algorithm
     */
    public function computeHmac(string $data, string $key, string $algorithm, bool $raw = false): string
    {
    }

    /**
     * Removes the value of the CSRF token and key from session
     *
     * @return static
     */
    public function destroyToken(): static
    {
    }

    /**
     * Returns the default hash
     *
     * @return int
     */
    public function getDefaultHash(): int
    {
    }

    /**
     * Returns information regarding a hash
     *
     * @param string $hash
     *
     * @return array
     */
    public function getHashInformation(string $hash): array
    {
    }

    /**
     * Returns a secure random number generator instance
     *
     * @return Random
     */
    public function getRandom(): Random
    {
    }

    /**
     * Returns a number of bytes to be generated by the openssl pseudo random
     * generator
     *
     * @return int
     */
    public function getRandomBytes(): int
    {
    }

    /**
     * Returns the value of the CSRF token for the current request.
     *
     * @return string|null
     */
    public function getRequestToken(): string|null
    {
    }

    /**
     * Returns the value of the CSRF token in session
     *
     * @return string|null
     */
    public function getSessionToken(): string|null
    {
    }

    /**
     * Generate a >22-length pseudo random string to be used as salt for
     * passwords
     *
     * @param int $numberBytes
     *
     * @return string
     * @throws Exception
     */
    public function getSaltBytes(int $numberBytes = 0): string
    {
    }

    /**
     * Generates a pseudo random token value to be used as input's value in a
     * CSRF check
     *
     * @return string
     * @throws Exception
     */
    public function getToken(): string|null
    {
    }

    /**
     * Generates a pseudo random token key to be used as input's name in a CSRF
     * check
     *
     * @return string|null
     * @throws Exception
     */
    public function getTokenKey(): string|null
    {
    }

    /**
     * @return int
     */
    public function getWorkFactor(): int
    {
    }

    /**
     * Creates a password hash using bcrypt with a pseudo random salt
     *
     * Any `defaultHash` value that is not explicitly handled (including the
     * deprecated, unimplemented constants) resolves to bcrypt.
     *
     * @param string $password
     * @param array  $options
     *
     * @return string
     */
    public function hash(string $password, array $options = []): string
    {
    }

    /**
     * Checks if a password hash is a valid bcrypt's hash
     *
     * @param string $passwordHash
     *
     * @return bool
     */
    public function isLegacyHash(string $passwordHash): bool
    {
    }

    /**
     * Forces the regeneration of the CSRF token and key, writing the new
     * values to the session even when auto-refresh has been disabled. Useful
     * after a successful login or any other state change where rotating the
     * token is appropriate.
     *
     * @return static
     */
    public function refreshToken(): static
    {
    }

    /**
     * Toggles automatic regeneration of the CSRF token on every call to
     * `getToken()` / `getTokenKey()`. When set to `false`, existing session
     * values are reused (no session write), and a new token is only minted
     * when none is present or `refreshToken()` is called explicitly.
     *
     * @param bool $autoRefresh
     *
     * @return static
     */
    public function setAutoRefresh(bool $autoRefresh): static
    {
    }

    /**
     * Sets the default hash
     *
     * @param int $defaultHash
     *
     * @return static
     */
    public function setDefaultHash(int $defaultHash): static
    {
    }

    /**
     * Sets a number of bytes to be generated by the openssl pseudo random
     * generator
     *
     * @param int $randomBytes
     *
     * @return static
     */
    public function setRandomBytes(int $randomBytes): static
    {
    }

    /**
     * Sets the work factor
     *
     * @param int $workFactor
     *
     * @return static
     */
    public function setWorkFactor(int $workFactor): static
    {
    }

    /**
     * @param string $name
     * @param string $property
     *
     * @return RequestInterface|SessionInterface|null
     */
    protected function getLocalService(string $name, string $property)
    {
    }

    /**
     * Checks the algorithm for `password_hash`. If it is argon based, it
     * returns the relevant constant
     *
     * @return string
     */
    private function processAlgorithm(): string
    {
    }

    /**
     * We check if the algorithm is Argon based. If yes, options are set for
     * `password_hash` such as `memory_cost`, `time_cost` and `threads`
     *
     * @param array $options
     *
     * @return array
     */
    private function processArgonOptions(array $options): array
    {
    }

    /**
     * Checks the options array for `cost`. If not defined it is set to 10.
     * It also checks the cost if it is between 4 and 31
     *
     * @param array $options
     *
     * @return int
     */
    private function processCost(array $options = []): int
    {
    }

    /**
     * @param string|null $tokenKey
     *
     * @return string|null
     */
    private function processTokenKey(?string $tokenKey = null): string|null
    {
    }

    /**
     * @param string      $tokenKey
     * @param string|null $tokenValue
     *
     * @return string|null
     */
    private function processUserToken(string $tokenKey, ?string $tokenValue = null): string|null
    {
    }
}
