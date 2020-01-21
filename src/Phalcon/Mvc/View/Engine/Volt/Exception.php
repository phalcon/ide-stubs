<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine\Volt;

/**
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
    public function __construct(string $message = '', array $statement = array(), int $code = 0, \Exception $previous = null)
    {
    }

    /**
     * Gets currently parsed statement (if any).
     *
     * @return array
     */
    public function getStatement(): array
    {
    }
}
