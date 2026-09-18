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
class GeometryCollection extends \Phalcon\Db\Geometry\AbstractGeometry
{
    /**
     * @var array
     *
     * @phpstan-var list<GeometryInterface>
     */
    protected $geometries;

    /**
     * @phpstan-param list<GeometryInterface> $geometries
     * @param array $geometries
     * @param int $srid
     */
    public function __construct(array $geometries, int $srid = 0)
    {
    }

    /**
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * @phpstan-return list<GeometryInterface>
     * @return array
     */
    public function getGeometries(): array
    {
    }

    /**
     * @return string
     */
    public function toWkt(): string
    {
    }
}
