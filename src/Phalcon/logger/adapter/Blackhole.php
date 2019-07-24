<?php

namespace Phalcon\Logger\Adapter;

/**
 * Phalcon\Logger\Adapter\Blackhole
 *
 * Any record it can handle will be thrown away.
 */
class Blackhole extends \Phalcon\Logger\Adapter
{

    /**
     * Returns the internal formatter
     *
     * @return \Phalcon\Logger\FormatterInterface
     */
    public function getFormatter() {}

    /**
     * Writes the log to the blackhole
     *
     * @param string $message
     * @param int $type
     * @param int $time
     * @param array $context
     */
    public function logInternal($message, $type, $time, array $context) {}

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close() {}

}
