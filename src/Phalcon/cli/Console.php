<?php

namespace Phalcon\Cli;

/**
 * This component allows to create CLI applications using Phalcon
 */
class Console extends \Phalcon\Application\AbstractApplication
{
    /**
     * @var array
     */
    protected $arguments = array();

    /**
     * @var array
     */
    protected $options = array();


    /**
     * Handle the whole command-line tasks
     *
     * @param array $arguments
     */
    public function handle(array $arguments = null) {}

    /**
     * Set an specific argument
     *
     * @param array $arguments
     * @param bool $str
     * @param bool $shift
     * @return Console
     */
    public function setArgument(array $arguments = null, bool $str = true, bool $shift = true): Console {}

}
