<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Consumer;

/**
 * Lifecycle event names fired by the queue consumer through
 * Phalcon\Events\Manager. One public constant per event.
 */
class Events
{
    /**
     * @var string
     */
    const string AFTER_END = 'queue:afterEnd';

    /**
     * @var string
     */
    const string AFTER_PROCESS = 'queue:afterProcess';

    /**
     * @var string
     */
    const string AFTER_RECEIVE = 'queue:afterReceive';

    /**
     * @var string
     */
    const string BEFORE_PROCESS = 'queue:beforeProcess';

    /**
     * @var string
     */
    const string BEFORE_RECEIVE = 'queue:beforeReceive';

    /**
     * @var string
     */
    const string BEFORE_START = 'queue:beforeStart';

    /**
     * @var string
     */
    const string PROCESSOR_EXCEPTION = 'queue:processorException';
}
