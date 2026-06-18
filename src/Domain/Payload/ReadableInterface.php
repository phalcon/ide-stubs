<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Domain\Payload;

use Phalcon\Contracts\Domain\Payload\Readable as ReadableContract;

/**
 * This interface is used for consumers (read only)
 *
 * @psalm-suppress DeprecatedInterface
 * @deprecated Will be removed in a future major release.
 *             Use {@see \Phalcon\Contracts\Domain\Payload\Readable} instead.
 */
interface ReadableInterface extends ReadableContract
{
}
