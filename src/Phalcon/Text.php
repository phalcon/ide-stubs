<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Phalcon\Helper\Str;

/**
 * Provides utilities to work with texts
 */
class Text
{

    const RANDOM_ALNUM = 0;


    const RANDOM_ALPHA = 1;


    const RANDOM_DISTINCT = 5;


    const RANDOM_HEXDEC = 2;


    const RANDOM_NOZERO = 4;


    const RANDOM_NUMERIC = 3;


    /**
     * Converts strings to camelize style
     *
     * ```php
     * echo Phalcon\Text::camelize("coco_bongo"); // CocoBongo
     * echo Phalcon\Text::camelize("co_co-bon_go", "-"); // Co_coBon_go
     * echo Phalcon\Text::camelize("co_co-bon_go", "_-"); // CoCoBonGo
     * ```
     *
     * @param string $text
     * @param mixed $delimiter
     * @return string
     */
    public static function camelize(string $text, $delimiter = null): string
    {
    }

    /**
     * Concatenates strings using the separator only once without duplication in
     * places concatenation
     *
     * ```php
     * $str = Phalcon\Text::concat(
     *     "/",
     *     "/tmp/",
     *     "/folder_1/",
     *     "/folder_2",
     *     "folder_3/"
     * );
     *
     * // /tmp/folder_1/folder_2/folder_3/
     * echo $str;
     * ```
     *
     * @param string $separator
     * @param string $a
     * @param string $b
     * @param string ...N
     * @param string  ...N
     * @return string
     */
    public static function concat(): string
    {
    }

    /**
     * Generates random text in accordance with the template
     *
     * ```php
     * // Hi my name is a Bob
     * echo Phalcon\Text::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hi my name is a Jon
     * echo Phalcon\Text::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hello my name is a Bob
     * echo Phalcon\Text::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hello my name is a Zyxep
     * echo Phalcon\Text::dynamic(
     *     "[Hi/Hello], my name is a [Zyxep/Mark]!",
     *     "[", "]",
     *     "/"
     * );
     * ```
     *
     * @param string $text
     * @param string $leftDelimiter
     * @param string $rightDelimiter
     * @param string $separator
     * @return string
     */
    public static function dynamic(string $text, string $leftDelimiter = '{', string $rightDelimiter = '}', string $separator = '|'): string
    {
    }

    /**
     * Check if a string ends with a given string
     *
     * ```php
     * echo Phalcon\Text::endsWith("Hello", "llo"); // true
     * echo Phalcon\Text::endsWith("Hello", "LLO", false); // false
     * echo Phalcon\Text::endsWith("Hello", "LLO"); // true
     * ```
     *
     * @param string $text
     * @param string $end
     * @param bool $ignoreCase
     * @return bool
     */
    public static function endsWith(string $text, string $end, bool $ignoreCase = true): bool
    {
    }

    /**
     * Makes an underscored or dashed phrase human-readable
     *
     * ```php
     * echo Phalcon\Text::humanize("start-a-horse"); // "start a horse"
     * echo Phalcon\Text::humanize("five_cats"); // "five cats"
     * ```
     *
     * @param string $text
     * @return string
     */
    public static function humanize(string $text): string
    {
    }

    /**
     * Adds a number to a string or increment that number if it already is
     * defined
     *
     * ```php
     * echo Phalcon\Text::increment("a"); // "a_1"
     * echo Phalcon\Text::increment("a_1"); // "a_2"
     * ```
     *
     * @param string $text
     * @param string $separator
     * @return string
     */
    public static function increment(string $text, string $separator = '_'): string
    {
    }

    /**
     * Lowercases a string, this function makes use of the mbstring extension if
     * available
     *
     * ```php
     * echo Phalcon\Text::lower("HELLO"); // hello
     * ```
     *
     * @param string $text
     * @param string $encoding
     * @return string
     */
    public static function lower(string $text, string $encoding = 'UTF-8'): string
    {
    }

    /**
     * Check if a string starts with a given string
     *
     * ```php
     * echo Phalcon\Text::startsWith("Hello", "He"); // true
     * echo Phalcon\Text::startsWith("Hello", "he", false); // false
     * echo Phalcon\Text::startsWith("Hello", "he"); // true
     * ```
     *
     * @param string $text
     * @param string $start
     * @param bool $ignoreCase
     * @return bool
     */
    public static function startsWith(string $text, string $start, bool $ignoreCase = true): bool
    {
    }

    /**
     * Generates a random string based on the given type. Type is one of the
     * RANDOM_ constants
     *
     * ```php
     * use Phalcon\Text;
     *
     * // "aloiwkqz"
     * echo Text::random(Text::RANDOM_ALNUM);
     * ```
     *
     * @param int $type
     * @param int $length
     *
     * @return string
     */
    public static function random(int $type = 0, int $length = 8): string
    {
    }

    /**
     * Reduces multiple slashes in a string to single slashes
     *
     * ```php
     * // foo/bar/baz
     * echo Phalcon\Text::reduceSlashes("foo//bar/baz");
     *
     * // http://foo.bar/baz/buz
     * echo Phalcon\Text::reduceSlashes("http://foo.bar///baz/buz");
     * ```
     *
     * @param string $text
     * @return string
     */
    public static function reduceSlashes(string $text): string
    {
    }

    /**
     * Uncamelize strings which are camelized
     *
     * ```php
     * echo Phalcon\Text::uncamelize("CocoBongo"); // coco_bongo
     * echo Phalcon\Text::uncamelize("CocoBongo", "-"); // coco-bongo
     * ```
     *
     * @param string $text
     * @param mixed $delimiter
     * @return string
     */
    public static function uncamelize(string $text, $delimiter = null): string
    {
    }

    /**
     * Makes a phrase underscored instead of spaced
     *
     * ```php
     * echo Phalcon\Text::underscore("look behind"); // "look_behind"
     * echo Phalcon\Text::underscore("Awesome Phalcon"); // "Awesome_Phalcon"
     * ```
     *
     * @param string $text
     * @return string
     */
    public static function underscore(string $text): string
    {
    }

    /**
     * Uppercases a string, this function makes use of the mbstring extension if
     * available
     *
     * ```php
     * echo Phalcon\Text::upper("hello"); // HELLO
     * ```
     *
     * @param string $text
     * @param string $encoding
     * @return string
     */
    public static function upper(string $text, string $encoding = 'UTF-8'): string
    {
    }
}
