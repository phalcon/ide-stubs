<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator\File\Size;

use Phalcon\Messages\Message;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\Validator\File\AbstractFile;

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
 *     new Equal(
 *         [
 *             "size"     => "2M",
 *             "included" => true,
 *             "message"  => ":field exceeds the equal file size (:size)",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "file",
 *         "anotherFile",
 *     ],
 *     new Equal(
 *         [
 *             "size" => [
 *                 "file"        => "2M",
 *                 "anotherFile" => "4M",
 *             ],
 *             "included" => [
 *                 "file"        => false,
 *                 "anotherFile" => true,
 *             ],
 *             "message" => [
 *                 "file"        => "file does not have the right file size",
 *                 "anotherFile" => "anotherFile wrong file size (4MB)",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class Equal extends AbstractFile
{
    protected $template = 'File :field does not have the exact :size file size';

    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'size' => '2.5MB'
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
