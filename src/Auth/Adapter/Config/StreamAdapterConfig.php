<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter\Config;

use Phalcon\Auth\Exception;
use Phalcon\Auth\Exceptions\ConfigRequiresNonEmptyValue;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by sinbadxiii/cphalcon-auth
 *
 * @link    https://github.com/sinbadxiii/cphalcon-auth
 */
class StreamAdapterConfig extends \Phalcon\Auth\Adapter\Config\AbstractAdapterConfig
{
    /**
     * @var string
     */
    protected $file;

    /**
     * @throws Exception
     * @param string $file
     * @param string|null $model
     */
    public function __construct(string $file, ?string $model = null)
    {
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
    }
}
