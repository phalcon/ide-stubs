<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate\Adapter;

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
    public function getDirectory()
    {
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
    }

    /**
     * Phalcon\Translate\Adapter\Gettext constructor
     *
     * @param array $options = [
     *     'locale' => '',
     *     'defaultDomain' => '',
     *     'directory' => '',
     *     'category' => ''
     * ]
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool
    {
    }

    /**
     * The plural version of gettext().
     * Some languages have more than one form for plural messages dependent on
     * the count.
     *
     * @param string $msgid1
     * @param string $msgid2
     * @param int $count
     * @param array $placeholders
     * @param string $domain
     * @return string
     */
    public function nquery(string $msgid1, string $msgid2, int $count, array $placeholders = array(), string $domain = null): string
    {
    }

    /**
     * Returns the translation related to the given key.
     *
     * ```php
     * $translator->query("你好 %name%！", ["name" => "Phalcon"]);
     * ```
     *
     * @param array $placeholders
     * @param string $index
     * @return string
     */
    public function query(string $index, array $placeholders = array()): string
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
    public function setDefaultDomain(string $domain)
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
     * @param string|array $directory The directory path or an array of directories and domains
     * @return void
     */
    public function setDirectory($directory)
    {
    }

    /**
     * Changes the current domain (i.e. the translation file)
     *
     * @param mixed $domain
     * @return string
     */
    public function setDomain($domain): string
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
     * @param int $category
     * @param string $locale
     * @return string|bool
     */
    public function setLocale(int $category, string $locale)
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
     * @return void
     */
    protected function prepareOptions(array $options)
    {
    }
}
