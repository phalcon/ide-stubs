<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Image\Adapter;

use GdImage;
use Phalcon\Contracts\Image\ImageTypes;
use Phalcon\Image\Enum;
use Phalcon\Image\Exception;
use Phalcon\Image\Exceptions\ExtensionNotLoaded;
use Phalcon\Image\Exceptions\ImageLoadFailed;
use Phalcon\Image\Exceptions\TextRenderingFailed;
use Phalcon\Image\Exceptions\UnsupportedImageType;
use Phalcon\Image\Exceptions\VersionMismatch;
use Phalcon\Traits\Php\FileTrait;
use Phalcon\Traits\Php\InfoTrait;

/**
 * Image manipulation backed by the GD extension.
 *
 * Capabilities:
 *
 * | Aspect              | Support                                     |
 * |---------------------|---------------------------------------------|
 * | Load formats        | GIF, JPEG, JPEG 2000, PNG, WEBP, WBMP, XBM  |
 * | Render/save formats | GIF, JPEG, PNG, WBMP, WEBP, XBM             |
 * | Backend-only API    | none                                        |
 *
 * Unsupported render/save formats raise
 * Phalcon\Image\Exceptions\UnsupportedImageType. Visual semantics differ from
 * the Imagick adapter: blur() applies repeated 3x3 Gaussian convolutions
 * (the radius is the number of passes), while sharpen and reflection use GD's
 * own scales. Switching the factory backend can change the rendered output.
 *
 * @extends AbstractAdapter<GdImage>
 *
 * @phpstan-import-type image_crop_rectangle from ImageTypes
 * @phpstan-import-type image_text_bounds from ImageTypes
 */
class Gd extends \Phalcon\Image\Adapter\AbstractAdapter
{
    use \Phalcon\Traits\Php\FileTrait;
    use \Phalcon\Traits\Php\InfoTrait;



    /**
     * Loads an image from a file, or creates a blank canvas.
     *
     * When the file exists it is loaded. When the file does not exist and both
     * a width and a height are supplied, a blank true-color canvas is created
     * instead - its realpath, mime and type then describe a PNG canvas rather
     * than the named file. Prefer Gd::create() for the canvas case; this dual
     * mode is slated for removal in the next major version.
     *
     * @param string   $file
     * @param int|null $width
     * @param int|null $height
     *
     * @throws Exception
     */
    public function __construct(string $file, ?int $width = null, ?int $height = null)
    {
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
    }

    /**
     * Creates a blank true-color canvas of the given dimensions, without the
     * load-or-create ambiguity of the constructor.
     *
     * @phpstan-return AbstractAdapter<GdImage>
     * @throws Exception
     * @param int $width
     * @param int $height
     * @return AbstractAdapter
     */
    public static function create(int $width, int $height): AbstractAdapter
    {
    }

    /**
     * @throws Exception
     * @return string
     */
    public function getVersion(): string
    {
    }

    /**
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $opacity
     * @return void
     */
    protected function processBackground(int $red, int $green, int $blue, int $opacity): void
    {
    }

    /**
     * @param int $radius
     * @return void
     */
    protected function processBlur(int $radius): void
    {
    }

    /**
     * @phpstan-return GdImage
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
     * @return void
     */
    protected function processCrop(int $width, int $height, int $offsetX, int $offsetY): void
    {
    }

    /**
     * @param int $direction
     * @return void
     */
    protected function processFlip(int $direction): void
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
     * @return void
     */
    protected function processPixelate(int $amount): void
    {
    }

    /**
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     * @return void
     */
    protected function processReflection(int $height, int $opacity, bool $fadeIn): void
    {
    }

    /**
     * @param string $extension
     * @param int $quality
     * @return false|string
     */
    protected function processRender(string $extension, int $quality): false|string
    {
    }

    /**
     * @param int $width
     * @param int $height
     * @return void
     */
    protected function processResize(int $width, int $height): void
    {
    }

    /**
     * @param int $degrees
     * @return void
     */
    protected function processRotate(int $degrees): void
    {
    }

    /**
     * @throws Exception
     * @param string $file
     * @param int $quality
     * @return bool
     */
    protected function processSave(string $file, int $quality): bool
    {
    }

    /**
     * @param int $amount
     * @return void
     */
    protected function processSharpen(int $amount): void
    {
    }

    /**
     * @throws Exception
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
    protected function processText(string $text, $offsetX, $offsetY, int $opacity, int $red, int $green, int $blue, int $size, ?string $fontFile = null): void
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
     * @throws Exception
     * @return void
     */
    private function check(): void
    {
    }
}
