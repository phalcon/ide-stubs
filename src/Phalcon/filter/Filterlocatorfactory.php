<?php

namespace Phalcon\Filter;

use Phalcon\Filter\Exception;
use Phalcon\Filter\FilterLocator;
use Phalcon\Filter\Sanitize\AbsInt;
use Phalcon\Filter\Sanitize\Alnum;
use Phalcon\Filter\Sanitize\Alpha;
use Phalcon\Filter\Sanitize\BoolVal;
use Phalcon\Filter\Sanitize\Email;
use Phalcon\Filter\Sanitize\FloatVal;
use Phalcon\Filter\Sanitize\IntVal;
use Phalcon\Filter\Sanitize\Lower;
use Phalcon\Filter\Sanitize\LowerFirst;
use Phalcon\Filter\Sanitize\Regex;
use Phalcon\Filter\Sanitize\Remove;
use Phalcon\Filter\Sanitize\Replace;
use Phalcon\Filter\Sanitize\Special;
use Phalcon\Filter\Sanitize\SpecialFull;
use Phalcon\Filter\Sanitize\StringVal;
use Phalcon\Filter\Sanitize\Striptags;
use Phalcon\Filter\Sanitize\Trim;
use Phalcon\Filter\Sanitize\Upper;
use Phalcon\Filter\Sanitize\UpperFirst;
use Phalcon\Filter\Sanitize\UpperWords;
use Phalcon\Filter\Sanitize\Url;
use Phalcon\Service\LocatorInterface;
use Phalcon\Service\LocatorFactoryInterface;

class FilterLocatorFactory implements LocatorFactoryInterface
{
	/**
	 * Returns a Locator object with all the helpers defined in anonynous
	 * functions
	 */
	public function newInstance() : LocatorInterface
	{
	}
}


