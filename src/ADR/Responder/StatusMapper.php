<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Responder;

use Phalcon\ADR\Payload\Status;
use Phalcon\Contracts\ADR\ADRTypes;

/**
 * Maps a domain `Status` to an HTTP status code.
 *
 * `Status` is the single source of truth: the default map covers every
 * `Status` constant. Any status that is not mapped resolves to 500, never a
 * silent 200. Every entry can be overridden through the constructor.
 *
 * @phpstan-import-type adr_status_map from ADRTypes
 */
final class StatusMapper
{
    /**
     * @phpstan-var adr_status_map
     */
    protected array $map;

    /**
     * @phpstan-param adr_status_map $overrides
     * @param array $overrides
     */
    public function __construct(array $overrides = [])
    {
    }

    /**
     * Returns the HTTP status code for the given domain status.
     *
     * An unmapped status resolves to 500 (server error), never a silent 200.
     *
     * @param string $status
     * @return int
     */
    public function toHttpCode(string $status): int
    {
    }
}
