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
class CannotLoadConfigFile extends Exception
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
    }
}
