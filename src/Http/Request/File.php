<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Request;

/**
 * Phalcon\Http\Request\File
 *
 * Provides OO wrappers to the $_FILES superglobal
 *
 * ```php
 * use Phalcon\Mvc\Controller;
 *
 * class PostsController extends Controller
 * {
 *     public function uploadAction()
 *     {
 *         // Check if the user has uploaded files
 *         if ($this->request->hasFiles() == true) {
 *             // Print the real file names and their sizes
 *             foreach ($this->request->getUploadedFiles() as $file) {
 *                 echo $file->getName(), " ", $file->getSize(), "\n";
 *             }
 *         }
 *     }
 * }
 * ```
 */
class File implements \Phalcon\Http\Request\FileInterface
{
    /**
     * @var string|null
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $extension;

    /**
     * @var string|null
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $realType;

    /**
     * @var int
     */
    protected $size = 0;

    /**
     * @var string|null
     */
    protected $tmp = null;

    /**
     * @var string
     */
    protected $type;

    /**
     * Phalcon\Http\Request\File constructor
     *
     * @param array $file
     * @param mixed $key
     */
    public function __construct(array $file, $key = null)
    {
    }

    /**
     * @return string|null
     */
    public function getError(): string|null
    {
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
    }

    /**
     * @return string|null
     */
    public function getKey(): string|null
    {
    }

    /**
     * Returns the real name of the uploaded file
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Gets the real mime type of the upload file using finfo
     *
     * @return string
     */
    public function getRealType(): string
    {
    }

    /**
     * Returns the file size of the uploaded file
     *
     * @return int
     */
    public function getSize(): int
    {
    }

    /**
     * Returns the temporary name of the uploaded file
     *
     * @return string
     */
    public function getTempName(): string
    {
    }

    /**
     * Returns the mime type reported by the browser
     * This mime type is not completely secure, use getRealType() instead
     *
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Checks whether the file has been uploaded via Post.
     *
     * @return bool
     */
    public function isUploadedFile(): bool
    {
    }

    /**
     * Moves the temporary file to a destination within the application
     *
     * @param string $destination
     * @return bool
     */
    public function moveTo(string $destination): bool
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    private function getArrVal(array $collection, $index, $defaultValue = null): mixed
    {
    }
}
