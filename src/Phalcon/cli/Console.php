<?php

namespace Phalcon\Cli;

use Phalcon\Application\AbstractApplication;
use Phalcon\Cli\Router\Route;
use Phalcon\Cli\Console\Exception;
use Phalcon\Di\DiInterface;
use Phalcon\Events\ManagerInterface;

/**
 * This component allows to create CLI applications using Phalcon
 */
class Console extends AbstractApplication
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
    public function handle(array $arguments = null)
    {
    }

    /**
     * Set an specific argument
     *
     * @param array $arguments
     * @param bool $str
     * @param bool $shift
     * @return Console
     */
    public function setArgument(array $arguments = null, bool $str = true, bool $shift = true): Console
    {
    }

}
