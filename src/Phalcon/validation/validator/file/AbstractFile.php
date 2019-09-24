<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Validation\Validator\File;

use Phalcon\Validation\AbstractValidator;

/**
 * Checks if a value has a correct file
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\File\Size;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "file",
 *     new Size(
 *         [
 *             "maxSize"              => "2M",
 *             "messageSize"          => ":field exceeds the max filesize (:size)",
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
 *                 "file"        => "file exceeds the max filesize 2M",
 *                 "anotherFile" => "anotherFile exceeds the max filesize 4M",
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
    protected $messageFileEmpty = 'Field :field must not be empty';

    /**
     * File exceeed the file size setted in PHP configuration
     */
    protected $messageIniSize = 'File :field exceeds the maximum file size';

    /**
     * File is not valid
     */
    protected $messageValid = 'Field :field is not valid';


    /**
     * Empty is empty
     */
    public function getMessageFileEmpty()
    {
    }

    /**
     * Empty is empty
     *
     * @param mixed $messageFileEmpty
     */
    public function setMessageFileEmpty($messageFileEmpty)
    {
    }

    /**
     * File exceeed the file size setted in PHP configuration
     */
    public function getMessageIniSize()
    {
    }

    /**
     * File exceeed the file size setted in PHP configuration
     *
     * @param mixed $messageIniSize
     */
    public function setMessageIniSize($messageIniSize)
    {
    }

    /**
     * File is not valid
     */
    public function getMessageValid()
    {
    }

    /**
     * File is not valid
     *
     * @param mixed $messageValid
     */
    public function setMessageValid($messageValid)
    {
    }

    /**
     * Check on empty
     *
     * @param Valiation $validation
     * @param mixed $field
     * @return bool
     */
    public function isAllowEmpty(\Phalcon\Validation $validation, string $field): bool
    {
    }

    /**
     * Check upload
     *
     * @param Valiation $validation
     * @param mixed $field
     * @return bool
     */
    public function checkUpload(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * Check if uploaded file is larger than PHP allowed size
     *
     * @param Valiation $validation
     * @param mixed $field
     * @return bool
     */
    public function checkUploadMaxSize(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * Check if upload is empty
     *
     * @param Valiation $validation
     * @param mixed $field
     * @return bool
     */
    public function checkUploadIsEmpty(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * Check if upload is valid
     *
     * @param Valiation $validation
     * @param mixed $field
     * @return bool
     */
    public function checkUploadIsValid(\Phalcon\Validation $validation, $field): bool
    {
    }

    /**
     * Convert a string like "2.5MB" in bytes
     *
     * @param string $size
     * @return double
     */
    public function getFileSizeInBytes(string $size): float
    {
    }
}
