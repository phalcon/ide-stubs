<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\ADR\Responder\Formatter;

use Phalcon\Contracts\ADR\Payload\Payload;

/**
 * Renders a payload into a string for a given content type.
 */
interface Formatter
{
    /**
     * Whether this formatter can satisfy the given `Accept` header.
     *
     * @param string $acceptHeader
     * @return bool
     */
    public function accepts(string $acceptHeader): bool;

    /**
     * The content type this formatter produces.
     *
     * @return string
     */
    public function contentType(): string;

    /**
     * Renders the payload into a string.
     *
     * @param \Phalcon\Contracts\ADR\Payload\Payload $payload
     * @return string
     */
    public function format(\Phalcon\Contracts\ADR\Payload\Payload $payload): string;
}
