<?php

namespace Phalcon\Translate\Interpolator;

/**
 * Phalcon\Translate\InterpolatorInterface
 *
 * Interface for Phalcon\Translate interpolators
 */
interface InterpolatorInterface
{

    /**
     * Replaces placeholders by the values passed
     *
     * @param string $translation
     * @param array $placeholders
     * @return string
     */
    public function replacePlaceholders(string $translation, array $placeholders = array()): string;
}
