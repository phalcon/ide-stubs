<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT;

use DateTimeImmutable;
use Phalcon\Encryption\Security\JWT\Exceptions\InvalidAudienceType;
use Phalcon\Encryption\Security\JWT\Exceptions\ValidatorException;
use Phalcon\Encryption\Security\JWT\Signer\SignerInterface;
use Phalcon\Encryption\Security\JWT\Token\Enum;
use Phalcon\Encryption\Security\JWT\Token\Token;
use Phalcon\Time\Clock\ClockInterface;

/**
 * Class Validator
 */
class Validator
{
    /**
     * @var array
     */
    private $claims = [];

    /**
     * @var array
     */
    private $errors = [];

    /**
     * @var int
     */
    private $timeShift = 0;

    /**
     * @var Token
     */
    private $token;

    /**
     * Validator constructor.
     *
     * @param Token               $token
     * @param int                 $timeShift Legacy clock-skew offset in seconds
     *                                       added to validated timestamps.
     *                                       Prefer injecting a ClockInterface
     *                                       for testable time; retained for BC.
     * @param ClockInterface|null $clock     Clock used to read "now" at
     *                                       construction. Defaults to the
     *                                       system wall clock (time()).
     */
    public function __construct(\Phalcon\Encryption\Security\JWT\Token\Token $token, int $timeShift = 0, ?\Phalcon\Time\Clock\ClockInterface $clock = null)
    {
    }

    /**
     * Return an array with validation errors (if any)
     *
     * @return array
     */
    public function getErrors(): array
    {
    }

    /**
     * Return the value of a claim
     *
     * @param string $claim
     *
     * @return mixed
     */
    public function get(string $claim): mixed
    {
    }

    /**
     * Set the value of a claim, for comparison with the token values
     *
     * @param string $claim
     * @param mixed  $value
     *
     * @return static
     */
    public function set(string $claim, $value): static
    {
    }

    /**
     * Set the token to be validated
     *
     * @param Token $token
     *
     * @return static
     */
    public function setToken(\Phalcon\Encryption\Security\JWT\Token\Token $token): static
    {
    }

    /**
     * Validate a claim
     *
     * @param string          $name
     * @param bool|int|string $value
     *
     * @return static
     */
    public function validateClaim(string $name, $value): static
    {
    }

    /**
     * Validate the audience
     *
     * @param string|array $audience
     *
     * @return static
     * @throws ValidatorException
     */
    public function validateAudience($audience): static
    {
    }

    /**
     * Validate the expiration time of the token
     *
     * @param int $timestamp
     *
     * @return static
     */
    public function validateExpiration(int $timestamp): static
    {
    }

    /**
     * Validate the id of the token
     *
     * A null id expresses no expectation and is skipped.
     *
     * @param string|null $id
     *
     * @return static
     */
    public function validateId(?string $id = null): static
    {
    }

    /**
     * Validate the issued at (iat) of the token
     *
     * A token issued at exactly $timestamp is valid. Only a token issued after
     * it, i.e. in the future, is rejected.
     *
     * @param int $timestamp
     *
     * @return static
     */
    public function validateIssuedAt(int $timestamp): static
    {
    }

    /**
     * Validate the issuer of the token
     *
     * A null issuer expresses no expectation and is skipped.
     *
     * @param string|null $issuer
     *
     * @return static
     */
    public function validateIssuer(?string $issuer = null): static
    {
    }

    /**
     * Validate the notbefore (nbf) of the token
     *
     * A token is valid at exactly $timestamp. Only a timestamp before the
     * "nbf" claim is rejected.
     *
     * @param int $timestamp
     *
     * @return static
     */
    public function validateNotBefore(int $timestamp): static
    {
    }

    /**
     * Validate the signature of the token
     *
     * @param SignerInterface $signer
     * @param string          $passphrase
     *
     * @return static
     */
    public function validateSignature(\Phalcon\Encryption\Security\JWT\Signer\SignerInterface $signer, string $passphrase): static
    {
    }

    /**
     * Validate the subject of the token
     *
     * A null subject expresses no expectation and is skipped.
     *
     * @param string|null $subject
     *
     * @return static
     */
    public function validateSubject(?string $subject = null): static
    {
    }

    /**
     * @param int $timestamp
     *
     * @return int
     */
    private function getTimestamp(int $timestamp): int
    {
    }
}
