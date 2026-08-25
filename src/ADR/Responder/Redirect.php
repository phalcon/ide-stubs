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
    protected bool $external = false;

    protected int $status = 302;

    protected string $url;

    /**
     * @param string $url
     * @param int $status
     * @param bool $external
     */
    public function __construct(string $url, int $status = 302, bool $external = false)
    {
    }

    /**
     * Whether the target is an explicit external redirect. Internal (the
     * default) redirects refuse an absolute or protocol-relative target so a
     * request-derived value cannot become an open redirect (CWE-601).
     *
     * @return bool
     */
    public function external(): bool
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
     * @param string $url
     * @return Redirect
     */
    public static function temporary(string $url): Redirect
    {
    }

    /**
     * @return int
     */
    public function status(): int
    {
    }

    /**
     * @return string
     */
    public function url(): string
    {
    }
}
