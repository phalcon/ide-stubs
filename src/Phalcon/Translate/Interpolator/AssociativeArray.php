<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Interpolator;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class AssociativeArray implements \Phalcon\Translate\Interpolator\InterpolatorInterface
{

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param array $placeholders
     * @return string
     */
    public function replacePlaceholders(string $translation, array $placeholders = array()): string
    {
    }
}
