<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Image\Adapter;

/**
 * Phalcon\Image\Adapter\Imagick
 *
 * Image manipulation support. Allows images to be resized, cropped, etc.
 *
 * ```php
 * $image = new \Phalcon\Image\Adapter\Imagick("upload/test.jpg");
 *
 * $image->resize(200, 200)->rotate(90)->crop(100, 100);
 *
 * if ($image->save()) {
 *     echo "success";
 *
 * }
 * ```
 */
class Imagick extends \Phalcon\Image\Adapter\AbstractAdapter
{

    protected static $checked = false;


    protected static $version = 0;


    /**
     * \Phalcon\Image\Adapter\Imagick constructor
     *
     * @param string $file
     * @param int $width
     * @param int $height
     */
    public function __construct(string $file, int $width = null, int $height = null)
    {
    }

    /**
     * Destroys the loaded image to free up resources.
     */
    public function __destruct()
    {
    }

    /**
     * Checks if Imagick is enabled
     *
     * @return bool
     */
    public static function check(): bool
    {
    }

    /**
     * Get instance
     *
     * @return \Imagick
     */
    public function getInternalImInstance(): \Imagick
    {
    }

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @link http://php.net/manual/ru/imagick.constants.php#imagick.constants.resourcetypes
     * @param int $type
     * @param int $limit
     */
    public function setResourceLimit(int $type, int $limit)
    {
    }

    /**
     * Execute a background.
     *
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $opacity
     */
    protected function processBackground(int $r, int $g, int $b, int $opacity)
    {
    }

    /**
     * Blur image
     *
     * @param int $radius Blur radius
     */
    protected function processBlur(int $radius)
    {
    }

    /**
     * Execute a crop.
     *
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     */
    protected function processCrop(int $width, int $height, int $offsetX, int $offsetY)
    {
    }

    /**
     * Execute a flip.
     *
     * @param int $direction
     */
    protected function processFlip(int $direction)
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
     */
    protected function processLiquidRescale(int $width, int $height, int $deltaX, int $rigidity)
    {
    }

    /**
     * Composite one image onto another
     *
     * @param AdapterInterface $image
     */
    protected function processMask(AdapterInterface $image)
    {
    }

    /**
     * Pixelate image
     *
     * @param int $amount amount to pixelate
     */
    protected function processPixelate(int $amount)
    {
    }

    /**
     * Execute a reflection.
     *
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     */
    protected function processReflection(int $height, int $opacity, bool $fadeIn)
    {
    }

    /**
     * Execute a render.
     *
     * @param string $extension
     * @param int $quality
     * @return string
     */
    protected function processRender(string $extension, int $quality): string
    {
    }

    /**
     * Execute a resize.
     *
     * @param int $width
     * @param int $height
     */
    protected function processResize(int $width, int $height)
    {
    }

    /**
     * Execute a rotation.
     *
     * @param int $degrees
     */
    protected function processRotate(int $degrees)
    {
    }

    /**
     * Execute a save.
     *
     * @param string $file
     * @param int $quality
     */
    protected function processSave(string $file, int $quality)
    {
    }

    /**
     * Execute a sharpen.
     *
     * @param int $amount
     */
    protected function processSharpen(int $amount)
    {
    }

    /**
     * Execute a text
     *
     * @param string $text
     * @param mixed $offsetX
     * @param mixed $offsetY
     * @param int $opacity
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $size
     * @param string $fontfile
     */
    protected function processText(string $text, $offsetX, $offsetY, int $opacity, int $r, int $g, int $b, int $size, string $fontfile)
    {
    }

    /**
     * Execute a watermarking.
     *
     * @param AdapterInterface $image
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     */
    protected function processWatermark(AdapterInterface $image, int $offsetX, int $offsetY, int $opacity)
    {
    }
}
