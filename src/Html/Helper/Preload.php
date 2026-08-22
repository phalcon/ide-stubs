<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Link\Link;
use Phalcon\Html\Link\Serializer\Header;
use Phalcon\Http\ResponseInterface;

/**
 * Generates a <link rel="preload"> tag for resource hinting.
 * If a ResponseInterface is provided, also sets the HTTP Link header.
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Preload extends \Phalcon\Html\Helper\AbstractHelper
{
    protected ?\Phalcon\Http\ResponseInterface $response = null;

    /**
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaper
     * @param \Phalcon\Http\ResponseInterface|null $response
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, ?\Phalcon\Http\ResponseInterface $response = null)
    {
    }

    /**
     * @phpstan-param html_attributes $attributes
     * @param string $href
     * @param string $type
     * @param array $attributes
     * @return string
     */
    public function __invoke(string $href, string $type = 'style', array $attributes = []): string
    {
    }
}
