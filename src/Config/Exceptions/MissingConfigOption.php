<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config\Exceptions;

use Phalcon\Config\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class MissingConfigOption extends Exception
{
    /**
     * @var string
     */
    private $option;

    /**
     * @param string $option
     */
    public function __construct(string $option)
    {
    }

    /**
     * @return string
     */
    public function getOption(): string
    {
    }
}
