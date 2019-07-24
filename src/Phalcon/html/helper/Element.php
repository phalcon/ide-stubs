<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Helper\AbstractHelper;

/**
 * Phalcon\Html\Helper\Address
 *
 * Creates an element
 */
class Element extends AbstractHelper
{
	/**
	 * @var string tag        The tag name
	 * @var string text       The text for the anchor
	 * @var array  attributes Any additional attributes
	 */
	public function __invoke(string $tag, string $text, array $attributes = []) : string
	{
	}
}
