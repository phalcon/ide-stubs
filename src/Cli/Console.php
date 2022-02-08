<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
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
    protected $arguments = [];

    /**
     * @var array
     */
    protected $options = [];

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
