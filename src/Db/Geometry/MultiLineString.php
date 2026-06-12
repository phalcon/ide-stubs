<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Geometry;

use Phalcon\Db\Column;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class MultiLineString extends \Phalcon\Db\Geometry\AbstractGeometry
{
    /**
     * @var array
     */
    protected $lineStrings;

    /**
     * @param array $lineStrings
     * @param int $srid
     */
    public function __construct(array $lineStrings, int $srid = 0)
    {
    }

    /**
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * @return array
     */
    public function getLineStrings(): array
    {
    }

    /**
     * @return string
     */
    public function toWkt(): string
    {
    }
}
