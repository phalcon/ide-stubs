<?php

namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;
use Phalcon\EscaperInterface;

/**
 * Phalcon\Html\Helper\AbstractHelper
 *
 * Abstract class for all html helpers
 */
abstract class AbstractHelper
{
	/**
	 * @var <EscaperInterface>
	 */
	protected $escaper;

	/**
	 * Constructor
	 */
	public function __construct(EscaperInterface $escaper)
	{
	}

	/**
	 * Keeps all the attributes sorted - same order all the tome
	 */
	protected function orderAttributes(array $overrides, array $attributes) : array
	{
	}

	/**
	 * Renders all the attributes
	 */
	protected function renderAttributes(array $attributes) : string
	{
	}

	/**
	 * Renders an element
	 */
	protected function renderElement(string $tag, string $text, array $attributes = [])
	{
	}

	/**
	 * Produces a self close tag i.e. <img />
	 */
	protected function selfClose(string $tag, array $attributes = [])
	{
	}
}
