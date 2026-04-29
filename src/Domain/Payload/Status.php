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
    /**
     * @var string
     */
    const ACCEPTED = 'ACCEPTED';

    /**
     * @var string
     */
    const AUTHENTICATED = 'AUTHENTICATED';

    /**
     * @var string
     */
    const AUTHORIZED = 'AUTHORIZED';

    /**
     * @var string
     */
    const CREATED = 'CREATED';

    /**
     * @var string
     */
    const DELETED = 'DELETED';

    /**
     * @var string
     */
    const ERROR = 'ERROR';

    /**
     * @var string
     */
    const FAILURE = 'FAILURE';

    /**
     * @var string
     */
    const FOUND = 'FOUND';

    /**
     * @var string
     */
    const NOT_ACCEPTED = 'NOT_ACCEPTED';

    /**
     * @var string
     */
    const NOT_AUTHENTICATED = 'NOT_AUTHENTICATED';

    /**
     * @var string
     */
    const NOT_AUTHORIZED = 'NOT_AUTHORIZED';

    /**
     * @var string
     */
    const NOT_CREATED = 'NOT_CREATED';

    /**
     * @var string
     */
    const NOT_DELETED = 'NOT_DELETED';

    /**
     * @var string
     */
    const NOT_FOUND = 'NOT_FOUND';

    /**
     * @var string
     */
    const NOT_UPDATED = 'NOT_UPDATED';

    /**
     * @var string
     */
    const NOT_VALID = 'NOT_VALID';

    /**
     * @var string
     */
    const PROCESSING = 'PROCESSING';

    /**
     * @var string
     */
    const SUCCESS = 'SUCCESS';

    /**
     * @var string
     */
    const UPDATED = 'UPDATED';

    /**
     * @var string
     */
    const VALID = 'VALID';


    /**
     * Instantiation not allowed.
     */
    final private function __construct()
    {
    }
}
