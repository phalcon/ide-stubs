<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Image;

use Exception as BaseException;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Image\ImageTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Image\Adapter\AdapterInterface;
use Phalcon\Image\Adapter\Gd;
use Phalcon\Image\Adapter\Imagick;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use Throwable;

/**
 * Factory to create adapters for image manipulation
 *
 * @phpstan-import-type image_factory_config from ImageTypes
 * @phpstan-import-type image_factory_services from ImageTypes
 */
class ImageFactory extends AbstractFactory
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;



    /**
     * Constructor
     *
     * @phpstan-param image_factory_services $services
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @phpstan-param ConfigInterface|image_factory_config $config
     *
     * @param array|ConfigInterface $config = [
     *     'adapter' => 'gd',
     *     'file' => 'image.jpg',
     *     'height' => null,
     *     'width' => null
     * ]
     * @return AdapterInterface
     */
    public function load($config): AdapterInterface
    {
    }

    /**
     * Creates a new instance
     *
     * @throws BaseException
     * @param string $name
     * @param string $file
     * @param int|null $width
     * @param int|null $height
     * @return AdapterInterface
     */
    public function newInstance(string $name, string $file, ?int $width = null, ?int $height = null): AdapterInterface
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
     * @phpstan-return image_factory_services
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
