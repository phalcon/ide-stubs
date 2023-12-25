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
use Phalcon\Encryption\Security\JWT\Token\Item;
use Phalcon\Encryption\Security\JWT\Token\Signature;
use Phalcon\Encryption\Security\JWT\Token\Token;
use Phalcon\Support\Collection;
use Phalcon\Support\Collection\CollectionInterface;
use Phalcon\Support\Helper\Json\Encode;

/**
 * Builder
 *
 * The builder offers
 *
 * @property CollectionInterface $claims
 * @property CollectionInterface $jose
 * @property string              $passphrase
 * @property SignerInterface     $signer
 *
 * @link https://tools.ietf.org/html/rfc7519
 */
class Builder
{
    /**
     * @var CollectionInterface
     */
    private $claims;

    /**
     * @var Encode
     */
    private $encode;

    /**
     * @var CollectionInterface
     */
    private $jose;

    /**
     * @var string
     */
    private $passphrase;

    /**
     * @var SignerInterface
     */
    private $signer;

    /**
     * Builder constructor.
     *
     * @param SignerInterface $signer
     */
    public function __construct(\Phalcon\Encryption\Security\JWT\Signer\SignerInterface $signer)
    {
    }

    /**
     * @return Builder
     */
    public function init(): Builder
    {
    }

    /**
     * Adds a custom claim
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return Builder
     */
    public function addClaim(string $name, $value): Builder
    {
    }

    /**
     * Adds a custom claim
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return Builder
     */
    public function addHeader(string $name, $value): Builder
    {
    }

    /**
     * @return array|string
     */
    public function getAudience()
    {
    }

    /**
     * @return array
     */
    public function getClaims(): array
    {
    }

    /**
     * @return string|null
     */
    public function getContentType(): string|null
    {
    }

    /**
     * @return int|null
     */
    public function getExpirationTime(): int|null
    {
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
    }

    /**
     * @return string|null
     */
    public function getId(): string|null
    {
    }

    /**
     * @return int|null
     */
    public function getIssuedAt(): int|null
    {
    }

    /**
     * @return string|null
     */
    public function getIssuer(): string|null
    {
    }

    /**
     * @return int|null
     */
    public function getNotBefore(): int|null
    {
    }

    /**
     * @return string|null
     */
    public function getSubject(): string|null
    {
    }

    /**
     * @return Token
     * @throws ValidatorException
     */
    public function getToken(): Token
    {
    }

    /**
     * @return string
     */
    public function getPassphrase(): string
    {
    }

    /**
     * The "aud" (audience) claim identifies the recipients that the JWT is
     * intended for.  Each principal intended to process the JWT MUST
     * identify itself with a value in the audience claim.  If the principal
     * processing the claim does not identify itself with a value in the
     * "aud" claim when this claim is present, then the JWT MUST be
     * rejected.  In the general case, the "aud" value is an array of case-
     * sensitive strings, each containing a StringOrURI value.  In the
     * special case when the JWT has one audience, the "aud" value MAY be a
     * single case-sensitive string containing a StringOrURI value.  The
     * interpretation of audience values is generally application specific.
     * Use of this claim is OPTIONAL.
     *
     * @param mixed $audience
     *
     * @return Builder
     * @throws ValidatorException
     */
    public function setAudience($audience): Builder
    {
    }

    /**
     * Sets the content type header 'cty'
     *
     * @param string $contentType
     *
     * @return Builder
     */
    public function setContentType(string $contentType): Builder
    {
    }

    /**
     * The "exp" (expiration time) claim identifies the expiration time on
     * or after which the JWT MUST NOT be accepted for processing.  The
     * processing of the "exp" claim requires that the current date/time
     * MUST be before the expiration date/time listed in the "exp" claim.
     * Implementers MAY provide for some small leeway, usually no more than
     * a few minutes, to account for clock skew.  Its value MUST be a number
     * containing a NumericDate value.  Use of this claim is OPTIONAL.
     *
     * @param int $timestamp
     *
     * @return Builder
     * @throws ValidatorException
     */
    public function setExpirationTime(int $timestamp): Builder
    {
    }

    /**
     * The "jti" (JWT ID) claim provides a unique identifier for the JWT.
     * The identifier value MUST be assigned in a manner that ensures that
     * there is a negligible probability that the same value will be
     * accidentally assigned to a different data object; if the application
     * uses multiple issuers, collisions MUST be prevented among values
     * produced by different issuers as well.  The "jti" claim can be used
     * to prevent the JWT from being replayed.  The "jti" value is a case-
     * sensitive string.  Use of this claim is OPTIONAL.
     *
     * @param string $id
     *
     * @return Builder
     */
    public function setId(string $id): Builder
    {
    }

    /**
     * The "iat" (issued at) claim identifies the time at which the JWT was
     * issued.  This claim can be used to determine the age of the JWT.  Its
     * value MUST be a number containing a NumericDate value.  Use of this
     * claim is OPTIONAL.
     *
     * @param int $timestamp
     *
     * @return Builder
     */
    public function setIssuedAt(int $timestamp): Builder
    {
    }

    /**
     * The "iss" (issuer) claim identifies the principal that issued the
     * JWT.  The processing of this claim is generally application specific.
     * The "iss" value is a case-sensitive string containing a StringOrURI
     * value.  Use of this claim is OPTIONAL.
     *
     * @param string $issuer
     *
     * @return Builder
     */
    public function setIssuer(string $issuer): Builder
    {
    }

    /**
     * The "nbf" (not before) claim identifies the time before which the JWT
     * MUST NOT be accepted for processing.  The processing of the "nbf"
     * claim requires that the current date/time MUST be after or equal to
     * the not-before date/time listed in the "nbf" claim.  Implementers MAY
     * provide for some small leeway, usually no more than a few minutes, to
     * account for clock skew.  Its value MUST be a number containing a
     * NumericDate value.  Use of this claim is OPTIONAL.
     *
     * @param int $timestamp
     *
     * @return Builder
     * @throws ValidatorException
     */
    public function setNotBefore(int $timestamp): Builder
    {
    }

    /**
     * The "sub" (subject) claim identifies the principal that is the
     * subject of the JWT.  The claims in a JWT are normally statements
     * about the subject.  The subject value MUST either be scoped to be
     * locally unique in the context of the issuer or be globally unique.
     * The processing of this claim is generally application specific.  The
     * "sub" value is a case-sensitive string containing a StringOrURI
     * value.  Use of this claim is OPTIONAL.
     *
     * @param string $subject
     *
     * @return Builder
     */
    public function setSubject(string $subject): Builder
    {
    }

    /**
     * @param string $passphrase
     *
     * @return Builder
     * @throws ValidatorException
     */
    public function setPassphrase(string $passphrase): Builder
    {
    }

    /**
     * Sets a registered claim
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return Builder
     */
    protected function setClaim(string $name, $value): Builder
    {
    }

    /**
     * @todo This will be removed when traits are introduced
     * @param string $input
     * @return string
     */
    private function encodeUrl(string $input): string
    {
    }
}
