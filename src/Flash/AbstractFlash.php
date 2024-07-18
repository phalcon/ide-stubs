<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Session\ManagerInterface as SessionInterface;
use Phalcon\Support\Helper\Str\Interpolate;

/**
 * Shows HTML notifications related to different circumstances. Classes can be
 * stylized using CSS
 *
 * ```php
 * $flash->success("The record was successfully deleted");
 * $flash->error("Cannot open the file");
 * ```
 *
 * Class AbstractFlash
 *
 * @package Phalcon\Flash
 */
abstract class AbstractFlash extends AbstractInjectionAware implements \Phalcon\Flash\FlashInterface
{
    /**
     * @var bool
     */
    protected $autoescape = true;

    /**
     * @var bool
     */
    protected $automaticHtml = true;

    /**
     * @var array
     */
    protected $cssClasses = [];

    /**
     * @var array
     */
    protected $cssIconClasses = [];

    /**
     * @var string
     */
    protected $customTemplate = '';

    /**
     * @var EscaperInterface | null
     */
    protected $escaperService = null;

    /**
     * @var bool
     */
    protected $implicitFlush = true;

    /**
     * @var Interpolate
     */
    protected $interpolator;

    /**
     * @var array
     */
    protected $messages = [];

    /**
     * @var SessionInterface|null
     */
    protected $sessionService = null;

    /**
     * AbstractFlash constructor.
     *
     * @param EscaperInterface|null $escaper
     * @param SessionInterface|null $session
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper = null, \Phalcon\Session\ManagerInterface $session = null)
    {
    }

    /**
     * Clears accumulated messages when implicit flush is disabled
     *
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * Shows a HTML error message
     *
     * ```php
     * $flash->error("This is an error");
     * ```
     *
     * @param string $message
     *
     * @return string|null
     */
    public function error(string $message): string|null
    {
    }

    /**
     * @return bool
     */
    public function getAutoescape(): bool
    {
    }

    /**
     * @return bool
     */
    public function getAutomaticHtml(): bool
    {
    }

    /**
     * @return array
     */
    public function getCssClasses(): array
    {
    }

    /**
     * @return array
     */
    public function getCssIconClasses(): array
    {
    }

    /**
     * @return string
     */
    public function getCustomTemplate(): string
    {
    }

    /**
     * Returns the Escaper Service
     *
     * @return EscaperInterface
     * @throws Exception
     */
    public function getEscaperService(): EscaperInterface
    {
    }

    /**
     * Shows a HTML notice/information message
     *
     * ```php
     * $flash->notice("This is an information");
     * ```
     *
     * @param string $message
     *
     * @return string|null
     */
    public function notice(string $message): string|null
    {
    }

    /**
     * Set the autoescape mode in generated HTML
     *
     * @param bool $autoescape
     * @return AbstractFlash
     */
    public function setAutoescape(bool $autoescape): AbstractFlash
    {
    }

    /**
     * Set if the output must be implicitly formatted with HTML
     *
     * @param bool $automaticHtml
     * @return AbstractFlash
     */
    public function setAutomaticHtml(bool $automaticHtml): AbstractFlash
    {
    }

    /**
     * Set an array with CSS classes to format the messages
     *
     * @param array $cssClasses
     * @return AbstractFlash
     */
    public function setCssClasses(array $cssClasses): AbstractFlash
    {
    }

    /**
     * Set an array with CSS classes to format the icon messages
     *
     * @param array $cssIconClasses
     * @return AbstractFlash
     */
    public function setCssIconClasses(array $cssIconClasses): AbstractFlash
    {
    }

    /**
     * Set a custom template for showing the messages
     *
     * @param string $customTemplate
     * @return AbstractFlash
     */
    public function setCustomTemplate(string $customTemplate): AbstractFlash
    {
    }

    /**
     * Sets the Escaper Service
     *
     * @param EscaperInterface $escaperService
     * @return AbstractFlash
     */
    public function setEscaperService(\Phalcon\Html\Escaper\EscaperInterface $escaperService): AbstractFlash
    {
    }

    /**
     * Set whether the output must be implicitly flushed to the output or
     * returned as string
     *
     * @param bool $implicitFlush
     * @return AbstractFlash
     */
    public function setImplicitFlush(bool $implicitFlush): AbstractFlash
    {
    }

    /**
     * Shows a HTML success message
     *
     * ```php
     * $flash->success("The process was finished successfully");
     * ```
     *
     * @param string $message
     *
     * @return string|null
     */
    public function success(string $message): string|null
    {
    }

    /**
     * Outputs a message formatting it with HTML
     *
     * ```php
     * $flash->outputMessage("error", $message);
     * ```
     *
     * @param string $type
     * @param mixed  $message
     *
     * @return string|null
     * @throws Exception
     */
    public function outputMessage(string $type, $message): string|null
    {
    }

    /**
     * Shows a HTML warning message
     *
     * ```php
     * $flash->warning("Hey, this is important");
     * ```
     *
     * @param string $message
     *
     * @return string|null
     */
    public function warning(string $message): string|null
    {
    }

    /**
     * Returns the template for the CSS classes (with icon classes). It will
     * either be the custom one (defined) or the default
     *
     * @param string $cssClasses
     * @param string $cssIconClasses
     *
     * @return string
     * @param string $cssClassses
     */
    private function getTemplate(string $cssClassses, string $cssIconClasses): string
    {
    }

    /**
     * Returns the message escaped if the autoEscape is true, otherwise the
     * original message is returned
     *
     * @param string $message
     *
     * @return string
     * @throws Exception
     */
    private function prepareEscapedMessage(string $message): string
    {
    }

    /**
     * Prepares the HTML output for the message. If automaticHtml is not set
     * then the original message is returned
     *
     * @param string $type
     * @param string $message
     *
     * @return string
     */
    private function prepareHtmlMessage(string $type, string $message): string
    {
    }

    /**
     * Checks the collection and returns the content as a string
     * (array is joined)
     *
     * @param array  $collection
     * @param string $type
     *
     * @return string
     */
    private function checkClasses(array $collection, string $type): string
    {
    }
}
