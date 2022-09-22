<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator;

use Phalcon\Messages\Message;
use Phalcon\Support\Helper\Arr\Get;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractValidatorComposite;
use Phalcon\Filter\Validation\Validator\File\MimeType;
use Phalcon\Filter\Validation\Validator\File\Resolution\Equal as EqualResolution;
use Phalcon\Filter\Validation\Validator\File\Resolution\Max as MaxResolution;
use Phalcon\Filter\Validation\Validator\File\Resolution\Min as MinResolution;
use Phalcon\Filter\Validation\Validator\File\Size\Equal as EqualFileSize;
use Phalcon\Filter\Validation\Validator\File\Size\Max as MaxFileSize;
use Phalcon\Filter\Validation\Validator\File\Size\Min as MinFileSize;

/**
 * Checks if a value has a correct file
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\File as FileValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "file",
 *     new FileValidator(
 *         [
 *             "maxSize"              => "2M",
 *             "messageSize"          => ":field exceeds the max file size (:size)",
 *             "allowedTypes"         => [
 *                 "image/jpeg",
 *                 "image/png",
 *             ],
 *             "messageType"          => "Allowed file types are :types",
 *             "maxResolution"        => "800x600",
 *             "messageMaxResolution" => "Max resolution of :field is :resolution",
 *             "messageFileEmpty"     => "File is empty",
 *             "messageIniSize"       => "Ini size is not valid",
 *             "messageValid"         => "File is not valid",
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
 *             "allowedTypes" => [
 *                 "file"        => [
 *                     "image/jpeg",
 *                     "image/png",
 *                 ],
 *                 "anotherFile" => [
 *                     "image/gif",
 *                     "image/bmp",
 *                 ],
 *             ],
 *             "messageType" => [
 *                 "file"        => "Allowed file types are image/jpeg and image/png",
 *                 "anotherFile" => "Allowed file types are image/gif and image/bmp",
 *             ],
 *             "maxResolution" => [
 *                 "file"        => "800x600",
 *                 "anotherFile" => "1024x768",
 *             ],
 *             "messageMaxResolution" => [
 *                 "file"        => "Max resolution of file is 800x600",
 *                 "anotherFile" => "Max resolution of file is 1024x768",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class File extends AbstractValidatorComposite
{
    /**
     * Constructor
     *
     * @param array $options = [
     *     'messageMinSize' => '',
     *     'includedMinSize' => false,
     *     'minSize' => 100,
     *     'maxSize' => 1000,
     *     'messageSize' => '',
     *     'includedSize' => false,
     *     'equalSize' => '',
     *     'messageEqualSize' => '',
     *     'allowedTypes' => [],
     *     'messageType' => '',
     *     'maxResolution' => '1000x1000',
     *     'messageMaxResolution' => '',
     *     'includedMaxResolution' => false,
     *     'minResolution => '500x500',
     *     'includedMinResolution' => false,
     *     'messageMinResolution' => '',
     *     'equalResolution' => '1000x1000',
     *     'messageEqualResolution' => '',
     *     'allowEmpty' => false,
     *     'messageFileEmpty' => '',
     *     'messageIniSize' => '',
     *     'messageValid' => ''
     * ]
     */
    public function __construct(array $options = [])
    {
    }
}
