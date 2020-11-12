<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate;

use Phalcon\Config;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Helper\Arr;
use Phalcon\Translate\Adapter\AdapterInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class TranslateFactory extends AbstractFactory
{
    /**
     * @var InterpolatorFactory
     */
    private $interpolator;


    /**
     * AdapterFactory constructor.
     *
     * @param InterpolatorFactory $interpolator
     * @param array $services
     */
    public function __construct(InterpolatorFactory $interpolator, array $services = array())
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array|\Phalcon\Config = [
     *     'adapter' => 'ini,
     *     'options' => [
     *         'content' => '',
     *         'delimiter' => ';',
     *         'enclosure' => '"',
     *         'locale' => '',
     *         'defaultDomain' => '',
     *         'directory' => '',
     *         'category' => ''
     *         'triggerError' => false
     *     ]
     * ]
     * @param mixed $config
     * @param array|\Phalcon\Config  = [
     *     'adapter' => 'ini,
     *     'options' => [
     *         'content' => '',
     *         'delimiter' => ';',
     *         'enclosure' => '"',
     *         'locale' => '',
     *         'defaultDomain' => '',
     *         'directory' => '',
     *         'category' => ''
     *         'triggerError' => false
     *     ]
     * ]
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
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = array()): AdapterInterface
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
