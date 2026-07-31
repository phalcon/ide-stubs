<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Responder\Formatter;

use Phalcon\Contracts\ADR\Payload\Payload;
use Phalcon\Contracts\ADR\Responder\Formatter\Formatter;

/**
 * Renders a payload as plain text.
 */
class TextFormatter implements \Phalcon\Contracts\ADR\Responder\Formatter\Formatter
{
    /**
     * @param string $acceptHeader
     * @return bool
     */
    public function accepts(string $acceptHeader): bool
    {
    }

    /**
     * @return string
     */
    public function contentType(): string
    {
    }

    /**
     * @param \Phalcon\Contracts\ADR\Payload\Payload $payload
     * @return string
     */
    public function format(\Phalcon\Contracts\ADR\Payload\Payload $payload): string
    {
    }
}
