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
 * Interface for Phalcon\Http\Request\File
 */
interface FileInterface
{
    /**
     * Returns the error if any
     *
     * @return string|null
     */
    public function getError(): string|null;

    /**
     * Returns the real name of the uploaded file
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets the real mime type of the upload file using finfo
     *
     * @return string
     */
    public function getRealType(): string;

    /**
     * Returns the file size of the uploaded file
     *
     * @return int
     */
    public function getSize(): int;

    /**
     * Returns the temporal name of the uploaded file
     *
     * @return string
     */
    public function getTempName(): string;

    /**
     * Returns the mime type reported by the browser
     * This mime type is not completely secure, use getRealType() instead
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Move the temporary file to a destination
     *
     * @param string $destination
     * @return bool
     */
    public function moveTo(string $destination): bool;
}
