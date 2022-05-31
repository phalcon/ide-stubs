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
use Phalcon\Image\Exception;

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
 * }
 * ```
 */
class Imagick extends \Phalcon\Image\Adapter\AbstractAdapter
{

    /**
     * @var bool
     */
    protected static $checked = false;

    /**
     * @var int
     */
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
     * @return void
     */
    public function setResourceLimit(int $type, int $limit): void
    {
    }

    /**
     * Execute a background.
     *
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $opacity
     * @return void
     */
    protected function processBackground(int $r, int $g, int $b, int $opacity): void
    {
    }

    /**
     * Blur image
     *
     * @param int $radius Blur radius
     * @return void
     */
    protected function processBlur(int $radius): void
    {
    }

    /**
     * Execute a crop.
     *
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     * @return void
     */
    protected function processCrop(int $width, int $height, int $offsetX, int $offsetY): void
    {
    }

    /**
     * Execute a flip.
     *
     * @param int $direction
     * @return void
     */
    protected function processFlip(int $direction): void
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
     * @return void
     */
    protected function processLiquidRescale(int $width, int $height, int $deltaX, int $rigidity): void
    {
    }

    /**
     * Composite one image onto another
     *
     * @param AdapterInterface $image
     * @return void
     */
    protected function processMask(AdapterInterface $image): void
    {
    }

    /**
     * Pixelate image
     *
     * @param int $amount amount to pixelate
     * @return void
     */
    protected function processPixelate(int $amount): void
    {
    }

    /**
     * Execute a reflection.
     *
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     * @return void
     */
    protected function processReflection(int $height, int $opacity, bool $fadeIn): void
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
     * @return void
     */
    protected function processResize(int $width, int $height): void
    {
    }

    /**
     * Execute a rotation.
     *
     * @param int $degrees
     * @return void
     */
    protected function processRotate(int $degrees): void
    {
    }

    /**
     * Execute a save.
     *
     * @param string $file
     * @param int $quality
     * @return void
     */
    protected function processSave(string $file, int $quality): void
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
