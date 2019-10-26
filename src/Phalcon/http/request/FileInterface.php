<?php

namespace Phalcon\Http\Request;

/**
 * Phalcon\Http\Request\FileInterface
 *
 * Interface for Phalcon\Http\Request\File
 */
interface FileInterface
{

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
