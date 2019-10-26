<?php

namespace Phalcon\Http\Message;

use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

/**
 * PSR-17 UriFactory
 */
final class UriFactory implements \Psr\Http\Message\UriFactoryInterface
{

    /**
     * Returns a Locator object with all the helpers defined in anonynous
     * functions
     *
     * @param string $uri
     * @return \Psr\Http\Message\UriInterface
     */
    public function createUri(string $uri = ''): UriInterface
    {
    }
}
