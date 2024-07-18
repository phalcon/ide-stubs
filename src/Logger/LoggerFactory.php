<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use DateTimeZone;
use Phalcon\Config\ConfigInterface;
use Phalcon\Factory\AbstractConfigFactory;

/**
 * Factory creating logger objects
 */
class LoggerFactory extends AbstractConfigFactory
{
    /**
     * @var AdapterFactory
     */
    private $adapterFactory;

    /**
     * @param AdapterFactory $factory
     */
    public function __construct(AdapterFactory $factory)
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array|ConfigInterface $config = [
     *     'name'     => 'messages',
     *     'adapters' => [
     *         'adapter-name' => [
     *              'adapter' => 'stream',
     *              'name'    => 'file.log',
     *              'options' => [
     *                  'mode'     => 'ab',
     *                  'option'   => null,
     *                  'facility' => null
     *              ],
     *         ],
     *     ]
     * ]
     * @return Logger
     */
    public function load($config): Logger
    {
    }

    /**
     * Returns a Logger object
     *
     * @param string            $name
     * @param array             $adapters
     * @param DateTimeZone|null $timezone
     *
     * @return Logger
     */
    public function newInstance(string $name, array $adapters = [], \DateTimeZone $timezone = null): Logger
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getArrVal(array $collection, $index, $defaultValue = null): mixed
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }
}
