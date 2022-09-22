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
 * All image adapters must use this class
 */
abstract class AbstractAdapter implements \Phalcon\Image\Adapter\AdapterInterface
{
    /**
     * @var string
     */
    protected $file;

    /**
     * Image height
     *
     * @var int
     */
    protected $height;

    /**
     * @var mixed|null
     */
    protected $image = null;

    /**
     * Image mime type
     *
     * @var string
     */
    protected $mime;

    /**
     * @var string
     */
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
     * Set the background color of an image
     *
     * @param string $color
     * @param int    $opacity
     *
     * @return AdapterInterface
     */
    public function background(string $color, int $opacity = 100): AdapterInterface
    {
    }

    /**
     * Blur image
     *
     * @param int $radius
     *
     * @return AdapterInterface
     */
    public function blur(int $radius): AdapterInterface
    {
    }

    /**
     * Crop an image to the given size
     *
     * @param int      $width
     * @param int      $height
     * @param int|null $offsetX
     * @param int|null $offsetY
     *
     * @return AdapterInterface
     */
    public function crop(int $width, int $height, int $offsetX = null, int $offsetY = null): AdapterInterface
    {
    }

    /**
     * Flip the image along the horizontal or vertical axis
     *
     * @param int $direction
     *
     * @return AdapterInterface
     */
    public function flip(int $direction): AdapterInterface
    {
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
    }

    /**
     * @return object|null
     */
    public function getImage()
    {
    }

    /**
     * @return string
     */
    public function getMime(): string
    {
    }

    /**
     * @return string
     */
    public function getRealpath(): string
    {
    }

    /**
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
    }

    /**
     * Composite one image onto another
     *
     * @param AdapterInterface $mask
     *
     * @return AdapterInterface
     */
    public function mask(AdapterInterface $mask): AdapterInterface
    {
    }

    /**
     * Pixelate image
     *
     * @param int $amount
     *
     * @return AdapterInterface
     */
    public function pixelate(int $amount): AdapterInterface
    {
    }

    /**
     * Add a reflection to an image
     *
     * @param int  $height
     * @param int  $opacity
     * @param bool $fadeIn
     *
     * @return AdapterInterface
     */
    public function reflection(int $height, int $opacity = 100, bool $fadeIn = false): AdapterInterface
    {
    }

    /**
     * Render the image and return the binary string
     *
     * @param string|null $extension
     * @param int         $quality
     *
     * @return string
     */
    public function render(string $extension = null, int $quality = 100): string
    {
    }

    /**
     * Resize the image to the given size
     *
     * @param int|null $width
     * @param int|null $height
     * @param int      $master
     *
     * @return AdapterInterface
     * @throws Exception
     */
    public function resize(int $width = null, int $height = null, int $master = Enum::AUTO): AdapterInterface
    {
    }

    /**
     * Rotate the image by a given amount
     *
     * @param int $degrees
     *
     * @return AdapterInterface
     */
    public function rotate(int $degrees): AdapterInterface
    {
    }

    /**
     * Save the image
     *
     * @param string|null $file
     * @param int         $quality
     *
     * @return AdapterInterface
     */
    public function save(string $file = null, int $quality = -1): AdapterInterface
    {
    }

    /**
     * Sharpen the image by a given amount
     *
     * @param int $amount
     *
     * @return AdapterInterface
     */
    public function sharpen(int $amount): AdapterInterface
    {
    }

    /**
     * Add a text to an image with a specified opacity
     *
     * @param string      $text
     * @param mixed       $offsetX
     * @param mixed       $offsetY
     * @param int         $opacity
     * @param string      $color
     * @param int         $size
     * @param string|null $fontFile
     *
     * @return AdapterInterface
     */
    public function text(string $text, $offsetX = false, $offsetY = false, int $opacity = 100, string $color = '000000', int $size = 12, string $fontFile = null): AdapterInterface
    {
    }

    /**
     * Add a watermark to an image with the specified opacity
     *
     * @param AdapterInterface $watermark
     * @param int              $offsetX
     * @param int              $offsetY
     * @param int              $opacity
     *
     * @return AdapterInterface
     */
    public function watermark(AdapterInterface $watermark, int $offsetX = 0, int $offsetY = 0, int $opacity = 100): AdapterInterface
    {
    }

    /**
     * @param int $value
     * @param int $min
     * @param int $max
     *
     * @return int
     */
    protected function checkHighLow(int $value, int $min = 0, int $max = 100): int
    {
    }
}
