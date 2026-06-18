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
 * Factory to create payload objects.
 *
 * It exists so that payload creation can be registered as a service in the DI
 * container and substituted in tests, rather than constructing `Payload`
 * instances directly.
 */
class PayloadFactory
{
    /**
     * Instantiate a new object
     *
     * @return PayloadInterface
     */
    public function newInstance(): PayloadInterface
    {
    }
}
