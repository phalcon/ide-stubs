<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use Phalcon\Translate\Exception;
use Phalcon\Translate\Exceptions\MissingGettextExtension;
use Phalcon\Translate\Exceptions\MissingRequiredParameter;
use Phalcon\Translate\InterpolatorFactory;

/**
 * Phalcon\Translate\Adapter\Gettext
 *
 * ```php
 * use Phalcon\Translate\Adapter\Gettext;
 *
 * $adapter = new Gettext(
 *     [
 *         "locale"        => "de_DE.UTF-8",
 *         "defaultDomain" => "translations",
 *         "directory"     => "/path/to/application/locales",
 *         "category"      => LC_MESSAGES,
 *     ]
 * );
 * ```
 *
 * Allows translations using gettext
 *
 * @phpstan-type TOptions array{
 *      locale?: string,
 *      defaultDomain?: string,
 *      directory?: string,
 *      category?: string
 * }
 */
class Gettext extends \Phalcon\Translate\Adapter\AbstractAdapter
{
    /**
     * @var int
     */
    protected $category;

    /**
     * @var string
     */
    protected $defaultDomain;

    /**
     * @var string|array
     */
    protected $directory;

    /**
     * @var string | false
     */
    protected $locale;

    /**
     * Gettext constructor.
     *
     * @param InterpolatorFactory $interpolator
     * @param TOptions            $options
     *
     * @throws Exception
     * @throws MissingGettextExtension
     * @throws MissingRequiredParameter
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     *
     * @return bool
     * @deprecated
     */
    public function exists(string $index): bool
    {
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
    }

    /**
     * @return string
     */
    public function getDefaultDomain(): string
    {
    }

    /**
     * @phpstan-return array<string, string>|string
     * @return array|string
     */
    public function getDirectory(): string|array
    {
    }

    /**
     * @return string
     */
    public function getLocale(): false|string
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     *
     * @return bool
     */
    public function has(string $index): bool
    {
    }

    /**
     * The plural version of gettext().
     * Some languages have more than one form for plural messages dependent on
     * the count.
     *
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @param string $msgid1
     * @param string $msgid2
     * @param int $count
     * @param array $placeholders
     * @param string|null $domain
     */
    public function nquery(string $msgid1, string $msgid2, int $count, array $placeholders = [], ?string $domain = null): string
    {
    }

    /**
     * Returns the translation related to the given key.
     *
     * ```php
     * $translator->query("你好 %name%！", ["name" => "Phalcon"]);
     * ```
     *
     * @phpstan-param array<string, string> $placeholders
     *
     * @return string
     * @throws Exception
     * @param string $translateKey
     * @param array $placeholders
     */
    public function query(string $translateKey, array $placeholders = []): string
    {
    }

    /**
     * Sets the default domain
     *
     * @return string
     */
    public function resetDomain(): string
    {
    }

    /**
     * Sets the domain default to search within when calls are made to gettext()
     *
     * @param string $domain
     * @return void
     */
    public function setDefaultDomain(string $domain): void
    {
    }

    /**
     * Sets the path for a domain
     *
     * ```php
     * // Set the directory path
     * $gettext->setDirectory("/path/to/the/messages");
     *
     * // Set the domains and directories path
     * $gettext->setDirectory(
     *     [
     *         "messages" => "/path/to/the/messages",
     *         "another"  => "/path/to/the/another",
     *     ]
     * );
     * ```
     *
     * @param string|array $directory
     * @return void
     */
    public function setDirectory($directory): void
    {
    }

    /**
     * Changes the current domain (i.e. the translation file)
     *
     * @param string|null $domain
     *
     * @return string
     */
    public function setDomain(?string $domain = null): string
    {
    }

    /**
     * Sets locale information
     *
     * Note: this method has process-global side effects. Besides calling
     * `setlocale()`, it exports the `LC_ALL`, `LANG` and `LANGUAGE`
     * environment variables via `putenv()`. `LC_ALL` affects every
     * locale-sensitive operation in the process - `(string)` casts of floats,
     * `strtoupper()`/`strtolower()` tables, date formatting and more - not
     * just translations.
     *
     * ```php
     * // Set locale to Dutch
     * $gettext->setLocale(LC_ALL, ["nl_NL"]);
     *
     * // Try different possible locale names for German
     * $gettext->setLocale(LC_ALL, ["de_DE@euro", "de_DE", "de", "ge"]);
     * ```
     *
     * @phpstan-param array<string, mixed> $localeArray
     *
     * @return false|string
     * @param int $category
     * @param array $localeArray
     */
    public function setLocale(int $category, array $localeArray = []): bool|string
    {
    }

    /**
     * Gets default options
     *
     * @phpstan-return array<string, mixed>
     * @return array
     */
    protected function getOptionsDefault(): array
    {
    }

    /**
     * Validator for constructor
     *
     * @phpstan-param TOptions $options
     *
     * @return void
     * @throws MissingRequiredParameter
     * @param array $options
     */
    protected function prepareOptions(array $options): void
    {
    }

    /**
     * @todo to be removed when we get traits
     * @param string $name
     * @return bool
     */
    protected function phpFunctionExists(string $name): bool
    {
    }
}
