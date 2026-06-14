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
interface GeometryInterface
{
    /**
     * @return int
     */
    public function getSrid(): int;

    /**
     * @return int
     */
    public function getType(): int;

    /**
     * @return string
     */
    public function toWkt(): string;
}
