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

/**
 * Class Parser
 */
class Parser
{


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
     * @param string $data
     * @param bool $associative
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    private function decode(string $data, bool $associative = false, int $depth = 512, int $options = 0)
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
