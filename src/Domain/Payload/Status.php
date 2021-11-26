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
 * Holds the status codes for the payload
 */
class Status
{
    const ACCEPTED = 'ACCEPTED';

    const AUTHENTICATED = 'AUTHENTICATED';

    const AUTHORIZED = 'AUTHORIZED';

    const CREATED = 'CREATED';

    const DELETED = 'DELETED';

    const ERROR = 'ERROR';

    const FAILURE = 'FAILURE';

    const FOUND = 'FOUND';

    const NOT_ACCEPTED = 'NOT_ACCEPTED';

    const NOT_AUTHENTICATED = 'NOT_AUTHENTICATED';

    const NOT_AUTHORIZED = 'NOT_AUTHORIZED';

    const NOT_CREATED = 'NOT_CREATED';

    const NOT_DELETED = 'NOT_DELETED';

    const NOT_FOUND = 'NOT_FOUND';

    const NOT_UPDATED = 'NOT_UPDATED';

    const NOT_VALID = 'NOT_VALID';

    const PROCESSING = 'PROCESSING';

    const SUCCESS = 'SUCCESS';

    const UPDATED = 'UPDATED';

    const VALID = 'VALID';


    /**
     * Instantiation not allowed.
     */
    final private function __construct()
    {
    }
}
