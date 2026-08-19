<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use Phalcon\Contracts\Translate\TranslateTypes;
use Phalcon\Traits\Php\InfoTrait;
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
 * @phpstan-import-type translate_data from TranslateTypes
 * @phpstan-import-type translate_gettext_defaults from TranslateTypes
 * @phpstan-import-type translate_gettext_options from TranslateTypes
 * @phpstan-import-type translate_placeholders from TranslateTypes
 */
class Gettext extends \Phalcon\Translate\Adapter\AbstractAdapter
{
    use \Phalcon\Traits\Php\InfoTrait;


    protected int $category = 6;

    protected string $defaultDomain = 'messages';

    /**
     * @phpstan-var translate_data|string
     */
    protected $directory;

    /**
     * @var false|string
     */
    protected $locale;

    /**
     * Gettext constructor.
     *
     * @phpstan-param translate_gettext_options $options
     *
     * @throws Exception
     * @throws MissingGettextExtension
     * @throws MissingRequiredParameter
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     * @param array $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @deprecated
     * @param string $index
     * @return bool
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
     * @phpstan-return translate_data|string
     * @return array|string
     */
    public function getDirectory(): string|array
    {
    }

    /**
     * @return false|string
     */
    public function getLocale(): false|string
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
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
     * @phpstan-param translate_placeholders $placeholders
     * @param string $msgid1
     * @param string $msgid2
     * @param int $count
     * @param array $placeholders
     * @param string|null $domain
     * @return string
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
     * @phpstan-param translate_placeholders $placeholders
     *
     * @throws Exception
     * @param string $translateKey
     * @param array $placeholders
     * @return string
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
     * @phpstan-param translate_data|string $directory
     * @param mixed $directory
     * @return void
     */
    public function setDirectory($directory): void
    {
    }

    /**
     * Changes the current domain (i.e. the translation file)
     *
     * @param string|null $domain
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
     * @phpstan-param array<array-key, string> $localeArray
     * @param int $category
     * @param array $localeArray
     * @return false|string
     */
    public function setLocale(int $category, array $localeArray = []): false|string
    {
    }

    /**
     * Gets default options
     *
     * @phpstan-return translate_gettext_defaults
     * @return array
     */
    protected function getOptionsDefault(): array
    {
    }

    /**
     * Validator for constructor
     *
     * @phpstan-param translate_gettext_options $options
     * @param array $options
     * @return void
     */
    protected function prepareOptions(array $options): void
    {
    }
}
