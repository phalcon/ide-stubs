<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Helper;

/**
 * This class offers quick string functions throughout the framework
 */
class Str
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
     * use Phalcon\Helper\Str;
     *
     * echo Str::camelize("coco_bongo");            // CocoBongo
     * echo Str::camelize("co_co-bon_go", "-");     // Co_coBon_go
     * echo Str::camelize("co_co-bon_go", "_-");    // CoCoBonGo
     * ```
     *
     * @param string $text
     * @param mixed  $delimiter
     *
     * @return string
     */
    final public static function camelize(string $text, $delimiter = null): string
    {
    }

    /**
     * Concatenates strings using the separator only once without duplication in
     * places concatenation
     *
     * ```php
     * $str = Phalcon\Helper\Str::concat(
     *     "/",
     *     "/tmp/",
     *     "/folder_1/",
     *     "/folder_2",
     *     "folder_3/"
     * );
     *
     * echo $str;   // /tmp/folder_1/folder_2/folder_3/
     * ```
     *
     * @param string $separator
     * @param string $a
     * @param string $b
     * @param string ...N
     *
     * @return string
     * @param string  ...N
     *
     */
    final public static function concat(): string
    {
    }

    /**
     * Returns number of vowels in provided string. Uses a regular expression
     * to count the number of vowels (A, E, I, O, U) in a string.
     *
     * @param string $string
     *
     * @return int
     * @param string $text
     */
    final public static function countVowels(string $text): int
    {
    }

    /**
     * Decapitalizes the first letter of the string and then adds it with rest
     * of the string. Omit the upperRest parameter to keep the rest of the
     * string intact, or set it to true to convert to uppercase.
     *
     * @param string $string
     * @param bool   $upperRest
     * @param string $encoding
     *
     * @return string
     * @param string $text
     */
    final public static function decapitalize(string $text, bool $upperRest = false, string $encoding = 'UTF-8'): string
    {
    }

    /**
     * Removes a number from a string or decrements that number if it already is defined.
     * defined
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::decrement("a_1");    // "a"
     * echo Str::decrement("a_2");  // "a_1"
     * ```
     *
     * @param string $text
     * @param string $separator
     *
     * @return string
     */
    final public static function decrement(string $text, string $separator = '_'): string
    {
    }

    /**
     * Accepts a file name (without extension) and returns a calculated
     * directory structure with the filename in the end
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::dirFromFile("file1234.jpg"); // fi/le/12/
     * ```
     *
     * @param string $file
     *
     * @return string
     */
    final public static function dirFromFile(string $file): string
    {
    }

    /**
     * Accepts a directory name and ensures that it ends with
     * DIRECTORY_SEPARATOR
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::dirSeparator("/home/phalcon"); // /home/phalcon/
     * ```
     *
     * @param string $directory
     *
     * @return string
     */
    final public static function dirSeparator(string $directory): string
    {
    }

    /**
     * Generates random text in accordance with the template
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * // Hi my name is a Bob
     * echo Str::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hi my name is a Jon
     * echo Str::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hello my name is a Bob
     * echo Str::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hello my name is a Zyxep
     * echo Str::dynamic(
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
     *
     * @return string
     */
    final public static function dynamic(string $text, string $leftDelimiter = '{', string $rightDelimiter = '}', string $separator = '|'): string
    {
    }

    /**
     * Check if a string ends with a given string
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::endsWith("Hello", "llo");          // true
     * echo Str::endsWith("Hello", "LLO", false);   // false
     * echo Str::endsWith("Hello", "LLO");          // true
     * ```
     *
     * @param string $text
     * @param string $end
     * @param bool   $ignoreCase
     *
     * @return bool
     */
    final public static function endsWith(string $text, string $end, bool $ignoreCase = true): bool
    {
    }

    /**
     * Returns the first string there is between the strings from the
     * parameter start and end.
     *
     * @param string $text
     * @param string $start
     * @param string $end
     *
     * @return string
     */
    final public static function firstBetween(string $text, string $start, string $end): string
    {
    }

    /**
     * Makes an underscored or dashed phrase human-readable
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::humanize("start-a-horse"); // "start a horse"
     * echo Str::humanize("five_cats");     // "five cats"
     * ```
     *
     * @param string $text
     *
     * @return string
     */
    final public static function humanize(string $text): string
    {
    }

    /**
     * Lets you determine whether or not a string includes another string.
     *
     * @param string $needle
     * @param string $haystack
     *
     * @return bool
     */
    final public static function includes(string $needle, string $haystack): bool
    {
    }

    /**
     * Adds a number to a string or increment that number if it already is
     * defined
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::increment("a");    // "a_1"
     * echo Str::increment("a_1");  // "a_2"
     * ```
     *
     * @param string $text
     * @param string $separator
     *
     * @return string
     */
    final public static function increment(string $text, string $separator = '_'): string
    {
    }

    /**
     * Compare two strings and returns true if both strings are anagram,
     * false otherwise.
     *
     * @param string $first
     * @param string $second
     *
     * @return bool
     */
    final public static function isAnagram(string $first, string $second): bool
    {
    }

    /**
     * Returns true if the given string is lower case, false otherwise.
     *
     * @param string $text
     * @param string $encoding
     *
     * @return bool
     */
    final public static function isLower(string $text, string $encoding = 'UTF-8'): bool
    {
    }

    /**
     * Returns true if the given string is a palindrome, false otherwise.
     *
     * @param string $text
     *
     * @return bool
     */
    final public static function isPalindrome(string $text): bool
    {
    }

    /**
     * Returns true if the given string is upper case, false otherwise.
     *
     * @param string $text
     * @param string $encoding *
     * @return bool
     */
    final public static function isUpper(string $text, string $encoding = 'UTF-8'): bool
    {
    }

    /**
     * Lowercases a string, this function makes use of the mbstring extension if
     * available
     *
     * ```php
     * echo Phalcon\Helper\Str::lower("HELLO"); // hello
     * ```
     *
     * @param string $text
     * @param string $encoding
     *
     * @return string
     */
    final public static function lower(string $text, string $encoding = 'UTF-8'): string
    {
    }

    /**
     * Generates a random string based on the given type. Type is one of the
     * RANDOM_ constants
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::random(Str::RANDOM_ALNUM); // "aloiwkqz"
     * ```
     *
     * @param int $type
     * @param int $length
     *
     * @return string
     */
    final public static function random(int $type = 0, int $length = 8): string
    {
    }

    /**
     * Reduces multiple slashes in a string to single slashes
     *
     * ```php
     * // foo/bar/baz
     * echo Phalcon\Helper\Str::reduceSlashes("foo//bar/baz");
     *
     * // http://foo.bar/baz/buz
     * echo Phalcon\Helper\Str::reduceSlashes("http://foo.bar///baz/buz");
     * ```
     *
     * @param string $text
     *
     * @return string
     */
    final public static function reduceSlashes(string $text): string
    {
    }

    /**
     * Check if a string starts with a given string
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::startsWith("Hello", "He");         // true
     * echo Str::startsWith("Hello", "he", false);  // false
     * echo Str::startsWith("Hello", "he");         // true
     * ```
     *
     * @param string $text
     * @param string $start
     * @param bool   $ignoreCase
     *
     * @return bool
     */
    final public static function startsWith(string $text, string $start, bool $ignoreCase = true): bool
    {
    }

    /**
     * Uncamelize strings which are camelized
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::uncamelize("CocoBongo");       // coco_bongo
     * echo Str::uncamelize("CocoBongo", "-");  // coco-bongo
     * ```
     *
     * @param string $text
     * @param mixed  $delimiter
     *
     * @return string
     */
    final public static function uncamelize(string $text, $delimiter = null): string
    {
    }

    /**
     * Makes a phrase underscored instead of spaced
     *
     * ```php
     * use Phalcon\Helper\Str;
     *
     * echo Str::underscore("look behind");     // "look_behind"
     * echo Str::underscore("Awesome Phalcon"); // "Awesome_Phalcon"
     * ```
     *
     * @param string $text
     *
     * @return string
     */
    final public static function underscore(string $text): string
    {
    }

    /**
     * Uppercases a string, this function makes use of the mbstring extension if
     * available
     *
     * ```php
     * echo Phalcon\Helper\Str::upper("hello"); // HELLO
     * ```
     *
     * @param string $text
     * @param string $encoding
     *
     * @return string
     */
    final public static function upper(string $text, string $encoding = 'UTF-8'): string
    {
    }
}
