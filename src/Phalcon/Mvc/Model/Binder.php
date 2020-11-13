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
 * Phalcon\Mvc\Model\Binder
 *
 * This is an class for binding models into params for handler
 */
class Binder implements \Phalcon\Mvc\Model\BinderInterface
{
    /**
     * Array for storing active bound models
     *
     * @var array
     */
    protected $boundModels = array();

    /**
     * Cache object used for caching parameters for model binding
     */
    protected $cache;

    /**
     * Internal cache for caching parameters for model binding during request
     */
    protected $internalCache = array();

    /**
     * Array for original values
     */
    protected $originalValues = array();


    /**
     * Array for storing active bound models
     *
     * @return array
     */
    public function getBoundModels(): array
    {
    }

    /**
     * Array for original values
     */
    public function getOriginalValues()
    {
    }

    /**
     * Phalcon\Mvc\Model\Binder constructor
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     */
    public function __construct(\Phalcon\Cache\Adapter\AdapterInterface $cache = null)
    {
    }

    /**
     * Bind models into params in proper handler
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param string $methodName
     * @return array
     */
    public function bindToHandler($handler, array $params, string $cacheKey, string $methodName = null): array
    {
    }

    /**
     * Find the model by param value.
     *
     * @return bool
     *
     * @param mixed $paramValue
     * @param string $className
     */
    protected function findBoundModel($paramValue, string $className): bool
    {
    }

    /**
     * Sets cache instance
     *
     * @return AdapterInterface
     */
    public function getCache(): AdapterInterface
    {
    }

    /**
     * Get params classes from cache by key
     *
     * @param string $cacheKey
     * @return array|null
     */
    protected function getParamsFromCache(string $cacheKey): ?array
    {
    }

    /**
     * Get modified params for handler using reflection
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param string $methodName
     * @return array
     */
    protected function getParamsFromReflection($handler, array $params, string $cacheKey, string $methodName): array
    {
    }

    /**
     * Gets cache instance
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface $cache
     * @return BinderInterface
     */
    public function setCache(\Phalcon\Cache\Adapter\AdapterInterface $cache): BinderInterface
    {
    }
}
