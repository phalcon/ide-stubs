<?php

namespace Phalcon\Html;

use Phalcon\Di;
use Phalcon\DiInterface;
use Phalcon\Escaper;
use Phalcon\EscaperInterface;
use Phalcon\Service\Locator;
use Phalcon\Service\LocatorInterface;
use Phalcon\Service\LocatorFactoryInterface;

/**
 * Phalcon\Html\TagLocator
 *
 * ServiceLocator implementation for Tag helpers
 */
class TagLocatorFactory implements LocatorFactoryInterface
{
	/**
	 * @var EscaperInterface
	 */
	private $escaper;

	/**
	 * Returns a Locator object with all the helpers defined in anonynous
	 * functions
	 */
	public function newInstance() : LocatorInterface
	{
	}

	/**
	 * Get the escaper service
	 *
	 * I really don't like this here but it has to be here this way because there
	 * is a lot mroe groundwork to be done to refactor the whole DI implementation
	 */
	private function getEscaper() : EscaperInterface
	{
	}
}
