<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Exceptions;

use Phalcon\Translate\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class MissingRequiredParameter extends Exception
{
    /**
     * @var string
     */
    private $parameter;

    /**
     * @param string $parameter
     */
    public function __construct(string $parameter)
    {
    }

    /**
     * @return string
     */
    public function getParameter(): string
    {
    }
}
