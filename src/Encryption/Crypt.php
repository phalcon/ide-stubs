<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption;

use Phalcon\Contracts\Encryption\EncryptionTypes;
use Phalcon\Encryption\Crypt\CryptInterface;
use Phalcon\Encryption\Crypt\Exception\DecryptionFailed;
use Phalcon\Encryption\Crypt\Exception\EmptyDecryptionKey;
use Phalcon\Encryption\Crypt\Exception\EmptyEncryptionKey;
use Phalcon\Encryption\Crypt\Exception\EncryptionFailed;
use Phalcon\Encryption\Crypt\Exception\Exception;
use Phalcon\Encryption\Crypt\Exception\InvalidAuthTagLength;
use Phalcon\Encryption\Crypt\Exception\InvalidDecryptLength;
use Phalcon\Encryption\Crypt\Exception\InvalidPaddingSize;
use Phalcon\Encryption\Crypt\Exception\IvLengthCalculationFailed;
use Phalcon\Encryption\Crypt\Exception\Mismatch;
use Phalcon\Encryption\Crypt\Exception\MissingAuthData;
use Phalcon\Encryption\Crypt\Exception\MissingOpensslExtension;
use Phalcon\Encryption\Crypt\Exception\RandomBytesGenerationFailed;
use Phalcon\Encryption\Crypt\Exception\UnsupportedAlgorithm;
use Phalcon\Encryption\Crypt\PadFactory;
use Phalcon\Traits\Php\Base64Trait;
use Phalcon\Traits\Php\HashTrait;
use Phalcon\Traits\Php\InfoTrait;
use Phalcon\Traits\Php\OpensslTrait;
use Throwable;

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
 *
 * @phpstan-import-type encryption_cipher_list from EncryptionTypes
 * @phpstan-import-type encryption_hash_algorithms from EncryptionTypes
 * @phpstan-import-type encryption_hash_length_cache from EncryptionTypes
 */
class Crypt implements \Phalcon\Encryption\Crypt\CryptInterface
{
    use \Phalcon\Traits\Php\Base64Trait;
    use \Phalcon\Traits\Php\HashTrait;
    use \Phalcon\Traits\Php\InfoTrait;
    use \Phalcon\Traits\Php\OpensslTrait;

    /**
     * @var string
     */
    const DEFAULT_ALGORITHM = 'sha256';

    /**
     * @var string
     */
    const DEFAULT_CIPHER = 'aes-256-cfb';

    /**
     * Padding
     *
     * @var int
     */
    const PADDING_ANSI_X_923 = 1;

    /**
     * @var int
     */
    const PADDING_DEFAULT = 0;

    /**
     * @var int
     */
    const PADDING_ISO_10126 = 3;

    /**
     * @var int
     */
    const PADDING_ISO_IEC_7816_4 = 4;

    /**
     * @var int
     */
    const PADDING_PKCS7 = 2;

    /**
     * @var int
     */
    const PADDING_SPACE = 6;

    /**
     * @var int
     */
    const PADDING_ZERO = 5;

    protected string $authData = '';

    protected string $authTag = '';

    protected int $authTagLength = 16;

    /**
     * Available cipher methods.
     *
     * @phpstan-var encryption_cipher_list
     */
    protected array $availableCiphers = [];

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
     * Memoized `strlen(hash($algo, "", true))` results, keyed by
     * algorithm name. The hash output length is deterministic for a
     * given algorithm, so this collapses the per-decrypt strlen+hash
     * call to a single hash lookup after warm-up.
     *
     * @phpstan-var encryption_hash_length_cache
     */
    protected array $hashLengthCache = [];

    /**
     * The cipher iv length.
     */
    protected int $ivLength = 16;

    protected string $key = '';

    protected int $padding = 0;

    protected \Phalcon\Encryption\Crypt\PadFactory $padFactory;

    /**
     * Whether calculating message digest enabled or not.
     */
    protected bool $useSigning = true;

    /**
     * Crypt constructor.
     *
     * @throws Exception
     * @param string $cipher
     * @param bool $useSigning
     * @param \Phalcon\Encryption\Crypt\PadFactory|null $padFactory
     */
    public function __construct(string $cipher = self::DEFAULT_CIPHER, bool $useSigning = true, ?\Phalcon\Encryption\Crypt\PadFactory $padFactory = null)
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
     * @throws Exception
     * @throws InvalidDecryptLength
     * @throws Mismatch
     * @param string $input
     * @param string|null $key
     * @return string
     */
    public function decrypt(string $input, ?string $key = null): string
    {
    }

    /**
     * Decrypt a text that is coded as a base64 string.
     *
     * @throws Exception
     * @throws Mismatch
     * @param string $input
     * @param string|null $key
     * @param bool $safe
     * @return string
     */
    public function decryptBase64(string $input, ?string $key = null, bool $safe = false): string
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
     * @throws Exception
     * @param string $input
     * @param string|null $key
     * @return string
     */
    public function encrypt(string $input, ?string $key = null): string
    {
    }

    /**
     * Encrypts a text returning the result as a base64 string.
     *
     * @throws Exception
     * @param string $input
     * @param string|null $key
     * @param bool $safe
     * @return string
     */
    public function encryptBase64(string $input, ?string $key = null, bool $safe = false): string
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
     * Returns a list of available ciphers.
     *
     * @phpstan-return encryption_cipher_list
     * @return array
     */
    public function getAvailableCiphers(): array
    {
    }

    /**
     * Return a list of registered hashing algorithms suitable for hash_hmac.
     *
     * @phpstan-return encryption_hash_algorithms
     * @return array
     */
    public function getAvailableHashAlgorithms(): array
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
    public function getHashAlgorithm(): string
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
     * @return bool
     */
    public function isValidDecryptLength(string $input): bool
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
     * @param string $tag
     * @return CryptInterface
     */
    public function setAuthTag(string $tag): CryptInterface
    {
    }

    /**
     * @throws InvalidAuthTagLength
     * @param int $length
     * @return CryptInterface
     */
    public function setAuthTagLength(int $length): CryptInterface
    {
    }

    /**
     * Sets the cipher algorithm for data encryption and decryption.
     *
     * @throws Exception
     * @param string $cipher
     * @return CryptInterface
     */
    public function setCipher(string $cipher): CryptInterface
    {
    }

    /**
     * Set the name of hashing algorithm.
     *
     * @throws Exception
     * @param string $hashAlgorithm
     * @return static
     */
    public function setHashAlgorithm(string $hashAlgorithm): static
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
     * Checks if a cipher or a hash algorithm is available
     *
     * @throws Exception
     * @param string $cipher
     * @param string $type
     * @return void
     */
    protected function checkCipherHashIsAvailable(string $cipher, string $type): void
    {
    }

    /**
     * Pads texts before encryption. See
     * [cryptopad](https://www.di-mgt.com.au/cryptopad.html)
     *
     * @throws Exception
     * @param string $input
     * @param string $mode
     * @param int $blockSize
     * @param int $paddingType
     * @return string
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
     * @throws Exception
     * @param string $input
     * @param string $mode
     * @param int $blockSize
     * @param int $paddingType
     * @return string
     */
    protected function cryptUnpadText(string $input, string $mode, int $blockSize, int $paddingType): string
    {
    }

    /**
     * @throws Exception
     * @param string $mode
     * @param string $cipherText
     * @param string $decryptKey
     * @param string $iv
     * @return string
     */
    protected function decryptGcmCcmAuth(string $mode, string $cipherText, string $decryptKey, string $iv): string
    {
    }

    /**
     * @param string $mode
     * @param int $blockSize
     * @param string $decrypted
     * @return string
     */
    protected function decryptGetUnpadded(string $mode, int $blockSize, string $decrypted): string
    {
    }

    /**
     * @throws Exception
     * @param string $mode
     * @param string $padded
     * @param string $encryptKey
     * @param string $iv
     * @return string
     */
    protected function encryptGcmCcm(string $mode, string $padded, string $encryptKey, string $iv): string
    {
    }

    /**
     * @throws Exception
     * @param string $mode
     * @param string $input
     * @param int $blockSize
     * @return string
     */
    protected function encryptGetPadded(string $mode, string $input, int $blockSize): string
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @throws Exception
     * @return static
     */
    protected function initializeAvailableCiphers(): static
    {
    }

    /**
     * Checks if a mode (string) is in the values to compare (modes array)
     *
     * @phpstan-param encryption_cipher_list $modes
     * @param array $modes
     * @param string $mode
     * @return bool
     */
    private function checkIsMode(array $modes, string $mode): bool
    {
    }

    /**
     * Returns the block size
     *
     * @throws Exception
     * @param string $mode
     * @return int
     */
    private function getBlockSize(string $mode): int
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @throws Exception
     * @param string $cipher
     * @return int
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
}
