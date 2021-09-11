<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Security\JWT\Token;

/**
 * Class Token
 *
 * @property Item      $claims
 * @property Item      $headers
 * @property Signature $signature
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
     * @return mixed
     */
    public function getClaims()
    {
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
    }

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
     * @return string
     */
    public function getPayload(): string
    {
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
    }
}
