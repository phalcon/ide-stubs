<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input\Select;

use InvalidArgumentException;
use Phalcon\Contracts\Html\Helper\Input\SelectData;
use Phalcon\Html\Exceptions\InvalidResultsetValue;
use Phalcon\Html\Exceptions\UsingRequiresTwoValues;
use Phalcon\Mvc\Model\ResultsetInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by AuraPHP
 *
 * @link    https://github.com/auraphp/Aura.Html
 * @license https://github.com/auraphp/Aura.Html/blob/2.x/LICENSE
 */
class ResultsetData implements \Phalcon\Contracts\Html\Helper\Input\SelectData
{
    /**
     * @var array
     */
    protected $attributesMap = [];

    /**
     * @var array|null
     */
    protected $resolvedAttributes = null;

    /**
     * @var array|null
     */
    protected $resolvedOptions = null;

    /**
     * @var ResultsetInterface
     */
    protected $resultset;

    /**
     * @var array
     */
    protected $using = [];

    /**
     * @param ResultsetInterface $resultset
     * @param array $using
     * @param array $attributesMap
     */
    public function __construct(\Phalcon\Mvc\Model\ResultsetInterface $resultset, array $using, array $attributesMap = [])
    {
    }

    /**
     * Returns per-option attribute maps, keyed by option value.
     *
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Reads a property from the row, supporting both objects (via
     * `readAttribute` when present) and plain arrays.
     *
     * @param mixed $option
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
