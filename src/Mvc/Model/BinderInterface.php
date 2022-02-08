<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Cache\Adapter\AdapterInterface;

/**
 * Phalcon\Mvc\Model\BinderInterface
 *
 * Interface for Phalcon\Mvc\Model\Binder
 */
interface BinderInterface
{
    /**
     * Bind models into params in proper handler
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param string $methodName
     * @return array
     */
    public function bindToHandler($handler, array $params, string $cacheKey, string $methodName = null): array;

    /**
     * Gets active bound models
     *
     * @return array
     */
    public function getBoundModels(): array;

    /**
     * Gets cache instance
     *
     * @return AdapterInterface
     */
    public function getCache(): AdapterInterface;

    /**
     * Sets cache instance
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @return BinderInterface
     */
    public function setCache(\Phalcon\Cache\Adapter\AdapterInterface $cache): BinderInterface;
}
