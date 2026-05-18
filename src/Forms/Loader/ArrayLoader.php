<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms\Loader;

use Phalcon\Contracts\Forms\Schema;
use Phalcon\Forms\Exception;

/**
 * Supplies form element definitions from a PHP array.
 */
class ArrayLoader implements \Phalcon\Contracts\Forms\Schema
{
    /**
     * @var array
     */
    protected $definitions;

    /**
     * @param array $definitions
     */
    public function __construct(array $definitions)
    {
    }

    /**
     * @return array
     * @throws Exception
     */
    public function load(): array
    {
    }

    /**
     * @param mixed $definition
     * @param int   $index
     *
     * @throws Exception
     * @return void
     */
    protected function validateDefinition($definition, int $index): void
    {
    }
}
