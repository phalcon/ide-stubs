<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger;

abstract class AbstractFormatter implements FormatterInterface
{
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
}
