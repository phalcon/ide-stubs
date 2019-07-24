<?php

namespace Phalcon\Mvc\Model;

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
     * @return \Phalcon\Cache\Adapter\AdapterInterface
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
