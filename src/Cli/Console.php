<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli;

use Closure;
use Phalcon\Application\AbstractApplication;
use Phalcon\Cli\Console\Exception;
use Phalcon\Cli\Console\Exceptions\ContainerRequired;
use Phalcon\Cli\Console\Exceptions\InvalidModuleDefinition;
use Phalcon\Cli\Console\Exceptions\ModuleDefinitionPathNotFound;
use Phalcon\Cli\Router\Route;
use Phalcon\Di\DiInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;

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
     * @param array|null $arguments
     */
    public function handle(?array $arguments = null)
    {
    }

    /**
     * Set an specific argument
     *
     * @param array|null $arguments
     * @param bool $str
     * @param bool $shift
     * @return static
     */
    public function setArgument(?array $arguments = null, bool $str = true, bool $shift = true): static
    {
    }
}
