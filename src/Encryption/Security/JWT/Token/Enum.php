<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT\Token;

/**
 * Constants for Tokens. It offers constants for Headers as well as Claims
 *
 * @link https://tools.ietf.org/html/rfc7519
 */
class Enum
{
    /**
     * Headers
     *
     * @var string
     */
    const string TYPE = 'typ';

    /**
     * @var string
     */
    const string ALGO = 'alg';

    /**
     * @var string
     */
    const string CONTENT_TYPE = 'cty';

    /**
     * Claims
     *
     * @var string
     */
    const string AUDIENCE = 'aud';

    /**
     * @var string
     */
    const string EXPIRATION_TIME = 'exp';

    /**
     * @var string
     */
    const string ID = 'jti';

    /**
     * @var string
     */
    const string ISSUED_AT = 'iat';

    /**
     * @var string
     */
    const string ISSUER = 'iss';

    /**
     * @var string
     */
    const string NOT_BEFORE = 'nbf';

    /**
     * @var string
     */
    const string SUBJECT = 'sub';
}
