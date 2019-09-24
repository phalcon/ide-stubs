<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Paginator;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Paginator\Adapter\AbstractAdapter;

class PaginatorFactory extends AbstractFactory
{

    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
    }

    /**
     * Factory to create an instace from a Config object
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
     * @param mixed $config
     * @return mixed
     */
    public function load($config)
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return \Phalcon\Paginator\Adapter\AbstractAdapter
     */
    public function newInstance(string $name, array $options = array()): AbstractAdapter
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
