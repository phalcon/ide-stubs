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
 * Phalcon\Support\Settings
 *
 * Provides a PHP-userland layer for reading and overriding the Phalcon
 * extension's ini settings (orm., db., form.).
 *
 * get() checks PHP-level overrides first, then falls back to globals_get()
 * which reads the value configured in php.ini / .htaccess / per-virtualhost.
 *
 * set() stores the value in the PHP-level overrides array only. It does NOT
 * call globals_set(), so the change is confined to this static state and never
 * modifies the underlying C struct. This prevents settings changed by one
 * project from leaking into another project sharing the same PHP worker process.
 *
 * NOTE: In non-ZTS (non-thread-safe) PHP builds, globals_get() reads from a
 * process-level C struct. Because set() does not write to that struct, any
 * value set via ini_set("phalcon.orm.", ...) or globals_set() by other code
 * remains visible through get() as the fallback for keys that have no
 * PHP-level override. In ZTS builds each thread has its own copy of the struct.
 *
 * reset() clears only the keys that were previously set via set(), restoring
 * those keys to their globals_get() fallback values.
 */
class Settings
{
    /**
     * PHP-level overrides. Keys stored here take priority over globals_get().
     *
     * @var array
     */
    protected static $overrides;

    /**
     * Returns the value of a known setting.
     *
     * Resolution order:
     *   1. PHP-level override (set via Settings::set())
     *   2. globals_get() — the C-level value, honouring php.ini / .htaccess
     *   3. null — for unknown keys
     *
     * @param string $key
     * @return mixed
     */
    public static function get(string $key): mixed
    {
    }

    /**
     * Overrides a setting at the PHP level.
     *
     * Does NOT call globals_set(), so the C-level struct is not modified and
     * no other project sharing this PHP process is affected.
     *
     * Unknown keys are silently ignored.
     *
     * @param string $key
     * @param mixed  $value
     * @return void
     */
    public static function set(string $key, $value): void
    {
    }

    /**
     * Clears all PHP-level overrides, restoring get() to return globals_get()
     * fallback values (as configured in php.ini or .htaccess).
     *
     * @return void
     */
    public static function reset(): void
    {
    }
}
