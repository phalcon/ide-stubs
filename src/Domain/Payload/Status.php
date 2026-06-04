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
    const string ACCEPTED = 'ACCEPTED';

    /**
     * @var string
     */
    const string AUTHENTICATED = 'AUTHENTICATED';

    /**
     * @var string
     */
    const string AUTHORIZED = 'AUTHORIZED';

    /**
     * @var string
     */
    const string CREATED = 'CREATED';

    /**
     * @var string
     */
    const string DELETED = 'DELETED';

    /**
     * @var string
     */
    const string ERROR = 'ERROR';

    /**
     * @var string
     */
    const string FAILURE = 'FAILURE';

    /**
     * @var string
     */
    const string FOUND = 'FOUND';

    /**
     * @var string
     */
    const string NOT_ACCEPTED = 'NOT_ACCEPTED';

    /**
     * @var string
     */
    const string NOT_AUTHENTICATED = 'NOT_AUTHENTICATED';

    /**
     * @var string
     */
    const string NOT_AUTHORIZED = 'NOT_AUTHORIZED';

    /**
     * @var string
     */
    const string NOT_CREATED = 'NOT_CREATED';

    /**
     * @var string
     */
    const string NOT_DELETED = 'NOT_DELETED';

    /**
     * @var string
     */
    const string NOT_FOUND = 'NOT_FOUND';

    /**
     * @var string
     */
    const string NOT_UPDATED = 'NOT_UPDATED';

    /**
     * @var string
     */
    const string NOT_VALID = 'NOT_VALID';

    /**
     * @var string
     */
    const string PROCESSING = 'PROCESSING';

    /**
     * @var string
     */
    const string SUCCESS = 'SUCCESS';

    /**
     * @var string
     */
    const string UPDATED = 'UPDATED';

    /**
     * @var string
     */
    const string VALID = 'VALID';


    /**
     * Instantiation not allowed.
     */
    final private function __construct()
    {
    }
}
