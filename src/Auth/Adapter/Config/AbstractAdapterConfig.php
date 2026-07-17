<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter\Config;

use Phalcon\Auth\Adapter\Config\Traits\ModelConfigTrait;
use Phalcon\Contracts\Auth\Adapter\AdapterConfig;

/**
 * @todo Remove in v7. Kept only for backwards compatibility; compose
 * Phalcon\Auth\Adapter\Config\Traits\ModelConfigTrait directly instead of
 * extending this.
 */
abstract class AbstractAdapterConfig implements \Phalcon\Contracts\Auth\Adapter\AdapterConfig
{
    use \Phalcon\Auth\Adapter\Config\Traits\ModelConfigTrait;



    /**
     * @param string|null $model
     */
    public function __construct(?string $model = null)
    {
    }
}
