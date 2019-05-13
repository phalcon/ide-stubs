<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Helper\AbstractHelper;

/**
 * Phalcon\Html\Helper\Anchor
 *
 * Creates an anchor
 */
class Anchor extends AbstractHelper
{
	/**
	 * @var string href       The href tag
	 * @var string text       The text for the anchor
	 * @var array  attributes Any additional attributes
	 */
	public function __invoke(string $href, string $text, array $attributes = []) : string
	{
	}
}
