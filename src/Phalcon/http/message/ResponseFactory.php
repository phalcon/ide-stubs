<?php

namespace Phalcon\Http\Message;

/**
 * PSR-17 ResponseFactory
 */
final class ResponseFactory implements \Psr\Http\Message\ResponseFactoryInterface
{

    /**
     * Create a new response.
     *
     * @param string $reasonPhrase The reason phrase to associate with the status
     *                             code in the generated response. If none is
     *                             provided, implementations MAY use the defaults
     *                             as suggested in the HTTP specification.
     *
     * @param int $code The HTTP status code. Defaults to 200.
     * @param string $reasonPhrase
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface {}

}
