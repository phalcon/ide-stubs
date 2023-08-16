<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT\Token;

use Phalcon\Encryption\Security\JWT\Signer\SignerInterface;
use Phalcon\Encryption\Security\JWT\Validator;

/**
 * Token Class.
 *
 * A container for Token related data. It stores the claims, headers, signature
 * and payload. It also calculates and returns the token string.
 *
 * @link https://tools.ietf.org/html/rfc7519
 */
class Token
{
    /**
     * @var Item
     */
    private $claims;

    /**
     * @var Item
     */
    private $headers;

    /**
     * @var Signature
     */
    private $signature;

    /**
     * Token constructor.
     *
     * @param Item      $headers
     * @param Item      $claims
     * @param Signature $signature
     */
    public function __construct(Item $headers, Item $claims, Signature $signature)
    {
    }

    /**
     * Return the registered claims
     *
     * @return Item
     */
    public function getClaims(): Item
    {
    }

    /**
     * Return the registered headers
     *
     * @return Item
     */
    public function getHeaders(): Item
    {
    }

    /**
     * Return the payload
     *
     * @return string
     */
    public function getPayload(): string
    {
    }

    /**
     * Return the signature
     *
     * @return Signature
     */
    public function getSignature(): Signature
    {
    }

    /**
     * Return the token
     *
     * @return string
     */
    public function getToken(): string
    {
    }

    /**
     * @param Validator $validator
     *
     * @return array
     */
    public function validate(\Phalcon\Encryption\Security\JWT\Validator $validator): array
    {
    }

    /**
     * Verify the signature
     *
     * @param SignerInterface $signer
     * @param string          $key
     *
     * @return bool
     */
    public function verify(\Phalcon\Encryption\Security\JWT\Signer\SignerInterface $signer, string $key): bool
    {
    }
}
