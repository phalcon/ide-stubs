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
class MultiPoint extends \Phalcon\Db\Geometry\AbstractGeometry
{
    /**
     * @var array
     */
    protected $points;

    /**
     * @param array $points
     * @param int $srid
     */
    public function __construct(array $points, int $srid = 0)
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
    public function getPoints(): array
    {
    }

    /**
     * @return string
     */
    public function toWkt(): string
    {
    }
}
