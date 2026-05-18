<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support;

/**
 * This class allows to get the installed version of the framework
 */
class Version
{
    /**
     * The constant referencing the major version. Returns 0
     *
     * ```php
     * echo (new Phalcon\Support\Version())
     *          ->getPart(Phalcon\Support\Version::VERSION_MAJOR);
     * ```
     *
     * @var int
     */
    const int VERSION_MAJOR = 0;

    /**
     * The constant referencing the major version. Returns 1
     *
     * ```php
     * echo (new Phalcon\Support\Version())
     *          ->getPart(Phalcon\Support\Version::VERSION_MEDIUM);
     * ```
     *
     * @var int
     */
    const int VERSION_MEDIUM = 1;

    /**
     * The constant referencing the major version. Returns 2
     *
     * ```php
     * echo (new Phalcon\Support\Version())
     *          ->getPart(Phalcon\Support\Version::VERSION_MINOR);
     * ```
     *
     * @var int
     */
    const int VERSION_MINOR = 2;

    /**
     * The constant referencing the major version. Returns 3
     *
     * ```php
     * echo (new Phalcon\Support\Version())
     *          ->getPart(Phalcon\Support\Version::VERSION_SPECIAL);
     * ```
     *
     * @var int
     */
    const int VERSION_SPECIAL = 3;

    /**
     * The constant referencing the major version. Returns 4
     *
     * ```php
     * echo (new Phalcon\Support\Version())
     *          ->getPart(Phalcon\Support\Version::VERSION_SPECIAL_NUMBER);
     * ```
     *
     * @var int
     */
    const int VERSION_SPECIAL_NUMBER = 4;


    /**
     * Area where the version number is set. The format is as follows:
     * ABBCCDE
     *
     * A - Major version
     * B - Med version (two digits)
     * C - Min version (two digits)
     * D - Special release: 1 = alpha, 2 = beta, 3 = RC, 4 = stable
     * E - Special release version i.e. RC1, Beta2 etc.
     *
     * @return array
     */
    protected function getVersion(): array
    {
    }

    /**
     * Translates a number to a special release.
     *
     * @param int $special
     * @return string
     */
    final protected function getSpecial(int $special): string
    {
    }

    /**
     * Returns the active version (string)
     *
     * ```php
     * echo (new Phalcon\Version())->get();
     * ```
     *
     * @return string
     */
    public function get(): string
    {
    }

    /**
     * Returns the numeric active version
     *
     * ```php
     * echo (new Phalcon\Version())->getId();
     * ```
     *
     * @return string
     */
    public function getId(): string
    {
    }

    /**
     * Returns a specific part of the version. If the wrong parameter is passed
     * it will return the full version
     *
     * ```php
     * echo (new Phalcon\Version())->getPart(Phalcon\Version::VERSION_MAJOR);
     * ```
     *
     * @param int $part
     * @return string
     */
    public function getPart(int $part): string
    {
    }
}
