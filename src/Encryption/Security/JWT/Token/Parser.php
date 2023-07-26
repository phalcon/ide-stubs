<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT\Token;

use InvalidArgumentException;
use Phalcon\Support\Helper\Json\Decode;

/**
 * Token Parser class.
 *
 * It parses a token by validating if it is formed properly and splits it into
 * three parts. The headers are decoded, then the claims and finally the
 * signature. It returns a token object populated with the decoded information.
 */
class Parser
{
    /**
     * @var Decode
     */
    private $decode;

    /**
     * @param \Phalcon\Support\Helper\Json\Decode $decode
     */
    public function __construct(\Phalcon\Support\Helper\Json\Decode $decode = null)
    {
    }

    /**
     * Parse a token and return it
     *
     * @param string $token
     *
     * @return Token
     */
    public function parse(string $token): Token
    {
    }

    /**
     * Decode the claims
     *
     * @param string $claims
     *
     * @return Item
     */
    private function decodeClaims(string $claims): Item
    {
    }

    /**
     * Decodes the headers
     *
     * @param string $headers
     *
     * @return Item
     */
    private function decodeHeaders(string $headers): Item
    {
    }

    /**
     * Decodes the signature
     *
     * @param Item   $headers
     * @param string $signature
     *
     * @return Signature
     */
    private function decodeSignature(Item $headers, string $signature): Signature
    {
    }

    /**
     * Splits the token to its three parts;
     *
     * @param string $token
     *
     * @return array
     */
    private function parseToken(string $token): array
    {
    }

    /**
     * @todo This will be removed when traits are introduced
     * @param string $input
     * @return string
     */
    private function decodeUrl(string $input): string
    {
    }
}
