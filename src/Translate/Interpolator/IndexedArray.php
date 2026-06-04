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
class IndexedArray implements \Phalcon\Translate\Interpolator\InterpolatorInterface
{
    /**
     * Replaces placeholders by the values passed
     *
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @param string $translation
     * @param array $placeholders
     */
    public function replacePlaceholders(string $translation, array $placeholders = []): string
    {
    }
}
