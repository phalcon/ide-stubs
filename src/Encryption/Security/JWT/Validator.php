<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT;

use Phalcon\Encryption\Security\JWT\Exceptions\InvalidAudienceType;
use Phalcon\Encryption\Security\JWT\Exceptions\ValidatorException;
use Phalcon\Encryption\Security\JWT\Signer\SignerInterface;
use Phalcon\Encryption\Security\JWT\Token\Enum;
use Phalcon\Encryption\Security\JWT\Token\Token;

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
     * @param Token $token
     * @param int   $timeShift
     */
    public function __construct(\Phalcon\Encryption\Security\JWT\Token\Token $token, int $timeShift = 0)
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
     * @throws ValidatorException
     */
    public function validateExpiration(int $timestamp): static
    {
    }

    /**
     * Validate the id of the token
     *
     * @param string $id
     *
     * @return static
     * @throws ValidatorException
     */
    public function validateId(string $id): static
    {
    }

    /**
     * Validate the issued at (iat) of the token
     *
     * @param int $timestamp
     *
     * @return static
     * @throws ValidatorException
     */
    public function validateIssuedAt(int $timestamp): static
    {
    }

    /**
     * Validate the issuer of the token
     *
     * @param string $issuer
     *
     * @return static
     * @throws ValidatorException
     */
    public function validateIssuer(string $issuer): static
    {
    }

    /**
     * Validate the notbefore (nbf) of the token
     *
     * @param int $timestamp
     *
     * @return static
     * @throws ValidatorException
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
     * @throws ValidatorException
     */
    public function validateSignature(\Phalcon\Encryption\Security\JWT\Signer\SignerInterface $signer, string $passphrase): static
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
