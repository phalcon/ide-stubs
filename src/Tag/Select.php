<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Tag;

use Phalcon\Tag as BaseTag;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Mvc\Model\ResultsetInterface;

/**
 * Phalcon\Tag\Select
 *
 * Generates a SELECT HTML tag using a static array of values or a
 * Phalcon\Mvc\Model resultset
 */
abstract class Select
{
    /**
     * Generates a SELECT tag
     *
     * @param array $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'useEmpty' => false,
     *     'emptyValue' => '',
     *     'emptyText' => '',
     * ]
     * @param array $data
     * @return string
     */
    public static function selectField($parameters, $data = null): string
    {
    }

    /**
     * Generate the OPTION tags based on an array
     *
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
     * @param array $using
     * @param \Phalcon\Mvc\Model\ResultsetInterface $resultset
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private static function optionsFromResultset(\Phalcon\Mvc\Model\ResultsetInterface $resultset, $using, $value, string $closeOption): string
    {
    }
}
