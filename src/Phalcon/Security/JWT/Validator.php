<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Security\JWT;

use Phalcon\Security\JWT\Exceptions\ValidatorException;
use Phalcon\Security\JWT\Signer\SignerInterface;
use Phalcon\Security\JWT\Token\Token;

/**
 * Class Validator
 *
 * @property int   $timeShift
 * @property Token $token
 */
class Validator
{
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
    public function __construct(\Phalcon\Security\JWT\Token\Token $token, int $timeShift = 0)
    {
    }

    /**
     * @param Token $token
     *
     * @return Validator
     */
    public function setToken(\Phalcon\Security\JWT\Token\Token $token): Validator
    {
    }

    /**
     * @param string $audience
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateAudience(string $audience): Validator
    {
    }

    /**
     * @param int $timestamp
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateExpiration(int $timestamp): Validator
    {
    }

    /**
     * @param string $id
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateId(string $id): Validator
    {
    }

    /**
     * @param int $timestamp
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateIssuedAt(int $timestamp): Validator
    {
    }

    /**
     * @param string $issuer
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateIssuer(string $issuer): Validator
    {
    }

    /**
     * @param int $timestamp
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateNotBefore(int $timestamp): Validator
    {
    }

    /**
     * @param SignerInterface $signer
     * @param string          $passphrase
     *
     * @return Validator
     * @throws ValidatorException
     */
    public function validateSignature(\Phalcon\Security\JWT\Signer\SignerInterface $signer, string $passphrase): Validator
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
