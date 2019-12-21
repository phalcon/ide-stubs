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
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface AdapterInterface
{

    /**
     * @param string $color
     * @param int $opacity
     * @return AdapterInterface
     */
    public function background(string $color, int $opacity = 100): AdapterInterface;

    /**
     * @param int $radius
     * @return AdapterInterface
     */
    public function blur(int $radius): AdapterInterface;

    /**
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     * @return AdapterInterface
     */
    public function crop(int $width, int $height, int $offsetX = null, int $offsetY = null): AdapterInterface;

    /**
     * @param int $direction
     * @return AdapterInterface
     */
    public function flip(int $direction): AdapterInterface;

    /**
     * @param AdapterInterface $watermark
     * @return AdapterInterface
     */
    public function mask(AdapterInterface $watermark): AdapterInterface;

    /**
     * @param int $amount
     * @return AdapterInterface
     */
    public function pixelate(int $amount): AdapterInterface;

    /**
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     * @return AdapterInterface
     */
    public function reflection(int $height, int $opacity = 100, bool $fadeIn = false): AdapterInterface;

    /**
     * @param string $ext
     * @param int $quality
     * @return string
     */
    public function render(string $ext = null, int $quality = 100): string;

    /**
     * @param int $width
     * @param int $height
     * @param int $master
     * @return AdapterInterface
     */
    public function resize(int $width = null, int $height = null, int $master = Enum::AUTO): AdapterInterface;

    /**
     * @param int $degrees
     * @return AdapterInterface
     */
    public function rotate(int $degrees): AdapterInterface;

    /**
     * @param string $file
     * @param int $quality
     * @return AdapterInterface
     */
    public function save(string $file = null, int $quality = 100): AdapterInterface;

    /**
     * @param int $amount
     * @return AdapterInterface
     */
    public function sharpen(int $amount): AdapterInterface;

    /**
     * @param string $text
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @param string $color
     * @param int $size
     * @param string $fontfile
     * @return AdapterInterface
     */
    public function text(string $text, int $offsetX = 0, int $offsetY = 0, int $opacity = 100, string $color = '000000', int $size = 12, string $fontfile = null): AdapterInterface;

    /**
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @return AdapterInterface
     */
    public function watermark(AdapterInterface $watermark, int $offsetX = 0, int $offsetY = 0, int $opacity = 100): AdapterInterface;
}
