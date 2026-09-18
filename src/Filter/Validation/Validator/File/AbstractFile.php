<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator\File;

use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractValidator;
use Phalcon\Messages\Message;

/**
 * Checks if a value has a correct file
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\File\Size;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "file",
 *     new Size(
 *         [
 *             "maxSize"              => "2M",
 *             "messageSize"          => ":field exceeds the max file size (:size)",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "file",
 *         "anotherFile",
 *     ],
 *     new FileValidator(
 *         [
 *             "maxSize" => [
 *                 "file"        => "2M",
 *                 "anotherFile" => "4M",
 *             ],
 *             "messageSize" => [
 *                 "file"        => "file exceeds the max file size 2M",
 *                 "anotherFile" => "anotherFile exceeds the max file size 4M",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
abstract class AbstractFile extends AbstractValidator
{
    /**
     * Empty is empty
     */
    protected string $messageFileEmpty = 'Field :field must not be empty';

    /**
     * File exceeds the file size set in PHP configuration
     */
    protected string $messageIniSize = 'File :field exceeds the maximum file size';

    /**
     * File is not valid
     */
    protected string $messageValid = 'Field :field is not valid';

    /**
     * Check upload
     *
     * @throws Validation\Exception
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return bool
     */
    public function checkUpload(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Check if upload is empty
     *
     * @throws Validation\Exception
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return bool
     */
    public function checkUploadIsEmpty(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Check if upload is valid
     *
     * @throws Validation\Exception
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return bool
     */
    public function checkUploadIsValid(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Check if uploaded file is larger than PHP allowed size
     *
     * @throws Validation\Exception
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return bool
     */
    public function checkUploadMaxSize(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Convert a string like "2.5MB" in bytes
     *
     * @param string $size
     * @return float
     */
    public function getFileSizeInBytes(string $size): float
    {
    }

    /**
     * Empty is empty
     *
     * @return string
     */
    public function getMessageFileEmpty(): string
    {
    }

    /**
     * File exceeds the file size set in PHP configuration
     *
     * @return string
     */
    public function getMessageIniSize(): string
    {
    }

    /**
     * File is not valid
     *
     * @return string
     */
    public function getMessageValid(): string
    {
    }

    /**
     * Check on empty
     *
     * @throws Validation\Exception
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return bool
     */
    public function isAllowEmpty(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Empty is empty
     *
     * @param string $message
     * @return void
     */
    public function setMessageFileEmpty(string $message): void
    {
    }

    /**
     * File exceeds the file size set in PHP configuration
     *
     * @param string $message
     * @return void
     */
    public function setMessageIniSize(string $message): void
    {
    }

    /**
     * File is not valid
     *
     * @param string $message
     * @return void
     */
    public function setMessageValid(string $message): void
    {
    }

    /**
     * Appends the "file is not valid" message for the field
     *
     * @param \Phalcon\Filter\Validation $validation
     * @param string $field
     * @return void
     */
    protected function appendMessageValid(\Phalcon\Filter\Validation $validation, string $field): void
    {
    }

    /**
     * Checks if a file has been uploaded; Internal check that can be
     * overridden in a subclass if you do not want to check uploaded files
     *
     * @param string $name
     * @return bool
     */
    protected function checkIsUploadedFile(string $name): bool
    {
    }
}
