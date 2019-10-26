<?php

namespace Phalcon\Validation\Validator\File\Resolution;

use Phalcon\Validation\Validator\File\AbstractFile;

/**
 * Checks if a file has the rigth resolution
 *
 * ```php
 * use Phalcon\Validation;
 * use Phalcon\Validation\Validator\File\Resolution\Min;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "file",
 *     new Min(
 *         [
 *             "resolution" => "800x600",
 *             "message"    => "Min resolution of :field is :resolution",
 *             "included"   => true,
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "file",
 *         "anotherFile",
 *     ],
 *     new Min(
 *         [
 *             "resolution" => [
 *                 "file"        => "800x600",
 *                 "anotherFile" => "1024x768",
 *             ],
 *             "included" => [
 *                 "file"        => false,
 *                 "anotherFile" => true,
 *             ],
 *             "message" => [
 *                 "file"        => "Min resolution of file is 800x600",
 *                 "anotherFile" => "Min resolution of file is 1024x768",
 *             ],
 *         ]
 *     )
 * );
 * ```
 */
class Min extends AbstractFile
{

    protected $template = 'File :field can not have the minimum resolution of :resolution';


    /**
     * Executes the validation
     *
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field): bool
    {
    }
}
