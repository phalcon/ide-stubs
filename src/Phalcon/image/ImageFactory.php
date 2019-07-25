<?php

namespace Phalcon\Image;

/**
 * Phalcon\Image/ImageFactory
 */
class ImageFactory extends \Phalcon\Factory\AbstractFactory
{

    /**
     * TagFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array()) {}

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return \Phalcon\Image\Adapter\AdapterInterface
     */
    public function load($config): AdapterInterface {}

    /**
     * Creates a new instance
     *
     * @param string $name
     * @param string $file
     * @param int $width
     * @param int $height
     * @return \Phalcon\Image\Adapter\AdapterInterface
     */
    public function newInstance(string $name, string $file, int $width = null, int $height = null): AdapterInterface {}

    /**
     * @return array
     */
    protected function getAdapters(): array {}

}
