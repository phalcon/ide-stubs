<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Image\Adapter;

use Phalcon\Image\Enum;

/**
 * Phalcon\Image\Adapter
 *
 * All image adapters must use this class
 */
abstract class AbstractAdapter implements \Phalcon\Image\Adapter\AdapterInterface
{

    protected static $checked = false;


    protected $file;

    /**
     * Image height
     *
     * @var int
     */
    protected $height;


    protected $image;

    /**
     * Image mime type
     *
     * @var string
     */
    protected $mime;


    protected $realpath;

    /**
     * Image type
     *
     * Driver dependent
     *
     * @var int
     */
    protected $type;

    /**
     * Image width
     *
     * @var int
     */
    protected $width;


    /**
     * Image height
     *
     * @return int
     */
    public function getHeight(): int
    {
    }


    public function getImage()
    {
    }

    /**
     * Image mime type
     *
     * @return string
     */
    public function getMime(): string
    {
    }


    public function getRealpath()
    {
    }

    /**
     * Image type
     *
     * Driver dependent
     *
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * Image width
     *
     * @return int
     */
    public function getWidth(): int
    {
    }

    /**
     * Set the background color of an image
     *
     * @param string $color
     * @param int $opacity
     * @return AdapterInterface
     */
    public function background(string $color, int $opacity = 100): AdapterInterface
    {
    }

    /**
     * Blur image
     *
     * @param int $radius
     * @return AdapterInterface
     */
    public function blur(int $radius): AdapterInterface
    {
    }

    /**
     * Crop an image to the given size
     *
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     * @return AdapterInterface
     */
    public function crop(int $width, int $height, int $offsetX = null, int $offsetY = null): AdapterInterface
    {
    }

    /**
     * Flip the image along the horizontal or vertical axis
     *
     * @param int $direction
     * @return AdapterInterface
     */
    public function flip(int $direction): AdapterInterface
    {
    }

    /**
     * This method scales the images using liquid rescaling method. Only support
     * Imagick
     *
     * @param int $width   new width
     * @param int $height  new height
     * @param int $deltaX How much the seam can traverse on x-axis. Passing 0 causes the seams to be straight.
     * @param int $rigidity Introduces a bias for non-straight seams. This parameter is typically 0.
     * @return AbstractAdapter
     */
    public function liquidRescale(int $width, int $height, int $deltaX = 0, int $rigidity = 0): AbstractAdapter
    {
    }

    /**
     * Composite one image onto another
     *
     * @param AdapterInterface $watermark
     * @return AdapterInterface
     */
    public function mask(AdapterInterface $watermark): AdapterInterface
    {
    }

    /**
     * Pixelate image
     *
     * @param int $amount
     * @return AdapterInterface
     */
    public function pixelate(int $amount): AdapterInterface
    {
    }

    /**
     * Add a reflection to an image
     *
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     * @return AdapterInterface
     */
    public function reflection(int $height, int $opacity = 100, bool $fadeIn = false): AdapterInterface
    {
    }

    /**
     * Render the image and return the binary string
     *
     * @param string $ext
     * @param int $quality
     * @return string
     */
    public function render(string $ext = null, int $quality = 100): string
    {
    }

    /**
     * Resize the image to the given size
     *
     * @param int $width
     * @param int $height
     * @param int $master
     * @return AdapterInterface
     */
    public function resize(int $width = null, int $height = null, int $master = Enum::AUTO): AdapterInterface
    {
    }

    /**
     * Rotate the image by a given amount
     *
     * @param int $degrees
     * @return AdapterInterface
     */
    public function rotate(int $degrees): AdapterInterface
    {
    }

    /**
     * Save the image
     *
     * @param string $file
     * @param int $quality
     * @return AdapterInterface
     */
    public function save(string $file = null, int $quality = -1): AdapterInterface
    {
    }

    /**
     * Sharpen the image by a given amount
     *
     * @param int $amount
     * @return AdapterInterface
     */
    public function sharpen(int $amount): AdapterInterface
    {
    }

    /**
     * Add a text to an image with a specified opacity
     *
     * @param string $text
     * @param mixed $offsetX
     * @param mixed $offsetY
     * @param int $opacity
     * @param string $color
     * @param int $size
     * @param string $fontfile
     * @return AdapterInterface
     */
    public function text(string $text, $offsetX = false, $offsetY = false, int $opacity = 100, string $color = '000000', int $size = 12, string $fontfile = null): AdapterInterface
    {
    }

    /**
     * Add a watermark to an image with the specified opacity
     *
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @return AdapterInterface
     */
    public function watermark(AdapterInterface $watermark, int $offsetX = 0, int $offsetY = 0, int $opacity = 100): AdapterInterface
    {
    }
}
