<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Responder;

/**
 * Value object describing a redirect. An Action sets it on the payload; the
 * RedirectResponder turns it into a `Location` header and status code.
 */
class Redirect
{
    protected int $status;

    protected string $url;

    /**
     * @param string $url
     * @param int $status
     */
    public function __construct(string $url, int $status = 302)
    {
    }

    /**
     * @param string $url
     * @return Redirect
     */
    public static function permanent(string $url): Redirect
    {
    }

    /**
     * @param string $url
     * @return Redirect
     */
    public static function seeOther(string $url): Redirect
    {
    }

    /**
     * @return int
     */
    public function status(): int
    {
    }

    /**
     * @param string $url
     * @return Redirect
     */
    public static function temporary(string $url): Redirect
    {
    }

    /**
     * @return string
     */
    public function url(): string
    {
    }
}
