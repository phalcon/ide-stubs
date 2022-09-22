<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Domain\Payload;

/**
 * This interface is used for consumers
 */
interface PayloadInterface extends \Phalcon\Domain\Payload\ReadableInterface, \Phalcon\Domain\Payload\WriteableInterface
{
}
