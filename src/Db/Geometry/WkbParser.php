<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Geometry;

use Phalcon\Db\Exceptions\InvalidWkb;

/**
 * Decodes a spatial column value into a geometry value object.
 *
 * Handles MySQL's internal format (4-byte little-endian SRID prefix followed
 * by standard OGC WKB) and PostGIS EWKB returned as a hex string. 2D only:
 * any Z/M ordinates are read past and discarded.
 */
class WkbParser
{
    /**
     * @var string
     */
    protected $buffer = '';

    /**
     * @var int
     */
    protected $length = 0;

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @param string $raw
     * @return GeometryInterface
     */
    public function parse(string $raw): GeometryInterface
    {
    }

    /**
     * @param int $outerSrid
     * @return GeometryInterface
     */
    protected function readGeometry(int $outerSrid): GeometryInterface
    {
    }

    /**
     * @param bool $little
     * @param bool $hasZ
     * @param bool $hasM
     * @param int $srid
     * @return Point
     */
    protected function readPoint(bool $little, bool $hasZ, bool $hasM, int $srid): Point
    {
    }

    /**
     * @param bool $little
     * @param bool $hasZ
     * @param bool $hasM
     * @return array
     */
    protected function readPointList(bool $little, bool $hasZ, bool $hasM): array
    {
    }

    /**
     * @param bool $little
     * @param bool $hasZ
     * @param bool $hasM
     * @return array
     */
    protected function readRingList(bool $little, bool $hasZ, bool $hasM): array
    {
    }

    /**
     * @param bool $little
     * @param bool $hasZ
     * @param bool $hasM
     * @return void
     */
    protected function skipExtraOrdinates(bool $little, bool $hasZ, bool $hasM): void
    {
    }

    /**
     * @return int
     */
    protected function readByte(): int
    {
    }

    /**
     * @param bool $little
     * @return int
     */
    protected function readUint32(bool $little): int
    {
    }

    /**
     * @param bool $little
     * @return float
     */
    protected function readDouble(bool $little): float
    {
    }
}
