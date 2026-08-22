<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Exception;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Exceptions\FriendlyTitleConversionFailed;
use Phalcon\Support\Helper\Str\Friendly;

/**
 * Converts text to a URL-friendly slug.
 */
class FriendlyTitle extends \Phalcon\Html\Helper\AbstractHelper
{
    protected \Phalcon\Support\Helper\Str\Friendly $friendly;

    /**
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaper
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper)
    {
    }

    /**
     * @phpstan-param array<array-key, string>|string|null $replace
     * @param string $text
     * @param string $separator
     * @param bool $lowercase
     * @param mixed $replace
     * @return string
     */
    public function __invoke(string $text, string $separator = '-', bool $lowercase = true, $replace = null): string
    {
    }
}
