<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\Uuid;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by sinbadxiii/cphalcon-uuid
 *
 * @link    https://github.com/sinbadxiii/cphalcon-uuid
 */
interface TimeBasedUuidInterface
{
    /**
     * @return \DateTimeImmutable
     */
    public function getDateTime(): \DateTimeImmutable;

    /**
     * @return string
     */
    public function getNode(): string;
}
