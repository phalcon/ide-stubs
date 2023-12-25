<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

use ArrayAccess;
use Phalcon\Translate\Exception;
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
 * Allows translate using gettext
 *
 * @property int          $category
 * @property string       $defaultDomain
 * @property string|array $directory
 * @property string|false $locale
 */
class Gettext extends \Phalcon\Translate\Adapter\AbstractAdapter implements \ArrayAccess
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
     * @var string
     */
    protected $locale;

    /**
     * Gettext constructor.
     *
     * @param InterpolatorFactory $interpolator
     * @param array               $options = [
     *                                       'locale'        => '',
     *                                       'defaultDomain' => '',
     *                                       'directory'     => '',
     *                                       'category'      => ''
     *                                       ]
     *
     * @throws Exception
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
     * @return string|array
     */
    public function getDirectory(): string|array
    {
    }

    /**
     * @return string
     */
    public function getLocale(): string
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
     * @param string      $msgid1
     * @param string      $msgid2
     * @param int         $count
     * @param array       $placeholders
     * @param string|null $domain
     *
     * @return string
     */
    public function nquery(string $msgid1, string $msgid2, int $count, array $placeholders = [], string $domain = null): string
    {
    }

    /**
     * Returns the translation related to the given key.
     *
     * ```php
     * $translator->query("你好 %name%！", ["name" => "Phalcon"]);
     * ```
     *
     * @param string $translateKey
     * @param array  $placeholders
     *
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
    public function setDomain(string $domain = null): string
    {
    }

    /**
     * Sets locale information
     *
     * ```php
     * // Set locale to Dutch
     * $gettext->setLocale(LC_ALL, "nl_NL");
     *
     * // Try different possible locale names for German
     * $gettext->setLocale(LC_ALL, "de_DE@euro", "de_DE", "de", "ge");
     * ```
     *
     * @param int   $category
     * @param array $localeArray
     *
     * @return false|string
     */
    public function setLocale(int $category, array $localeArray = []): bool|string
    {
    }

    /**
     * Gets default options
     *
     * @return array
     */
    protected function getOptionsDefault(): array
    {
    }

    /**
     * Validator for constructor
     *
     * @param array $options
     *
     * @throws Exception
     * @return void
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
