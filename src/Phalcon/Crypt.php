<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Phalcon\Crypt\CryptInterface;

/**
 * Provides encryption capabilities to Phalcon applications.
 *
 * ```php
 * use Phalcon\Crypt;
 *
 * $crypt = new Crypt();
 *
 * $crypt->setCipher('aes-256-ctr');
 *
 * $key  = "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3";
 * $text = "The message to be encrypted";
 *
 * $encrypted = $crypt->encrypt($text, $key);
 *
 * echo $crypt->decrypt($encrypted, $key);
 * ```
 */
class Crypt implements \Phalcon\Crypt\CryptInterface
{

    const PADDING_ANSI_X_923 = 1;


    const PADDING_DEFAULT = 0;


    const PADDING_ISO_10126 = 3;


    const PADDING_ISO_IEC_7816_4 = 4;


    const PADDING_PKCS7 = 2;


    const PADDING_SPACE = 6;


    const PADDING_ZERO = 5;

    /**
     * @var string
     */
    protected $authTag;

    /**
     * @var string
     */
    protected $authData = '';

    /**
     * @var int
     */
    protected $authTagLength = 16;

    /**
     * @var string
     */
    protected $key = '';

    /**
     * @var int
     */
    protected $padding = 0;

    /**
     * @var string
     */
    protected $cipher = 'aes-256-cfb';

    /**
     * Available cipher methods.
     *
     * @var array
     */
    protected $availableCiphers;

    /**
     * The cipher iv length.
     *
     * @var int
     */
    protected $ivLength = 16;

    /**
     * The name of hashing algorithm.
     *
     * @var string
     */
    protected $hashAlgo = 'sha256';

    /**
     * Whether calculating message digest enabled or not.
     *
     * @var bool
     */
    protected $useSigning = true;


    /**
     * @return string
     */
    public function getAuthTag(): string
    {
    }

    /**
     * @return string
     */
    public function getAuthData(): string
    {
    }

    /**
     * @return int
     */
    public function getAuthTagLength(): int
    {
    }

    /**
     * Phalcon\Crypt constructor.
     *
     * @param string $cipher
     * @param bool $useSigning
     */
    public function __construct(string $cipher = 'aes-256-cfb', bool $useSigning = false)
    {
    }

    /**
     * Decrypts an encrypted text.
     *
     * ```php
     * $encrypted = $crypt->decrypt(
     *     $encrypted,
     *     "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     * );
     * ```
     *
     * @param string $text
     * @param string $key
     * @return string
     */
    public function decrypt(string $text, string $key = null): string
    {
    }

    /**
     * Decrypt a text that is coded as a base64 string.
     *
     * @throws \Phalcon\Crypt\Mismatch
     * @param string $text
     * @param mixed $key
     * @param bool $safe
     * @return string
     */
    public function decryptBase64(string $text, $key = null, bool $safe = false): string
    {
    }

    /**
     * Encrypts a text.
     *
     * ```php
     * $encrypted = $crypt->encrypt(
     *     "Top secret",
     *     "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     * );
     * ```
     *
     * @param string $text
     * @param string $key
     * @return string
     */
    public function encrypt(string $text, string $key = null): string
    {
    }

    /**
     * Encrypts a text returning the result as a base64 string.
     *
     * @param string $text
     * @param mixed $key
     * @param bool $safe
     * @return string
     */
    public function encryptBase64(string $text, $key = null, bool $safe = false): string
    {
    }

    /**
     * Returns a list of available ciphers.
     *
     * @return array
     */
    public function getAvailableCiphers(): array
    {
    }

    /**
     * Return a list of registered hashing algorithms suitable for hash_hmac.
     *
     * @return array
     */
    public function getAvailableHashAlgos(): array
    {
    }

    /**
     * Returns the current cipher
     *
     * @return string
     */
    public function getCipher(): string
    {
    }

    /**
     * Get the name of hashing algorithm.
     *
     * @return string
     */
    public function getHashAlgo(): string
    {
    }

    /**
     * Returns the encryption key
     *
     * @return string
     */
    public function getKey(): string
    {
    }

    /**
     * @param string $tag
     * @return CryptInterface
     */
    public function setAuthTag(string $tag): CryptInterface
    {
    }

    /**
     * @param string $data
     * @return CryptInterface
     */
    public function setAuthData(string $data): CryptInterface
    {
    }

    /**
     * @param int $length
     * @return CryptInterface
     */
    public function setAuthTagLength(int $length): CryptInterface
    {
    }

    /**
     * Sets the cipher algorithm for data encryption and decryption.
     *
     * The `aes-256-gcm' is the preferable cipher, but it is not usable
     * until the openssl library is upgraded, which is available in PHP 7.1.
     *
     * The `aes-256-ctr' is arguably the best choice for cipher
     * algorithm for current openssl library version.
     *
     * @param string $cipher
     * @return CryptInterface
     */
    public function setCipher(string $cipher): CryptInterface
    {
    }

    /**
     * Set the name of hashing algorithm.
     *
     * @throws \Phalcon\Crypt\Exception
     * @param string $hashAlgo
     * @return CryptInterface
     */
    public function setHashAlgo(string $hashAlgo): CryptInterface
    {
    }

    /**
     * Sets the encryption key.
     *
     * The `$key' should have been previously generated in a cryptographically
     * safe way.
     *
     * Bad key:
     * "le password"
     *
     * Better (but still unsafe):
     * "#1dj8$=dp?.ak//j1V$~%0X"
     *
     * Good key:
     * "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     *
     * @param string $key
     * @return CryptInterface
     */
    public function setKey(string $key): CryptInterface
    {
    }

    /**
     * Changes the padding scheme used.
     *
     * @param int $scheme
     * @return CryptInterface
     */
    public function setPadding(int $scheme): CryptInterface
    {
    }

    /**
     * Sets if the calculating message digest must used.
     *
     * @param bool $useSigning
     * @return CryptInterface
     */
    public function useSigning(bool $useSigning): CryptInterface
    {
    }

    /**
     * Assert the cipher is available.
     *
     * @param string $cipher
     * @return void
     */
    protected function assertCipherIsAvailable(string $cipher)
    {
    }

    /**
     * Assert the hash algorithm is available.
     *
     * @param string $hashAlgo
     * @return void
     */
    protected function assertHashAlgorithmAvailable(string $hashAlgo)
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @param string $cipher
     * @return int
     */
    protected function getIvLength(string $cipher): int
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @return void
     */
    protected function initializeAvailableCiphers()
    {
    }

    /**
     * Pads texts before encryption. See [cryptopad](http://www.di-mgt.com.au/cryptopad.html)
     *
     * @param string $text
     * @param string $mode
     * @param int $blockSize
     * @param int $paddingType
     * @return string
     */
    protected function cryptPadText(string $text, string $mode, int $blockSize, int $paddingType): string
    {
    }

    /**
     * Removes a padding from a text.
     *
     * If the function detects that the text was not padded, it will return it
     * unmodified.
     *
     * @param string $text
     * @param string $mode
     * @param int $blockSize
     * @param int $paddingType
     */
    protected function cryptUnpadText(string $text, string $mode, int $blockSize, int $paddingType)
    {
    }
}
