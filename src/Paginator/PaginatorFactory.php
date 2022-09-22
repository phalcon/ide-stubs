<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator;

use Phalcon\Paginator\Adapter\AdapterInterface;
use Phalcon\Factory\AbstractFactory;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class PaginatorFactory extends AbstractFactory
{
    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * ```php
     * use Phalcon\Paginator\PaginatorFactory;
     *
     * $builder = $this
     *      ->modelsManager
     *      ->createBuilder()
     *      ->columns("id, name")
     *      ->from(Robots::class)
     *      ->orderBy("name");
     *
     * $options = [
     *     "builder" => $builder,
     *     "limit"   => 20,
     *     "page"    => 1,
     *     "adapter" => "queryBuilder",
     * ];
     *
     * $paginator = (new PaginatorFactory())->load($options);
     * ```
     *
     * @param array|\Phalcon\Config\Config $config = [
     *     'adapter' => 'queryBuilder',
     *     'limit' => 20,
     *     'page' => 1,
     *     'builder' => null
     * ]
     * @return AdapterInterface
     */
    public function load($config): AdapterInterface
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
