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
class ModelAdapterConfig extends \Phalcon\Auth\Adapter\Config\AbstractAdapterConfig
{
    /**
     * @var string
     */
    protected $idColumn = 'id';

    /**
     * @throws Exception
     * @param string $model
     * @param string $idColumn
     */
    public function __construct(string $model, string $idColumn = 'id')
    {
    }

    /**
     * @return string
     */
    public function getIdColumn(): string
    {
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
    }
}
