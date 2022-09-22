<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db;

/**
 * This class allows to insert/update raw data without quoting or formatting.
 *
 * The next example shows how to use the MySQL now() function as a field value.
 *
 * ```php
 * $subscriber = new Subscribers();
 *
 * $subscriber->email     = "andres@phalcon.io";
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
     * Phalcon\Db\RawValue constructor
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
