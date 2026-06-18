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
use Phalcon\Image\Exceptions\InvalidColor;
use Phalcon\Image\Exceptions\MissingDimensions;
use Phalcon\Image\Exceptions\MissingHeight;
use Phalcon\Image\Exceptions\MissingWidth;

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
    public function crop(int $width, int $height, $offsetX = null, $offsetY = null): AdapterInterface
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
     * The mask is read through its public render() output rather than its
     * internal handle, so a mask created with a different backend composites
     * correctly. The cost is one encode/decode round trip per call, which is
     * worth knowing inside loops.
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
    public function render(?string $extension = null, int $quality = 100): string
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
    public function resize(?int $width = null, ?int $height = null, int $master = Enum::AUTO): AdapterInterface
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
    public function save(?string $file = null, int $quality = -1): AdapterInterface
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
    public function text(string $text, $offsetX = false, $offsetY = false, int $opacity = 100, string $color = '000000', int $size = 12, ?string $fontFile = null): AdapterInterface
    {
    }

    /**
     * Add a watermark to an image with the specified opacity
     *
     * The watermark is read through its public render() output rather than its
     * internal handle, so a watermark created with a different backend
     * composites correctly. The cost is one encode/decode round trip per call,
     * which is worth knowing inside loops.
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

    /**
     * Renders the supplied colour onto the image as the background. Channels
     * are 0-255; the opacity is the validated 0-100 value.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $opacity
     * @return void
     */
    abstract protected function processBackground(int $red, int $green, int $blue, int $opacity): void;

    /**
     * Applies a blur. The radius is already clamped to 1-100.
     *
     * @param int $radius
     * @return void
     */
    abstract protected function processBlur(int $radius): void;

    /**
     * Crops the image. Width, height and both offsets are already normalized
     * to fit within the current canvas.
     *
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     * @return void
     */
    abstract protected function processCrop(int $width, int $height, int $offsetX, int $offsetY): void;

    /**
     * Flips the image. The direction is already normalized to
     * Enum::HORIZONTAL or Enum::VERTICAL.
     *
     * @param int $direction
     * @return void
     */
    abstract protected function processFlip(int $direction): void;

    /**
     * Composites the supplied image as a mask onto this one. The mask is read
     * through its public render() output, so it may be any adapter backend.
     *
     * @param AdapterInterface $mask
     */
    abstract protected function processMask(AdapterInterface $mask);

    /**
     * Pixelates the image. The amount is already at least 2.
     *
     * @param int $amount
     * @return void
     */
    abstract protected function processPixelate(int $amount): void;

    /**
     * Adds a reflection. The height is clamped to the image height and the
     * opacity to 0-100.
     *
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     * @return void
     */
    abstract protected function processReflection(int $height, int $opacity, bool $fadeIn): void;

    /**
     * Renders the image to a binary string. The extension is non-empty and the
     * quality is already clamped to 1-100. Returns the encoded bytes.
     *
     * @param string $extension
     * @param int $quality
     */
    abstract protected function processRender(string $extension, int $quality);

    /**
     * Resizes the image. Width and height are already resolved to positive
     * integers per the requested resize mode.
     *
     * @param int $width
     * @param int $height
     * @return void
     */
    abstract protected function processResize(int $width, int $height): void;

    /**
     * Rotates the image. The degrees value is already normalized to -180..180.
     *
     * @param int $degrees
     * @return void
     */
    abstract protected function processRotate(int $degrees): void;

    /**
     * Saves the image to the supplied file path.
     *
     * @param string $file
     * @param int $quality
     */
    abstract protected function processSave(string $file, int $quality);

    /**
     * Sharpens the image. The amount is already clamped to 1-100.
     *
     * @param int $amount
     * @return void
     */
    abstract protected function processSharpen(int $amount): void;

    /**
     * Renders text onto the image. The opacity is clamped to 0-100 and the
     * colour is supplied as separate 0-255 channels.
     *
     * @param string $text
     * @param mixed $offsetX
     * @param mixed $offsetY
     * @param int $opacity
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $size
     * @param string|null $fontFile
     * @return void
     */
    abstract protected function processText(string $text, $offsetX, $offsetY, int $opacity, int $red, int $green, int $blue, int $size, ?string $fontFile = null): void;

    /**
     * Composites the supplied watermark onto this image. Offsets and opacity
     * are already clamped to the valid range; the watermark is read through
     * its public render() output, so it may be any adapter backend.
     *
     * @param AdapterInterface $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @return void
     */
    abstract protected function processWatermark(AdapterInterface $watermark, int $offsetX, int $offsetY, int $opacity): void;

    /**
     * Parses a hex color ("#rgb", "rgb", "#rrggbb" or "rrggbb") into an array
     * of three integer channels [red, green, blue].
     *
     * @param string $color
     *
     * @return array
     * @throws InvalidColor
     */
    private function parseColor(string $color): array
    {
    }
}
