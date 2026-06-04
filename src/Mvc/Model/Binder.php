<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Closure;
use Phalcon\Cache\Adapter\AdapterInterface;
use Phalcon\Mvc\Controller\BindModelInterface;
use Phalcon\Mvc\Model\Binder\BindableInterface;
use Phalcon\Mvc\Model\Exceptions\HandlerMustImplementBindable;
use Phalcon\Mvc\Model\Exceptions\InvalidGetModelNameReturn;
use Phalcon\Mvc\Model\Exceptions\MissingMethodName;
use Phalcon\Mvc\Model\Exceptions\MissingModelClassName;
use ReflectionFunction;
use ReflectionMethod;
use ReflectionNamedType;

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
    protected $boundModels = [];

    /**
     * Cache object used for caching parameters for model binding
     *
     * @var AdapterInterface|null
     */
    protected $cache;

    /**
     * Internal cache for caching parameters for model binding during request
     *
     * @var array
     */
    protected $internalCache = [];

    /**
     * Array for original values
     *
     * @var array
     */
    protected $originalValues = [];

    /**
     * Phalcon\Mvc\Model\Binder constructor
     *
     * @param \Phalcon\Cache\Adapter\AdapterInterface|null $cache
     */
    public function __construct(?\Phalcon\Cache\Adapter\AdapterInterface $cache = null)
    {
    }

    /**
     * Bind models into params in proper handler
     *
     * @param object $handler
     * @param array $params
     * @param string $cacheKey
     * @param string|null $methodName
     * @return array
     */
    public function bindToHandler($handler, array $params, string $cacheKey, ?string $methodName = null): array
    {
    }

    /**
     * Return the active bound models
     *
     * @return array
     */
    public function getBoundModels(): array
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
     * Return the array for original values
     *
     * @return array
     */
    public function getOriginalValues(): array
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

    /**
     * Find the model by param value.
     *
     * @return mixed
     * @param mixed $paramValue
     * @param string $className
     */
    protected function findBoundModel($paramValue, string $className): mixed
    {
    }

    /**
     * Get params classes from cache by key
     *
     * @param string $cacheKey
     * @return array|null
     */
    protected function getParamsFromCache(string $cacheKey): array|null
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
}
