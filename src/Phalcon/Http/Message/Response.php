<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message;

use Phalcon\Helper\Number;
use Phalcon\Http\Message\AbstractMessage;
use Phalcon\Http\Message\Exception\InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

/**
 * PSR-7 Response
 */
final class Response extends AbstractMessage implements \Psr\Http\Message\ResponseInterface
{
    /**
     * Gets the response reason phrase associated with the status code.
     *
     * Because a reason phrase is not a required element in a response
     * status line, the reason phrase value MAY be empty. Implementations MAY
     * choose to return the default RFC 7231 recommended reason phrase (or
     * those
     * listed in the IANA HTTP Status Code Registry) for the response's
     * status code.
     *
     * @see http://tools.ietf.org/html/rfc7231#section-6
     * @see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
     *
     * @var string
     */
    protected $reasonPhrase = '';

    /**
     * Gets the response status code.
     *
     * The status code is a 3-digit integer result code of the server's attempt
     * to understand and satisfy the request.
     *
     * @var int
     */
    protected $statusCode = 200;


    /**
     * Gets the response reason phrase associated with the status code.
     *
     * Because a reason phrase is not a required element in a response
     * status line, the reason phrase value MAY be empty. Implementations MAY
     * choose to return the default RFC 7231 recommended reason phrase (or
     * those
     * listed in the IANA HTTP Status Code Registry) for the response's
     * status code.
     *
     * @return string
     */
    public function getReasonPhrase(): string
    {
    }

    /**
     * Gets the response status code.
     *
     * The status code is a 3-digit integer result code of the server's attempt
     * to understand and satisfy the request.
     *
     * @return int
     */
    public function getStatusCode(): int
    {
    }

    /**
     * Response constructor.
     *
     * @param string $body
     * @param int    $code
     * @param array  $headers
     */
    public function __construct($body = 'php://memory', int $code = 200, array $headers = array())
    {
    }

    /**
     * Return an instance with the specified status code and, optionally,
     * reason phrase.
     *
     * If no reason phrase is specified, implementations MAY choose to default
     * to the RFC 7231 or IANA recommended reason phrase for the response's
     * status code.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * updated status and reason phrase.
     *
     * @see http://tools.ietf.org/html/rfc7231#section-6
     * @see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
     *
     * @param int    $code
     * @param string $reasonPhrase
     *
     * @return Response
     */
    public function withStatus($code, $reasonPhrase = ''): Response
    {
    }

    /**
     * Returns the list of status codes available
     *
     * @return array
     */
    protected function getPhrases(): array
    {
    }

    /**
     * Set a valid status code and phrase
     *
     * @param mixed $code
     * @param mixed $phrase
     * @return void
     */
    protected function processCode($code, $phrase = '')
    {
    }

    /**
     * Checks if a code is integer or string
     *
     * @param mixed $code
     * @return void
     */
    private function checkCodeType($code)
    {
    }

    /**
     * Checks if a code is integer or string
     *
     * @param int $code
     * @return void
     */
    private function checkCodeValue(int $code)
    {
    }
}
