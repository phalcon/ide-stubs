<?php

namespace Phalcon\Image\Adapter;

/**
 * Phalcon\Image\Adapter
 *
 * All image adapters must use this class
 */
abstract class AbstractAdapter implements \Phalcon\Image\Adapter\AdapterInterface
{

    static protected $checked = false;


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
    public function getHeight(): int {}


    public function getImage() {}

    /**
     * Image mime type
     *
     * @return string
     */
    public function getMime(): string {}


    public function getRealpath() {}

    /**
     * Image type
     *
     * Driver dependent
     *
     * @return int
     */
    public function getType(): int {}

    /**
     * Image width
     *
     * @return int
     */
    public function getWidth(): int {}

    /**
     * Set the background color of an image
     *
     * @param string $color
     * @param int $opacity
     * @return Adapter
     */
    public function background(string $color, int $opacity = 100): Adapter {}

    /**
     * Blur image
     *
     * @param int $radius
     * @return Adapter
     */
    public function blur(int $radius): Adapter {}

    /**
     * Crop an image to the given size
     *
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     * @return Adapter
     */
    public function crop(int $width, int $height, int $offsetX = null, int $offsetY = null): Adapter {}

    /**
     * Flip the image along the horizontal or vertical axis
     *
     * @param int $direction
     * @return Adapter
     */
    public function flip(int $direction): Adapter {}

    /**
     * This method scales the images using liquid rescaling method. Only support
     * Imagick
     *
     * @param int $width new width
     * @param int $height new height
     * @param int $deltaX How much the seam can traverse on x-axis. Passing 0 causes the seams to be straight.
     * @param int $rigidity Introduces a bias for non-straight seams. This parameter is typically 0.
     * @return Adapter
     */
    public function liquidRescale(int $width, int $height, int $deltaX = 0, int $rigidity = 0): Adapter {}

    /**
     * Composite one image onto another
     *
     * @param AdapterInterface $watermark
     * @return Adapter
     */
    public function mask(AdapterInterface $watermark): Adapter {}

    /**
     * Pixelate image
     *
     * @param int $amount
     * @return Adapter
     */
    public function pixelate(int $amount): Adapter {}

    /**
     * Add a reflection to an image
     *
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     * @return Adapter
     */
    public function reflection(int $height, int $opacity = 100, bool $fadeIn = false): Adapter {}

    /**
     * Render the image and return the binary string
     *
     * @param string $ext
     * @param int $quality
     * @return string
     */
    public function render(string $ext = null, int $quality = 100): string {}

    /**
     * Resize the image to the given size
     *
     * @param int $width
     * @param int $height
     * @param int $master
     * @return Adapter
     */
    public function resize(int $width = null, int $height = null, int $master = Enum::AUTO): Adapter {}

    /**
     * Rotate the image by a given amount
     *
     * @param int $degrees
     * @return Adapter
     */
    public function rotate(int $degrees): Adapter {}

    /**
     * Save the image
     *
     * @param string $file
     * @param int $quality
     * @return Adapter
     */
    public function save(string $file = null, int $quality = -1): Adapter {}

    /**
     * Sharpen the image by a given amount
     *
     * @param int $amount
     * @return Adapter
     */
    public function sharpen(int $amount): Adapter {}

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
     * @return Adapter
     */
    public function text(string $text, $offsetX = false, $offsetY = false, int $opacity = 100, string $color = '000000', int $size = 12, string $fontfile = null): Adapter {}

    /**
     * Add a watermark to an image with the specified opacity
     *
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @return Adapter
     */
    public function watermark(AdapterInterface $watermark, int $offsetX = 0, int $offsetY = 0, int $opacity = 100): Adapter {}

}
