<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Tag;

use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Tag as BaseTag;
use Stringable;

/**
 * Phalcon\Tag\Select
 *
 * Generates a SELECT HTML tag using a static array of values or a
 * Phalcon\Mvc\Model resultset
 *
 * @phpstan-import-type tag_parameters from BaseTag
 * @phpstan-import-type tag_select_data from BaseTag
 */
abstract class Select
{
    /**
     * Generates a SELECT tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'useEmpty' => false,
     *     'emptyValue' => '',
     *     'emptyText' => '',
     * ]
     *
     * @return string
     * @throws Exception
     * @param mixed $data
     */
    public static function selectField($parameters, $data = null): string
    {
    }

    /**
     * @param string $value
     * @param bool $selected
     * @return string
     */
    protected static function echoOption(string $value, bool $selected = false): string
    {
    }

    /**
     * Reduces an arbitrary option value to the string the markup needs.
     * Option data is user supplied, so anything that cannot be expressed as
     * a string reads back as an empty string rather than aborting the tag.
     *
     * @param mixed $value
     * @return string
     */
    protected static function toStringValue($value): string
    {
    }

    /**
     * Generate the OPTION tags based on an array
     *
     * @phpstan-param tag_select_data $data
     * @param array $data
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private static function optionsFromArray(array $data, $value, string $closeOption): string
    {
    }

    /**
     * Generate the OPTION tags based on a resultset
     *
     * @param \Phalcon\Mvc\Model\ResultsetInterface $resultset
     * @param mixed $using
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private static function optionsFromResultset(\Phalcon\Mvc\Model\ResultsetInterface $resultset, $using, $value, string $closeOption): string
    {
    }
}
