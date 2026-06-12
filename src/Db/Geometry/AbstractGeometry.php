<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Geometry;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractGeometry implements \Phalcon\Db\Geometry\GeometryInterface
{
    /**
     * @var int
     */
    protected $srid = 0;

    /**
     * @return int
     */
    abstract public function getType(): int;

    /**
     * @return string
     */
    abstract public function toWkt(): string;

    /**
     * @return int
     */
    public function getSrid(): int
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
    }
}
