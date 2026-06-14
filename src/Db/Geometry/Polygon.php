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
class Polygon extends \Phalcon\Db\Geometry\AbstractGeometry
{
    /**
     * @var array
     */
    protected $rings;

    /**
     * @param array $rings
     * @param int $srid
     */
    public function __construct(array $rings, int $srid = 0)
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
    public function getRings(): array
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
    public function ringsWkt(): string
    {
    }
}
