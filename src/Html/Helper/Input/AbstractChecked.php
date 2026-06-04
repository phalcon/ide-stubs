<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Helper\Doctype;

/**
 * Shared base for inputs that can be checked: `<input type="checkbox">` and
 * `<input type="radio">`. Holds the optional surrounding `<label>` markup,
 * the `unchecked` companion hidden input, and the rule that decides whether
 * the rendered tag carries `checked="checked"`.
 *
 * The match between `checked` and `value` is loose (`==`) by default so that
 * mixed int/string form input round-trips correctly (e.g. `value=0` against
 * `checked="0"`). Strict (`===`) matching is available via `strict(true)`.
 *
 * @property array $label
 * @property bool  $strict
 */
abstract class AbstractChecked extends \Phalcon\Html\Helper\Input\AbstractInput
{
    /**
     * @var array
     */
    protected $label = [];

    /**
     * @var bool
     */
    protected $strict = false;

    /**
     * @param EscaperInterface $escaper
     * @param Doctype          $doctype
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, ?\Phalcon\Html\Helper\Doctype $doctype = null)
    {
    }

    /**
     * Returns the HTML for the input, optionally surrounded by the label
     * fragment configured via `label()` and preceded by the hidden companion
     * input emitted when an `unchecked` attribute is supplied.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * Attaches a wrapping `<label>` to the element. The supplied attributes
     * are merged with a default `for` pointing at the input's `id`. A `text`
     * pseudo-attribute, if present, becomes the label text and is stripped
     * from the rendered attributes.
     *
     * @param array $attributes
     *
     * @return static
     */
    public function label(array $attributes = []): static
    {
    }

    /**
     * Toggles strict (`===`) comparison between the `checked` attribute and
     * the `value` attribute when deciding whether to render the input as
     * checked. Defaults to loose (`==`), which matches typical form-input
     * round-tripping where types may differ between the source data and the
     * value rendered into the markup.
     *
     * @param bool $flag
     *
     * @return static
     */
    public function strict(bool $flag = true): static
    {
    }

    /**
     * Decides whether the rendered tag carries `checked="checked"`. Two
     * paths qualify as checked: an unconditional opt-in via
     * `["checked" => "checked"]` (case-insensitive) or `["checked" => true]`,
     * and a value-match path where the supplied `checked` attribute equals
     * the input's `value` (`==` by default, `===` under `strict(true)`).
     *
     * @return void
     */
    protected function processChecked(): void
    {
    }

    /**
     * Returns the markup for the optional hidden companion input that lets
     * a checkbox/radio submit a value when unchecked.
     *
     * @return string
     */
    protected function processUnchecked(): string
    {
    }
}
