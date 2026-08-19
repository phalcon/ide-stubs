<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator;

use Phalcon\Config\Config;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Paginator\PaginatorTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Paginator\Adapter\AdapterInterface;
use Phalcon\Paginator\Adapter\Model;
use Phalcon\Paginator\Adapter\NativeArray;
use Phalcon\Paginator\Adapter\QueryBuilder;
use Phalcon\Paginator\Adapter\QueryBuilderCursor;
use Throwable;

/**
 * @phpstan-import-type paginator_config from PaginatorTypes
 * @phpstan-import-type paginator_factory_options from PaginatorTypes
 * @phpstan-import-type paginator_services from PaginatorTypes
 */
class PaginatorFactory extends AbstractFactory
{
    /**
     * AdapterFactory constructor.
     *
     * @param paginator_services $services
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
     *      ->columns("inv_id, inv_title")
     *      ->from(Invoices::class)
     *      ->orderBy("inv_title");
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
     * @param Config|paginator_factory_options $config
     * @return AdapterInterface
     */
    public function load($config): AdapterInterface
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param paginator_config $options
     * @param string $name
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return class-string<Throwable>
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return paginator_services
     */
    protected function getServices(): array
    {
    }
}
