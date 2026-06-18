<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Link\Serializer;

/**
 * Class Phalcon\Http\Link\Serializer\Header
 */
class Header implements \Phalcon\Html\Link\Serializer\SerializerInterface
{
    /**
     * Serializes all the passed links to a HTTP link header
     *
     * @param array $links
     * @return string|null
     */
    public function serialize(array $links): string|null
    {
    }

    /**
     * Escapes a quoted-string attribute value per RFC 8288 section 3: a
     * backslash and a double quote are each prefixed with a backslash so the
     * value cannot terminate or corrupt the header field.
     *
     * @param string $value
     *
     * @return string
     */
    private function quote(string $value): string
    {
    }
}
