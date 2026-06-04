<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter\Config;

use Phalcon\Contracts\Auth\Adapter\AdapterConfig;

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
abstract class AbstractAdapterConfig implements \Phalcon\Contracts\Auth\Adapter\AdapterConfig
{
    /**
     * @var string|null
     */
    protected $model = null;

    /**
     * @param string|null $model
     */
    public function __construct(?string $model = null)
    {
    }

    /**
     * @return string|null
     */
    public function getModel(): string|null
    {
    }
}
