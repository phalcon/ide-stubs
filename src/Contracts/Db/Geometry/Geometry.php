<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Db\Geometry;

/**
 * Canonical contract for Phalcon\Db\Geometry value objects.
 */
interface Geometry
{
    /**
     * Gets the Spatial Reference System Identifier (SRID).
     *
     * @return int
     */
    public function getSrid(): int;

    /**
     * Gets the geometry type.
     *
     * @return int
     */
    public function getType(): int;

    /**
     * Renders the geometry as a Well-Known Text (WKT) string.
     *
     * @return string
     */
    public function toWkt(): string;
}
