<?php

namespace Phalcon\Mvc\View\Engine\Volt;

/**
 * Phalcon\Mvc\View\Exception
 *
 * Class for exceptions thrown by Phalcon\Mvc\View
 */
class Exception extends \Phalcon\Mvc\View\Exception
{

    protected $statement;


    /**
     * @param string $message
     * @param array $statement
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($message = '', array $statement = array(), $code = 0, \Exception $previous = null) {}

    /**
     * Gets currently parsed statement (if any).
     *
     * @return array
     */
    public function getStatement() {}

}
