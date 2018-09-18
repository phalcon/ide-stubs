<?php

namespace Phalcon;

/**
 * Phalcon\Version
 *
 * This class offers information regarding the version of the installed
 * Phalcon module
 */
class Version
{
    /**
     * The constant referencing the major version.
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getPart(Phalcon\Version::VERSION_MAJOR);
     * $ 4
     * </code>
     */
    const VERSION_MAJOR = 0;

    /**
     * The constant referencing the major version.
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getPart(Phalcon\Version::VERSION_MEDIUM);
     * $ 2
     * </code>
     */
    const VERSION_MEDIUM = 1;

    /**
     * The constant referencing the major version.
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getPart(Phalcon\Version::VERSION_MINOR);
     * $ 3
     * </code>
     */
    const VERSION_MINOR = 2;

    /**
     * The constant referencing the major version.
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getPart(Phalcon\Version::VERSION_SPECIAL);
     * $ 1
     * </code>
     */
    const VERSION_SPECIAL = 3;

    /**
     * The constant referencing the major version.
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getPart(Phalcon\Version::VERSION_SPECIAL_NUMBER);
     * $ 4
     * </code>
     */
    const VERSION_SPECIAL_NUMBER = 4;


    /**
     * Returns the active version (string)
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::get();
     * $ 4.2,3 ALPHA 4
     *
     * // Version 4.5,6
     * echo Phalcon\Version::get();
     * $ 4.5,6
     * </code>
     *
     * @return string
     */
    public static function get(): string {}

    /**
     * Returns the numeric active version
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getId();
     * $ 402030104
     *
     * // Version 4.5,6
     * echo Phalcon\Version::getId();
     * $ 405060400
     * </code>
     *
     * @return string
     */
    public static function getId(): string {}

    /**
     * Returns a specific part of the version. If the wrong parameter is passed
     * it will return the full version
     *
     * <code>
     * // Version 4.2.3 ALPHA 4
     * echo Phalcon\Version::getPart(
     *     Phalcon\Version::VERSION_MAJOR
     * );
     * $ 4
     * </code>
     *
     * @param int $part
     * Use any of the available constants in this class to return the part of
     * the version you need
     *
     * @return string
     */
    public static function getPart(int $part): string {}

    /**
     * Gets the version internally. The returned array is of the following format:
     *
     * [
     *      Major version,
     *      Med version (two digits),
     *      Min version (two digits),
     *      Special release: 1 = Alpha, 2 = Beta, 3 = RC, 4 = Stable,
     *      Special release version i.e. RC1, Beta2 etc.,
     * ]
     *
     * @return array
     */
    protected static function _getVersion(): array {}

    /**
     * Translates a number to a special release. Depending on the version set
     * in the component, this will return "ALPHA", "BETA", "RC" or an empty
     * string for stable version.
     *
     * @param int $special
     * 1 = ALPHA, 2 = BETA, 3 = RC, 4 = Stable.
     *
     * @return string
     * "ALPHA", "BETA", "RC" or an empty string for stable version
     */
    protected final static function _getSpecial(int $special): string {}
}
