<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Escaper;

/**
 * Escapes either a single attribute value (string) or an associative array
 * of attribute pairs. Boolean `true` becomes a bare key (e.g. `disabled`);
 * `false` and `null` skip the entry; arrays are joined with a space.
 */
class AttributeEscaper extends \Phalcon\Html\Escaper\AbstractEscaper
{
    /**
     * @param array|string|null $input
     *
     * @return string
     */
    public function __invoke($input = null): string
    {
    }

    /**
     * @param array|string|null $input
     *
     * @return string
     */
    public function escape($input = null): string
    {
    }

    /**
     * Encodes a single key/value via `htmlspecialchars`.
     *
     * @param string $input
     *
     * @return string
     */
    protected function escapeValue(string $input): string
    {
    }
}
