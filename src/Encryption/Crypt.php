<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption;

use Phalcon\Encryption\Crypt\CryptInterface;
use Phalcon\Encryption\Crypt\Exception\Exception;
use Phalcon\Encryption\Crypt\Exception\Mismatch;
use Phalcon\Encryption\Crypt\PadFactory;

/**
 * Provides encryption capabilities to Phalcon applications.
 *
 * ```php
 * use Phalcon\Crypt;
 *
 * $crypt = new Crypt();
 *
 * $crypt->setCipher("aes-256-ctr");
 *
 * $key  =
 * "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3";
 * $input = "The message to be encrypted";
 *
 * $encrypted = $crypt->encrypt($input, $key);
 *
 * echo $crypt->decrypt($encrypted, $key);
 * ```
 */
class Crypt implements \Phalcon\Encryption\Crypt\CryptInterface
{
    /**
     * Defaults
     */
    const DEFAULT_ALGORITHM = 'sha256';

    const DEFAULT_CIPHER = 'aes-256-cfb';

    /**
     * Padding
     */
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
    protected $authData = '';

    /**
     * @var string
     */
    protected $authTag = '';

    /**
     * @var int
     */
    protected $authTagLength = 16;

    /**
     * Available cipher methods.
     *
     * @var array
     */
    protected $availableCiphers = [];

    /**
     * @var string
     */
    protected $cipher = self::DEFAULT_CIPHER;

    /**
     * The name of hashing algorithm.
     *
     * @var string
     */
    protected $hashAlgorithm = self::DEFAULT_ALGORITHM;

    /**
     * The cipher iv length.
     *
     * @var int
     */
    protected $ivLength = 16;

    /**
     * @var string
     */
    protected $key = '';

    /**
     * @var int
     */
    protected $padding = 0;

    /**
     * @var PadFactory
     */
    protected $padFactory;

    /**
     * Whether calculating message digest enabled or not.
     *
     * @var bool
     */
    protected $useSigning = true;

    /**
     * Crypt constructor.
     *
     * @param string          $cipher
     * @param bool            $useSigning
     * @param PadFactory|null $padFactory
     *
     * @throws Exception
     */
    public function __construct(string $cipher = self::DEFAULT_CIPHER, bool $useSigning = true, \Phalcon\Encryption\Crypt\PadFactory $padFactory = null)
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
     * @param string      $input
     * @param string|null $key
     *
     * @return string
     * @throws Exception
     * @throws Mismatch
     */
    public function decrypt(string $input, string $key = null): string
    {
    }

    /**
     * Decrypt a text that is coded as a base64 string.
     *
     * @param string     $input
     * @param mixed|null $key
     * @param bool       $safe
     *
     * @return string
     * @throws Exception
     * @throws Mismatch
     */
    public function decryptBase64(string $input, string $key = null, bool $safe = false): string
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
     * @param string      $input
     * @param string|null $key
     *
     * @return string
     * @throws Exception
     */
    public function encrypt(string $input, string $key = null): string
    {
    }

    /**
     * Encrypts a text returning the result as a base64 string.
     *
     * @param string     $input
     * @param mixed|null $key
     * @param bool       $safe
     *
     * @return string
     * @throws Exception
     */
    public function encryptBase64(string $input, string $key = null, bool $safe = false): string
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
     * Returns the auth data
     *
     * @return string
     */
    public function getAuthData(): string
    {
    }

    /**
     * Returns the auth tag
     *
     * @return string
     */
    public function getAuthTag(): string
    {
    }

    /**
     * Returns the auth tag length
     *
     * @return int
     */
    public function getAuthTagLength(): int
    {
    }

    /**
     * Return a list of registered hashing algorithms suitable for hash_hmac.
     *
     * @return array
     */
    public function getAvailableHashAlgorithms(): array
    {
    }

    /**
     * Get the name of hashing algorithm.
     *
     * @return string
     */
    public function getHashAlgorithm(): string
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
     * Returns the encryption key
     *
     * @return string
     */
    public function getKey(): string
    {
    }

    /**
     * Returns if the input length for decryption is valid or not
     * (number of bytes required by the cipher).
     *
     * @param string $input
     *
     * @return bool
     */
    public function isValidDecryptLength(string $input): bool
    {
    }

    /**
     * @param string $data
     *
     * @return CryptInterface
     */
    public function setAuthData(string $data): CryptInterface
    {
    }

    /**
     * @param string $tag
     *
     * @return CryptInterface
     */
    public function setAuthTag(string $tag): CryptInterface
    {
    }

    /**
     * @param int $length
     *
     * @return CryptInterface
     */
    public function setAuthTagLength(int $length): CryptInterface
    {
    }

    /**
     * Sets the cipher algorithm for data encryption and decryption.
     *
     * @param string $cipher
     *
     * @return CryptInterface
     * @throws Exception
     */
    public function setCipher(string $cipher): CryptInterface
    {
    }

    /**
     * Sets the encryption key.
     *
     * The `$key` should have been previously generated in a cryptographically
     * safe way.
     *
     * Bad key:
     * "le password"
     *
     * Better (but still unsafe) ->
     * "#1dj8$=dp?.ak//j1V$~%0X"
     *
     * Good key:
     * "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     *
     * @param string $key
     *
     * @return CryptInterface
     */
    public function setKey(string $key): CryptInterface
    {
    }

    /**
     * Set the name of hashing algorithm.
     *
     * @param string $hashAlgorithm
     *
     * @return CryptInterface
     * @throws Exception
     */
    public function setHashAlgorithm(string $hashAlgorithm): CryptInterface
    {
    }

    /**
     * Changes the padding scheme used.
     *
     * @param int $scheme
     *
     * @return CryptInterface
     */
    public function setPadding(int $scheme): CryptInterface
    {
    }

    /**
     * Sets if the calculating message digest must used.
     *
     * @param bool $useSigning
     *
     * @return CryptInterface
     */
    public function useSigning(bool $useSigning): CryptInterface
    {
    }

    /**
     * Checks if a cipher or a hash algorithm is available
     *
     * @param string $cipher
     * @param string $type
     *
     * @throws Exception
     * @return void
     */
    protected function checkCipherHashIsAvailable(string $cipher, string $type): void
    {
    }

    /**
     * Pads texts before encryption. See
     * [cryptopad](https://www.di-mgt.com.au/cryptopad.html)
     *
     * @param string $input
     * @param string $mode
     * @param int    $blockSize
     * @param int    $paddingType
     *
     * @return string
     * @throws Exception
     */
    protected function cryptPadText(string $input, string $mode, int $blockSize, int $paddingType): string
    {
    }

    /**
     * Removes a padding from a text.
     *
     * If the function detects that the text was not padded, it will return it
     * unmodified.
     *
     * @param string $input
     * @param string $mode
     * @param int    $blockSize
     * @param int    $paddingType
     *
     * @return string
     * @throws Exception
     */
    protected function cryptUnpadText(string $input, string $mode, int $blockSize, int $paddingType): string
    {
    }

    /**
     * @param string $mode
     * @param int    $blockSize
     * @param string $decrypted
     *
     * @return string
     */
    protected function decryptGetUnpadded(string $mode, int $blockSize, string $decrypted): string
    {
    }

    /**
     * @param string $mode
     * @param string $cipherText
     * @param string $decryptKey
     * @param string $iv
     *
     * @return string
     * @throws Exception
     */
    protected function decryptGcmCcmAuth(string $mode, string $cipherText, string $decryptKey, string $iv): string
    {
    }

    /**
     * @param string $mode
     * @param string $input
     * @param int    $blockSize
     *
     * @return string
     * @throws Exception
     */
    protected function encryptGetPadded(string $mode, string $input, int $blockSize): string
    {
    }

    /**
     * @param string $mode
     * @param string $padded
     * @param string $encryptKey
     * @param string $iv
     *
     * @return string
     * @throws Exception
     */
    protected function encryptGcmCcm(string $mode, string $padded, string $encryptKey, string $iv): string
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @return Crypt
     * @throws Exception
     */
    protected function initializeAvailableCiphers(): Crypt
    {
    }

    /**
     * Checks if a mode (string) is in the values to compare (modes array)
     *
     * @param array  $modes
     * @param string $mode
     *
     * @return bool
     */
    private function checkIsMode(array $modes, string $mode): bool
    {
    }

    /**
     * Returns the block size
     *
     * @param string $mode
     *
     * @return int
     * @throws Exception
     */
    private function getBlockSize(string $mode): int
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @param string $cipher
     *
     * @return int
     * @throws Exception
     */
    private function getIvLength(string $cipher): int
    {
    }

    /**
     * Returns the mode (last few characters of the cipher)
     *
     * @return string
     */
    private function getMode(): string
    {
    }

    /**
     * @todo to be removed when we get traits
     * @param string $name
     * @return bool
     */
    protected function phpFunctionExists(string $name): bool
    {
    }

    /**
     * @param string $cipher
     * @return int|bool
     */
    protected function phpOpensslCipherIvLength(string $cipher): int|bool
    {
    }

    /**
     * @param int $length
     */
    protected function phpOpensslRandomPseudoBytes(int $length)
    {
    }
}
