<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractFormatter implements \Phalcon\Logger\Formatter\FormatterInterface
{
    /**
     * Default date format
     *
     * @var string
     */
    protected $dateFormat;


    /**
     * Default date format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
    }

    /**
     * Default date format
     *
     * @param string $dateFormat
     */
    public function setDateFormat(string $dateFormat)
    {
    }

    /**
     * Interpolates context values into the message placeholders
     *
     * @see http://www.php-fig.org/psr/psr-3/ Section 1.2 Message
     * @param string $message
     * @param array $context
     */
    public function interpolate(string $message, $context = null)
    {
    }

    /**
     * Returns the date formatted for the logger.
     *
     * @todo Not using the set time from the Item since we have interface
     * misalignment which will break semver This will change in the future
     * @return string
     */
    protected function getFormattedDate(): string
    {
    }
}
