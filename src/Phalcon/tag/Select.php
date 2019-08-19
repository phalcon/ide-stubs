<?php

namespace Phalcon\Tag;

/**
 * Phalcon\Tag\Select
 *
 * Generates a SELECT html tag using a static array of values or a
 * Phalcon\Mvc\Model resultset
 */
abstract class Select
{

    /**
     * Generates a SELECT tag
     *
     * @param array $parameters
     * @param array $data
     * @return string
     */
    public static function selectField($parameters, $data = null): string {}

    /**
     * Generate the OPTION tags based on an array
     *
     * @param array $data
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private static function optionsFromArray(array $data, $value, string $closeOption): string {}

    /**
     * Generate the OPTION tags based on a resultset
     *
     * @param \Phalcon\Mvc\Model\ResultsetInterface $resultset
     * @param array $using
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private static function optionsFromResultset(\Phalcon\Mvc\Model\ResultsetInterface $resultset, $using, $value, string $closeOption): string {}

}
