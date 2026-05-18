<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;

/**
 * Class Script
 */
class Script extends \Phalcon\Html\Helper\AbstractSeries
{
    /**
     * Add an element to the list
     *
     * @param string $url
     * @param array  $attributes
     *
     * @return $this
     * @throws Exception
     * @param int $position
     */
    public function add(string $url, array $attributes = [], int $position = -1)
    {
    }

    /**
     * Begins capturing inline script content via output buffering. Pair
     * with `endInternal()` to close the buffer and append the captured
     * markup as a `<script>...</script>` block in the asset stack.
     *
     * @return void
     */
    public function beginInternal(): void
    {
    }

    /**
     * Closes an inline-script buffer opened by `beginInternal()` and adds
     * the captured content as a `<script>...</script>` entry. Any
     * attributes supplied are placed on the wrapping tag. The script body
     * is treated as raw HTML (it is JavaScript, not user-supplied text).
     *
     * @param array $attributes
     * @param int   $position
     *
     * @return Script
     */
    public function endInternal(array $attributes = [], int $position = -1): Script
    {
    }

    /**
     * Returns the necessary attributes
     *
     * @param string $url
     * @param array  $attributes
     *
     * @return array
     */
    protected function getAttributes(string $url, array $attributes): array
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }
}
