<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator\File;

use Phalcon\Messages\Message;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractValidator;

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
     *
     * @var string
     */
    protected $messageFileEmpty = 'Field :field must not be empty';

    /**
     * File exceeds the file size set in PHP configuration
     *
     * @var string
     */
    protected $messageIniSize = 'File :field exceeds the maximum file size';

    /**
     * File is not valid
     *
     * @var string
     */
    protected $messageValid = 'Field :field is not valid';

    /**
     * Empty is empty
     *
     * @return string
     */
    public function getMessageFileEmpty(): string
    {
    }

    /**
     * Empty is empty
     *
     * @param string $messageFileEmpty
     */
    public function setMessageFileEmpty(string $messageFileEmpty)
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
     * File exceeds the file size set in PHP configuration
     *
     * @param string $messageIniSize
     */
    public function setMessageIniSize(string $messageIniSize)
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
     * File is not valid
     *
     * @param string $messageValid
     */
    public function setMessageValid(string $messageValid)
    {
    }

    /**
     * Check upload
     *
     * @param Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function checkUpload(\Phalcon\Filter\Validation $validation, $field): bool
    {
    }

    /**
     * Check if upload is empty
     *
     * @param Validation $validation
     * @param mixed $field
     * @return boolean
     */
    public function checkUploadIsEmpty(\Phalcon\Filter\Validation $validation, $field): bool
    {
    }

    /**
     * Check if upload is valid
     *
     * @param Validation $validation
     * @param mixed $field
     * @return boolean
     */
    public function checkUploadIsValid(\Phalcon\Filter\Validation $validation, $field): bool
    {
    }

    /**
     * Check if uploaded file is larger than PHP allowed size
     *
     * @param Validation $validation
     * @param mixed $field
     * @return boolean
     */
    public function checkUploadMaxSize(\Phalcon\Filter\Validation $validation, $field): bool
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
     * Check on empty
     *
     * @param Validation $validation
     * @param string $field
     * @return bool
     */
    public function isAllowEmpty(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Checks if a file has been uploaded; Internal check that can be
     * overriden in a subclass if you do not want to check uploaded files
     *
     * @param string $name
     * @return bool
     */
    protected function checkIsUploadedFile(string $name): bool
    {
    }
}
