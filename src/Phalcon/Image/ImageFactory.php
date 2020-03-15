<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Image;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Image\Adapter\AdapterInterface;

/**
 * Phalcon\Image/ImageFactory
 */
class ImageFactory extends AbstractFactory
{

    /**
     * TagFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array|\Phalcon\Config $config = [
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
     * @param string $name
     * @param string $file
     * @param int $width
     * @param int $height
     * @return AdapterInterface
     */
    public function newInstance(string $name, string $file, int $width = null, int $height = null): AdapterInterface
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
