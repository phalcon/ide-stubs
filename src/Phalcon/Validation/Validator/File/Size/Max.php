<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Validation\Validator\File\Size;

use Phalcon\Messages\Message;
use Phalcon\Validation;
use Phalcon\Validation\Validator\File\AbstractFile;

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
 *     new Max(
 *         [
 *             "size"     => "2M",
 *             "included" => true,
 *             "message"  => ":field exceeds the max filesize (:size)",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "file",
 *         "anotherFile",
 *     ],
 *     new Max(
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
 *                 "file"        => "file exceeds the max filesize 2M",
 *                 "anotherFile" => "anotherFile exceeds the max filesize 4M",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class Max extends AbstractFile
{

    protected $template = 'File :field exceeds the size of :size';


    /**
     * Constructor
     *
     * @param array $options = [
     *     'message' => '',
     *     'template' => '',
     *     'size' => '2.5MB',
     *     'included' => false
     * ]
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Executes the validation
     *
     * @param Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(Validation $validation, $field): bool
    {
    }
}
