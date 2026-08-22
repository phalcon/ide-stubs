<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input\Select;

use Phalcon\Contracts\Html\Helper\Input\SelectData;
use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Exceptions\InvalidResultsetValue;
use Phalcon\Html\Exceptions\UsingRequiresTwoValues;
use Phalcon\Mvc\Model\ResultsetInterface;

/**
 * @phpstan-import-type html_select_attributes from HtmlTypes
 * @phpstan-import-type html_select_attributes_map from HtmlTypes
 * @phpstan-import-type html_select_options from HtmlTypes
 * @phpstan-import-type html_select_using from HtmlTypes
 */
class ResultsetData implements \Phalcon\Contracts\Html\Helper\Input\SelectData
{
    /**
     * @param html_select_attributes_map
     */
    protected array $attributesMap = [];

    /**
     * @var html_select_attributes|null
     */
    protected $resolvedAttributes = null;

    /**
     * @var html_select_options|null
     */
    protected $resolvedOptions = null;

    /**
     * @var ResultsetInterface
     */
    protected \Phalcon\Mvc\Model\ResultsetInterface $resultset;

    /**
     * @param html_select_using
     */
    protected array $using = [];

    /**
     * @param html_select_using            $using
     * @param html_select_attributes_map   $attributesMap
     * @param \Phalcon\Mvc\Model\ResultsetInterface $resultset
     */
    public function __construct(\Phalcon\Mvc\Model\ResultsetInterface $resultset, array $using, array $attributesMap = [])
    {
    }

    /**
     * Returns per-option attribute maps, keyed by option value.
     *
     * @phpstan-return html_select_attributes
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * @phpstan-return html_select_options
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Reads a property from the row, supporting both objects (via
     * `readAttribute` when available) and plain arrays.
     *
     * @param array<array-key, mixed>|object $option
     * @param string $field
     */
    protected function readField($option, string $field)
    {
    }

    /**
     * Walks the resultset once, building both the option map and the
     * per-option resolved attribute map. Closures in `attributesMap`
     * receive the current row; static values are passed through.
     * `false` or `null` values skip the attribute entirely.
     *
     * @return void
     */
    protected function resolve(): void
    {
    }
}
