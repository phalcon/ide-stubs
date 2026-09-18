<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Hydration;

use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Exceptions\ColumnNotInMap;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Support\Settings;

/**
 * @phpstan-import-type mvc_hydration_column_map from MvcTypes
 */
class CloneResultMapHydrate
{
    /**
     * Returns an hydrated result based on the data and the column map
     *
     * @phpstan-param array<array-key, mixed> $data
     * @param array $data
     * @param mixed $columnMap
     * @param int $hydrationMode
     * @param string $calledClass
     */
    public static function cloneResultMapHydrate(array $data, $columnMap, int $hydrationMode, string $calledClass = 'Phalcon\\\\Mvc\\\\Model')
    {
    }
}
