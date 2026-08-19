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
use Phalcon\Cli\Console\Exceptions\ContainerRequired;
use Phalcon\Cli\Console\Exceptions\InvalidModuleDefinition;
use Phalcon\Cli\Console\Exceptions\ModuleDefinitionPathNotFound;
use Phalcon\Cli\Router\Route;
use Phalcon\Contracts\Cli\CliTypes;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Traits\Php\FileTrait;

/**
 * This component allows to create CLI applications using Phalcon
 *
 * @phpstan-import-type cli_arguments from CliTypes
 * @phpstan-import-type cli_options from CliTypes
 * @phpstan-import-type cli_parameters from CliTypes
 */
class Console extends AbstractApplication
{
    use \Phalcon\Traits\Php\FileTrait;


    /**
     * @phpstan-var cli_arguments
     */
    protected $arguments = [];

    /**
     * @phpstan-var cli_options
     */
    protected array $options = [];

    /**
     * Handle the whole command-line tasks
     *
     * @phpstan-param cli_parameters|null $arguments
     * @param array|null $arguments
     */
    public function handle(?array $arguments = null)
    {
    }

    /**
     * Set a specific argument
     *
     * @phpstan-param cli_parameters|null $arguments
     * @param array|null $arguments
     * @param bool $str
     * @param bool $shift
     * @return static
     */
    public function setArgument(?array $arguments = null, bool $str = true, bool $shift = true): static
    {
    }
}
