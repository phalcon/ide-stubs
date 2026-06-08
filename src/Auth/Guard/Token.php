<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Guard;

use Phalcon\Auth\Guard\Config\TokenGuardConfig;
use Phalcon\Auth\Internal\ContainerResolver;
use Phalcon\Auth\Internal\Options;
use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Http\RequestInterface;

/**
 * @phpstan-import-type AuthCredentials from Adapter
 *
 * @extends AbstractGuard<TokenGuardConfig>
 */
class Token extends \Phalcon\Auth\Guard\AbstractGuard
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @param \Phalcon\Http\RequestInterface $request
     * @param \Phalcon\Auth\Guard\Config\TokenGuardConfig $config
     */
    public function __construct(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter, \Phalcon\Http\RequestInterface $request, \Phalcon\Auth\Guard\Config\TokenGuardConfig $config)
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @param mixed $container
     * @param array $options
     * @return static
     */
    public static function fromOptions(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter, $container, array $options): static
    {
    }

    /**
     * @return string|null
     */
    public function getTokenForRequest(): string|null
    {
    }

    /**
     * @param \Phalcon\Http\RequestInterface $request
     * @return static
     */
    public function setRequest(\Phalcon\Http\RequestInterface $request): static
    {
    }

    /**
     * @return AuthUser|null
     */
    public function user(): AuthUser|null
    {
    }

    /**
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool
    {
    }
}
