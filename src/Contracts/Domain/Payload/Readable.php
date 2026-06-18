<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Domain\Payload;

use Throwable;

/**
 * Canonical read-only contract for a domain payload.
 *
 * Responders consume a finished payload through this contract (the getters),
 * narrowing the surface to the read side of the Action-Domain-Responder
 * boundary.
 */
interface Readable
{
    /**
     * Gets the potential exception thrown in the domain layer
     *
     * @return Throwable|null
     */
    public function getException(): Throwable|null;

    /**
     * Gets arbitrary extra values produced by the domain layer.
     *
     * @return mixed
     */
    public function getExtras(): mixed;

    /**
     * Gets the input received by the domain layer.
     *
     * @return mixed
     */
    public function getInput(): mixed;

    /**
     * Gets the messages produced by the domain layer.
     *
     * @return mixed
     */
    public function getMessages(): mixed;

    /**
     * Gets the output produced from the domain layer.
     *
     * @return mixed
     */
    public function getOutput(): mixed;

    /**
     * Gets the status of this payload.
     *
     * Status values are drawn from the `Status` vocabulary.
     *
     * @return mixed
     *
     * @see \Phalcon\Domain\Payload\Status
     */
    public function getStatus(): mixed;
}
