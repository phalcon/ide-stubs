<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT;

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
     * @return Validator
     */
    public function set(string $claim, $value): Validator
    {
    }

    /**
     * Set the token to be validated
     *
     * @param Token $token
     *
     * @return Validator
     */
    public function setToken(\Phalcon\Encryption\Security\JWT\Token\Token $token): Validator
    {
    }

    /**
     * Validate the audience
     *
     * @param string|array $audience
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateAudience($audience): Validator
    {
    }

    /**
     * Validate the expiration time of the token
     *
     * @param int $timestamp
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateExpiration(int $timestamp): Validator
    {
    }

    /**
     * Validate the id of the token
     *
     * @param string $id
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateId(string $id): Validator
    {
    }

    /**
     * Validate the issued at (iat) of the token
     *
     * @param int $timestamp
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateIssuedAt(int $timestamp): Validator
    {
    }

    /**
     * Validate the issuer of the token
     *
     * @param string $issuer
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateIssuer(string $issuer): Validator
    {
    }

    /**
     * Validate the notbefore (nbf) of the token
     *
     * @param int $timestamp
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateNotBefore(int $timestamp): Validator
    {
    }

    /**
     * Validate the signature of the token
     *
     * @param SignerInterface $signer
     * @param string          $passphrase
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateSignature(\Phalcon\Encryption\Security\JWT\Signer\SignerInterface $signer, string $passphrase): Validator
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
