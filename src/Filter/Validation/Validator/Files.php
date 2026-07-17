<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Filter\Validation\Validator;

use Phalcon\Messages\Messages;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\AbstractValidator;

/**
 * Validates an array of uploaded files by delegating each file to the `File`
 * validator. Accepts the same options as `Phalcon\Filter\Validation\Validator\File`
 * and forwards them to each delegated file. A standard multiple-file upload
 * (`<input name="files[]" type="file" multiple>`) arrives as a transposed
 * `$_FILES` node; this validator normalizes it into individual files and fails
 * on the first file that violates a rule.
 *
 * ```php
 * use Phalcon\Filter\Validation;
 * use Phalcon\Filter\Validation\Validator\Files as FilesValidator;
 *
 * $validation = new Validation();
 *
 * $validation->add(
 *     "photos",
 *     new FilesValidator(
 *         [
 *             "maxSize"      => "2M",
 *             "messageSize"  => ":field exceeds the max file size (:size)",
 *             "allowedTypes" => ["image/jpeg", "image/png"],
 *             "messageType"  => "Allowed file types are :types",
 *         ]
 *     )
 * );
 * ```
 */
class Files extends AbstractValidator
{
    /**
     * Whole-field empty check: true when the field carries no uploaded files.
     *
     * @param Validation $validation
     * @param string     $field
     *
     * @return bool
     */
    public function isAllowEmpty(\Phalcon\Filter\Validation $validation, string $field): bool
    {
    }

    /**
     * Executes the validation, delegating each file to a `File` validator.
     *
     * @param Validation $validation
     * @param mixed      $field
     *
     * @return bool
     * @throws Validation\Exception
     */
    public function validate(\Phalcon\Filter\Validation $validation, $field): bool
    {
    }

    /**
     * Normalizes a single file or a transposed multi-file `$_FILES` node into a
     * list of single-file structures.
     *
     * @param mixed $value
     *
     * @return array
     */
    protected function normalizeFiles($value): array
    {
    }
}
