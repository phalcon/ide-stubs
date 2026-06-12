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
class Point extends \Phalcon\Db\Geometry\AbstractGeometry
{
    /**
     * @var float
     */
    protected $x;

    /**
     * @var float
     */
    protected $y;

    /**
     * @param double $x
     * @param double $y
     * @param int $srid
     */
    public function __construct(float $x, float $y, int $srid = 0)
    {
    }

    /**
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * @return float
     */
    public function getX(): float
    {
    }

    /**
     * @return float
     */
    public function getY(): float
    {
    }

    /**
     * @return string
     */
    public function toWkt(): string
    {
    }

    /**
     * @return string
     */
    public function coordsWkt(): string
    {
    }
}
