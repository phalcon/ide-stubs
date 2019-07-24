<?php

namespace Phalcon\Db;

/**
 * This class allows to insert/update raw data without quoting or formatting.
 *
 * The next example shows how to use the MySQL now() function as a field value.
 *
 * ```php
 * $subscriber = new Subscribers();
 *
 * $subscriber->email     = "andres@phalconphp.com";
 * $subscriber->createdAt = new \Phalcon\Db\RawValue("now()");
 *
 * $subscriber->save();
 * ```
 */
class RawValue
{
    /**
     * Raw value without quoting or formatting
     *
     * @var string
     */
    protected $value;


    /**
     * Raw value without quoting or formatting
     *
     * @return string
     */
    public function getValue(): string {}

    /**
     * Raw value without quoting or formatting
     *
     * @return string
     */
    public function __toString(): string {}

    /**
     * Phalcon\Db\RawValue constructor
     *
     * @param mixed $value
     */
    public function __construct($value) {}

}
