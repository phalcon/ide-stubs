<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Image\Adapter;

use Imagick as ImagickNative;
use ImagickDraw;
use ImagickDrawException;
use ImagickException;
use ImagickPixel;
use ImagickPixelException;
use Phalcon\Image\Enum;
use Phalcon\Image\Exception;

/**
 * Phalcon\Image\Adapter\Imagick
 *
 * Image manipulation support. Resize, rotate, crop etc.
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
     * @var int
     */
    protected $version = 0;

    /**
     * Constructor
     *
     * @param string   $file
     * @param int|null $width
     * @param int|null $height
     *
     * @throws Exception
     * @throws ImagickException
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
     * This method scales the images using liquid rescaling method. Only support
     * Imagick
     *
     * @param int $width    new width
     * @param int $height   new height
     * @param int $deltaX   How much the seam can traverse on x-axis. Passing
     *                      0 causes the seams to be straight.
     * @param int $rigidity Introduces a bias for non-straight seams. This
     *                      parameter is typically 0.
     *
     * @return AbstractAdapter
     * @throws Exception
     * @throws ImagickException
     */
    public function liquidRescale(int $width, int $height, int $deltaX = 0, int $rigidity = 0): AbstractAdapter
    {
    }

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @param int $type
     * @param int $limit
     *
     * @return void
     * @throws Exception
     * @throws ImagickException
     *
     * @link https://www.php.net/manual/en/imagick.constants.php#imagick.constants.resourcetypes
     */
    public function setResourceLimit(int $type, int $limit): void
    {
    }

    /**
     * Execute a background.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $opacity
     *
     * @return void
     * @throws Exception
     * @throws ImagickException
     * @throws ImagickPixelException
     */
    protected function processBackground(int $red, int $green, int $blue, int $opacity): void
    {
    }

    /**
     * Blur image
     *
     * @param int $radius Blur radius
     *
     * @return void
     * @throws ImagickException
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
     *
     * @return void
     * @throws ImagickException
     */
    protected function processCrop(int $width, int $height, int $offsetX, int $offsetY): void
    {
    }

    /**
     * Execute a flip.
     *
     * @param int $direction
     *
     * @return void
     * @throws ImagickException
     */
    protected function processFlip(int $direction): void
    {
    }

    /**
     * Composite one image onto another
     *
     * @param AdapterInterface $image
     *
     * @return void
     * @throws Exception
     * @throws ImagickException
     */
    protected function processMask(AdapterInterface $image): void
    {
    }

    /**
     * Pixelate image
     *
     * @param int $amount amount to pixelate
     *
     * @return void
     * @throws ImagickException
     */
    protected function processPixelate(int $amount): void
    {
    }

    /**
     * Execute a reflection.
     *
     * @param int  $height
     * @param int  $opacity
     * @param bool $fadeIn
     *
     * @return void
     * @throws Exception
     * @throws ImagickException
     */
    protected function processReflection(int $height, int $opacity, bool $fadeIn): void
    {
    }

    /**
     * Execute a render.
     *
     * @param string $extension
     * @param int    $quality
     *
     * @return string
     * @throws ImagickException
     */
    protected function processRender(string $extension, int $quality): string
    {
    }

    /**
     * Execute a resize.
     *
     * @param int $width
     * @param int $height
     *
     * @return void
     * @throws ImagickException
     */
    protected function processResize(int $width, int $height): void
    {
    }

    /**
     * Execute a rotation.
     *
     * @param int $degrees
     *
     * @return void
     * @throws ImagickException
     */
    protected function processRotate(int $degrees): void
    {
    }

    /**
     * Execute a save.
     *
     * @param string $file
     * @param int    $quality
     *
     * @return void
     * @throws ImagickException
     */
    protected function processSave(string $file, int $quality): void
    {
    }

    /**
     * Execute a sharpen.
     *
     * @param int $amount
     *
     * @return void
     * @throws ImagickException
     */
    protected function processSharpen(int $amount): void
    {
    }

    /**
     * Execute a text
     *
     * @param string      $text
     * @param mixed       $offsetX
     * @param mixed       $offsetY
     * @param int         $opacity
     * @param int         $red
     * @param int         $green
     * @param int         $blue
     * @param int         $size
     * @param string|null $fontFile
     *
     * @return void
     * @throws ImagickDrawException
     * @throws ImagickException
     * @throws ImagickPixelException
     */
    protected function processText(string $text, $offsetX, $offsetY, int $opacity, int $red, int $green, int $blue, int $size, string $fontFile = null): void
    {
    }

    /**
     * Add Watermark
     *
     * @param AdapterInterface $image
     * @param int              $offsetX
     * @param int              $offsetY
     * @param int              $opacity
     *
     * @return void
     * @throws Exception
     * @throws ImagickException
     */
    protected function processWatermark(AdapterInterface $image, int $offsetX, int $offsetY, int $opacity): void
    {
    }

    /**
     * Checks if Imagick is enabled
     *
     * @return void
     * @throws Exception
     */
    private function check(): void
    {
    }
}
