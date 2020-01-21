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
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Gd extends \Phalcon\Image\Adapter\AbstractAdapter
{

    protected static $checked = false;


    /**
     * @param string $file
     * @param int $width
     * @param int $height
     */
    public function __construct(string $file, int $width = null, int $height = null)
    {
    }


    public function __destruct()
    {
    }

    /**
     * @return bool
     */
    public static function check(): bool
    {
    }

    /**
     * @return string
     */
    public static function getVersion(): string
    {
    }

    /**
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $opacity
     */
    protected function processBackground(int $r, int $g, int $b, int $opacity)
    {
    }

    /**
     * @param int $radius
     */
    protected function processBlur(int $radius)
    {
    }

    /**
     * @param int $width
     * @param int $height
     */
    protected function processCreate(int $width, int $height)
    {
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     */
    protected function processCrop(int $width, int $height, int $offsetX, int $offsetY)
    {
    }

    /**
     * @param int $direction
     */
    protected function processFlip(int $direction)
    {
    }

    /**
     * @param AdapterInterface $mask
     */
    protected function processMask(AdapterInterface $mask)
    {
    }

    /**
     * @param int $amount
     */
    protected function processPixelate(int $amount)
    {
    }

    /**
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     */
    protected function processReflection(int $height, int $opacity, bool $fadeIn)
    {
    }

    /**
     * @param string $ext
     * @param int $quality
     */
    protected function processRender(string $ext, int $quality)
    {
    }

    /**
     * @param int $width
     * @param int $height
     */
    protected function processResize(int $width, int $height)
    {
    }

    /**
     * @param int $degrees
     */
    protected function processRotate(int $degrees)
    {
    }

    /**
     * @param string $file
     * @param int $quality
     */
    protected function processSave(string $file, int $quality)
    {
    }

    /**
     * @param int $amount
     */
    protected function processSharpen(int $amount)
    {
    }

    /**
     * @param string $text
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $size
     * @param string $fontfile
     */
    protected function processText(string $text, int $offsetX, int $offsetY, int $opacity, int $r, int $g, int $b, int $size, string $fontfile)
    {
    }

    /**
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     */
    protected function processWatermark(AdapterInterface $watermark, int $offsetX, int $offsetY, int $opacity)
    {
    }
}
