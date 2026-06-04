<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Guard\Config;

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
class TokenGuardConfig extends \Phalcon\Auth\Guard\Config\AbstractGuardConfig
{
    /**
     * @var string
     */
    protected $inputKey;

    /**
     * @var string
     */
    protected $storageKey;

    /**
     * @throws Exception
     * @param string $inputKey
     * @param string $storageKey
     */
    public function __construct(string $inputKey, string $storageKey)
    {
    }

    /**
     * @return string
     */
    public function getInputKey(): string
    {
    }

    /**
     * @return string
     */
    public function getStorageKey(): string
    {
    }
}
