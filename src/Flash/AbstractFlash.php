<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

use Phalcon\Contracts\Flash\FlashTypes;
use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Flash\Exceptions\EscaperServiceUnavailable;
use Phalcon\Flash\Exceptions\FlashMessageNotStringOrArray;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Session\ManagerInterface as SessionInterface;
use Phalcon\Traits\Support\Helper\Str\InterpolateTrait;

/**
 * Shows HTML notifications related to different circumstances. Classes can be
 * stylized using CSS
 *
 * ```php
 * $flash->success("The record was successfully deleted");
 * $flash->error("Cannot open the file");
 * ```
 *
 * @phpstan-import-type flash_messages from FlashTypes
 * @phpstan-import-type flash_css_classes from FlashTypes
 */
abstract class AbstractFlash extends AbstractInjectionAware implements \Phalcon\Flash\FlashInterface
{
    use \Phalcon\Traits\Support\Helper\Str\InterpolateTrait;


    protected bool $autoescape = true;

    protected bool $automaticHtml = true;

    /**
     * @phpstan-var flash_css_classes
     */
    protected array $cssClasses = [];

    /**
     * @phpstan-var flash_css_classes
     */
    protected array $cssIconClasses = [];

    protected string $customTemplate = '';

    protected ?\Phalcon\Html\Escaper\EscaperInterface $escaperService = null;

    protected bool $implicitFlush = true;

    /**
     * @phpstan-var flash_messages
     */
    protected array $messages = [];

    protected ?\Phalcon\Session\ManagerInterface $sessionService = null;

    /**
     * AbstractFlash constructor.
     *
     * @param \Phalcon\Html\Escaper\EscaperInterface|null $escaper
     * @param \Phalcon\Session\ManagerInterface|null $session
     */
    public function __construct(?\Phalcon\Html\Escaper\EscaperInterface $escaper = null, ?\Phalcon\Session\ManagerInterface $session = null)
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
     * @return string|null
     */
    public function error(string $message): string|null
    {
    }

    /**
     * Returns the flag that defines whether to automatically escape content or not
     *
     * @return bool
     */
    public function getAutoescape(): bool
    {
    }

    /**
     * Returns the flag that defines whether to automatically use HTML or not
     *
     * @return bool
     */
    public function getAutomaticHtml(): bool
    {
    }

    /**
     * Returns the array of the CSS classes for formatting messages. The key is
     * the type of message and the value is the CSS class
     *
     * @phpstan-return flash_css_classes
     * @return array
     */
    public function getCssClasses(): array
    {
    }

    /**
     * Returns the array of the icon CSS classes for formatting messages. The
     * key is the type of message and the value is the icon CSS class
     *
     * @phpstan-return flash_css_classes
     * @return array
     */
    public function getCssIconClasses(): array
    {
    }

    /**
     * Returns the custom template for formatting messages
     *
     * @return string
     */
    public function getCustomTemplate(): string
    {
    }

    /**
     * Returns the Escaper Service
     *
     * @throws Exception
     * @return EscaperInterface
     */
    public function getEscaperService(): EscaperInterface
    {
    }

    /**
     * Outputs a message. Delivery semantics differ per implementation:
     * `Direct` renders and emits immediately, `Session` stores the raw
     * message for output on a later request.
     *
     * @param string $type
     * @param mixed $message
     * @return string|null
     */
    abstract public function message(string $type, $message): string|null;

    /**
     * Shows a HTML notice/information message
     *
     * ```php
     * $flash->notice("This is an information");
     * ```
     *
     * @param string $message
     * @return string|null
     */
    public function notice(string $message): string|null
    {
    }

    /**
     * Outputs a message formatting it with HTML
     *
     * ```php
     * $flash->outputMessage("error", $message);
     * ```
     *
     * @throws Exception
     * @param string $type
     * @param mixed $message
     * @return string|null
     */
    public function outputMessage(string $type, $message): string|null
    {
    }

    /**
     * Set the autoescape mode in generated HTML
     *
     * @param bool $autoescape
     * @return static
     */
    public function setAutoescape(bool $autoescape): static
    {
    }

    /**
     * Set if the output must be implicitly formatted with HTML
     *
     * @param bool $automaticHtml
     * @return static
     */
    public function setAutomaticHtml(bool $automaticHtml): static
    {
    }

    /**
     * Set an array with CSS classes to format the messages
     *
     * @phpstan-param flash_css_classes $cssClasses
     * @param array $cssClasses
     * @return static
     */
    public function setCssClasses(array $cssClasses): static
    {
    }

    /**
     * Set an array with CSS classes to format the icon messages
     *
     * @phpstan-param flash_css_classes $cssIconClasses
     * @param array $cssIconClasses
     * @return static
     */
    public function setCssIconClasses(array $cssIconClasses): static
    {
    }

    /**
     * Set a custom template for showing the messages
     *
     * @param string $customTemplate
     * @return static
     */
    public function setCustomTemplate(string $customTemplate): static
    {
    }

    /**
     * Sets the Escaper Service
     *
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaperService
     * @return static
     */
    public function setEscaperService(\Phalcon\Html\Escaper\EscaperInterface $escaperService): static
    {
    }

    /**
     * Set whether the output must be implicitly flushed to the output or
     * returned as string
     *
     * Note: `output()` is an echo API and requires implicit flush to remain
     * enabled (the default). With implicit flush disabled, `message()` returns
     * the rendered string while `output()` does not emit it.
     *
     * @param bool $implicitFlush
     * @return static
     */
    public function setImplicitFlush(bool $implicitFlush): static
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
     * @return string|null
     */
    public function success(string $message): string|null
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
     * @return string|null
     */
    public function warning(string $message): string|null
    {
    }

    /**
     * Checks the collection and returns the content as a string
     * (array is joined)
     *
     * @phpstan-param flash_css_classes $collection
     * @param array $collection
     * @param string $type
     * @return string
     */
    private function checkClasses(array $collection, string $type): string
    {
    }

    /**
     * Returns the template for the CSS classes (with icon classes). It will
     * either be the custom one (defined) or the default
     *
     * @param string $cssClasses
     * @param string $cssIconClasses
     * @return string
     */
    private function getTemplate(string $cssClasses, string $cssIconClasses): string
    {
    }

    /**
     * Returns the message escaped if the autoEscape is true, otherwise the
     * original message is returned
     *
     * @param string $message
     * @return string
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
     * @return string
     */
    private function prepareHtmlMessage(string $type, string $message): string
    {
    }
}
