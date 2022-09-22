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
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Gd extends \Phalcon\Image\Adapter\AbstractAdapter
{
    /**
     * @param string   $file
     * @param int|null $width
     * @param int|null $height
     *
     * @throws Exception
     */
    public function __construct(string $file, int $width = null, int $height = null)
    {
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getVersion(): string
    {
    }

    /**
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $opacity
     *
     * @return void
     */
    protected function processBackground(int $red, int $green, int $blue, int $opacity): void
    {
    }

    /**
     * @param int $radius
     *
     * @return void
     */
    protected function processBlur(int $radius): void
    {
    }

    /**
     * @param int $width
     * @param int $height
     *
     * @return false|resource
     */
    protected function processCreate(int $width, int $height)
    {
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     *
     * @return void
     */
    protected function processCrop(int $width, int $height, int $offsetX, int $offsetY): void
    {
    }

    /**
     * @param int $direction
     *
     * @return void
     */
    protected function processFlip(int $direction): void
    {
    }

    /**
     * @param AdapterInterface $mask
     *
     * @return void
     */
    protected function processMask(AdapterInterface $mask)
    {
    }

    /**
     * @param int $amount
     *
     * @return void
     */
    protected function processPixelate(int $amount): void
    {
    }

    /**
     * @param int  $height
     * @param int  $opacity
     * @param bool $fadeIn
     *
     * @return void
     */
    protected function processReflection(int $height, int $opacity, bool $fadeIn): void
    {
    }

    /**
     * @param string $extension
     * @param int    $quality
     *
     * @return false|string
     * @throws Exception
     */
    protected function processRender(string $extension, int $quality)
    {
    }

    /**
     * @param int $width
     * @param int $height
     *
     * @return void
     */
    protected function processResize(int $width, int $height): void
    {
    }

    /**
     * @param int $degrees
     *
     * @return void
     */
    protected function processRotate(int $degrees): void
    {
    }

    /**
     * @param string $file
     * @param int    $quality
     *
     * @return bool
     * @throws Exception
     */
    protected function processSave(string $file, int $quality): bool
    {
    }

    /**
     * @param int $amount
     *
     * @return void
     */
    protected function processSharpen(int $amount): void
    {
    }

    /**
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
     * @throws Exception
     */
    protected function processText(string $text, $offsetX, $offsetY, int $opacity, int $red, int $green, int $blue, int $size, string $fontFile = null): void
    {
    }

    /**
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @return void
     */
    protected function processWatermark(AdapterInterface $watermark, int $offsetX, int $offsetY, int $opacity): void
    {
    }

    /**
     * Checks the installed version of GD
     *
     * @return void
     * @throws Exception
     */
    private function check(): void
    {
    }
}
