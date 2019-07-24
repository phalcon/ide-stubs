<?php

namespace Phalcon\Image\Adapter;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface AdapterInterface
{

    /**
     * @param string $color
     * @param int $opacity
     */
    public function background(string $color, int $opacity = 100);

    /**
     * @param int $radius
     */
    public function blur(int $radius);

    /**
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     */
    public function crop(int $width, int $height, int $offsetX = null, int $offsetY = null);

    /**
     * @param int $direction
     */
    public function flip(int $direction);

    /**
     * @param AdapterInterface $watermark
     */
    public function mask(AdapterInterface $watermark);

    /**
     * @param int $amount
     */
    public function pixelate(int $amount);

    /**
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     */
    public function reflection(int $height, int $opacity = 100, bool $fadeIn = false);

    /**
     * @param string $ext
     * @param int $quality
     */
    public function render(string $ext = null, int $quality = 100);

    /**
     * @param int $width
     * @param int $height
     * @param int $master
     */
    public function resize(int $width = null, int $height = null, int $master = Image::AUTO);

    /**
     * @param int $degrees
     */
    public function rotate(int $degrees);

    /**
     * @param string $file
     * @param int $quality
     */
    public function save(string $file = null, int $quality = 100);

    /**
     * @param int $amount
     */
    public function sharpen(int $amount);

    /**
     * @param string $text
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @param string $color
     * @param int $size
     * @param string $fontfile
     */
    public function text(string $text, int $offsetX = 0, int $offsetY = 0, int $opacity = 100, string $color = '000000', int $size = 12, string $fontfile = null);

    /**
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     */
    public function watermark(AdapterInterface $watermark, int $offsetX = 0, int $offsetY = 0, int $opacity = 100);

}
