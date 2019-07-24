<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Helper\AbstractHelper;

/**
 * Phalcon\Html\Helper\TextArea
 *
 * Creates a textarea tag
 */
class TextArea extends AbstractHelper
{
	/**
	 * @var string text       The text for the anchor
	 * @var array  attributes Any additional attributes
	 */
	public function __invoke(string $text, array $attributes = []) : string
	{
	}
}
