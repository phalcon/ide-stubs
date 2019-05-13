<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Helper\AbstractHelper;

/**
 * Phalcon\Html\Helper\Button
 *
 * Creates a button tag
 */
class Button extends AbstractHelper
{
	/**
	 * @var string text       The text for the anchor
	 * @var array  attributes Any additional attributes
	 */
	public function __invoke(string $text, array $attributes = []) : string
	{
	}
}
