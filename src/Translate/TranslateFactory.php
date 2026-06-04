<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate;

use Phalcon\Config\ConfigInterface;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Translate\Adapter\AdapterInterface;

/**
 * @property InterpolatorFactory $interpolator
 *
 * @psalm-type TConfig array{
 *      adapter: string,
 *      options?: array{
 *          content: string,
 *          delimiter: string,
 *          enclosure: string,
 *          locale: string,
 *          defaultDomain: string,
 *          directory: string,
 *          category: string,
 *          triggerError: bool,
 *      }
 *  }
 */
class TranslateFactory extends AbstractFactory
{
    /**
     * @var InterpolatorFactory
     */
    private $interpolator;

    /**
     * @phpstan-param array<string, string> $services
     * @param InterpolatorFactory $interpolator
     * @param array $services
     */
    public function __construct(InterpolatorFactory $interpolator, array $services = [])
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param ConfigInterface|TConfig $config
     *
     * @return AdapterInterface
     * @throws Exception
     */
    public function load($config): AdapterInterface
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @phpstan-param array<string, mixed> $options
     *
     * @return AdapterInterface
     * @param string $name
     * @param array $options
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
