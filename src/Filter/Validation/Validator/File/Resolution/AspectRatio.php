<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator\File\Resolution;

use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\Validator\File\AbstractFile;

/**
 * Checks if a file has the exact aspect ratio
 *
 * The ratio is compared with integer cross-multiplication, so the image
 * dimensions must match the ratio exactly: 1920x1080 matches "16x9",
 * 1366x768 does not.
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\File\Resolution\AspectRatio;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "file",
 *     new AspectRatio(
 *         [
 *             "ratio"   => "16x9",
 *             "message" => "The aspect ratio of the field :field has to be :ratio",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "file",
 *         "anotherFile",
 *     ],
 *     new AspectRatio(
 *         [
 *             "ratio" => [
 *                 "file"        => "16x9",
 *                 "anotherFile" => "4x3",
 *             ],
 *             "message" => [
 *                 "file"        => "Aspect ratio of file has to be 16x9",
 *                 "anotherFile" => "Aspect ratio of anotherFile has to be 4x3",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class AspectRatio extends AbstractFile
{
    protected $template = 'File :field does not have the exact aspect ratio of :ratio';

    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'ratio' => '16x9'
     * ]
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Executes the validation
     *
     * @param \Phalcon\Filter\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Filter\Validation $validation, $field): bool
    {
    }
}
