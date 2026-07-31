<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Responder;

use Phalcon\Contracts\ADR\Payload\Payload;
use Phalcon\Contracts\ADR\Responder\Responder;
use Phalcon\Contracts\View\Renderer;
use Phalcon\Http\RequestInterface;
use Phalcon\Http\ResponseInterface;

/**
 * Renders a template from the payload and returns it as an HTML response.
 *
 * The HTML sibling of `JsonResponder`: serialization is swapped for rendering,
 * the status mapping and the `Responder` contract stay the same. It depends on
 * the neutral `Renderer` contract only, so the ADR component never imports the
 * MVC view.
 */
final class ViewResponder implements \Phalcon\Contracts\ADR\Responder\Responder
{
    protected \Phalcon\Contracts\View\Renderer $renderer;

    protected StatusMapper $statusMapper;

    protected string $template = '';

    /**
     * @param \Phalcon\Contracts\View\Renderer $renderer
     * @param StatusMapper $statusMapper
     * @param string $template
     */
    public function __construct(\Phalcon\Contracts\View\Renderer $renderer, StatusMapper $statusMapper, string $template = '')
    {
    }

    /**
     * @param \Phalcon\Http\RequestInterface $request
     * @param \Phalcon\Http\ResponseInterface $response
     * @param \Phalcon\Contracts\ADR\Payload\Payload $payload
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Http\RequestInterface $request, \Phalcon\Http\ResponseInterface $response, \Phalcon\Contracts\ADR\Payload\Payload $payload): ResponseInterface
    {
    }

    /**
     * Returns a copy of the responder bound to the given template. The action
     * names the view; the payload stays free of presentation concerns.
     *
     * @param string $template
     * @return static
     */
    public function withTemplate(string $template): static
    {
    }

    /**
     * Flattens the payload into the variables handed to the template. The
     * extras travel as they are, so an action can hand the view whatever the
     * result should not carry.
     *
     * @param \Phalcon\Contracts\ADR\Payload\Payload $payload
     * @return array
     */
    protected function viewData(\Phalcon\Contracts\ADR\Payload\Payload $payload): array
    {
    }
}
