<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Flash;

use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Escaper\EscaperInterface;
use Phalcon\Session\ManagerInterface as SessionInterface;

/**
 * Shows HTML notifications related to different circumstances. Classes can be
 * stylized using CSS
 *
 * ```php
 * $flash->success("The record was successfully deleted");
 * $flash->error("Cannot open the file");
 * ```
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
    protected $cssClasses = array();

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
     * @var array
     */
    protected $messages = array();

    /**
     * @var SessionInterface | null
     */
    protected $sessionService = null;


    /**
     * @return bool
     */
    public function getAutoescape(): bool
    {
    }

    /**
     * @return array
     */
    public function getCssClasses(): array
    {
    }

    /**
     * @return string
     */
    public function getCustomTemplate(): string
    {
    }

    /**
     * Phalcon\Flash constructor
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaper
     * @param \Phalcon\Session\ManagerInterface $session
     */
    public function __construct(\Phalcon\Escaper\EscaperInterface $escaper = null, \Phalcon\Session\ManagerInterface $session = null)
    {
    }

    /**
     * Clears accumulated messages when implicit flush is disabled
     *
     * @return void
     */
    public function clear()
    {
    }

    /**
     * Shows a HTML error message
     *
     * ```php
     * $flash->error("This is an error");
     * ```
     *
     * @return null|string|void
     * @param string $message
     */
    public function error(string $message): ?string
    {
    }

    /**
     * Returns the Escaper Service
     *
     * @return EscaperInterface
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
     * @return null|string|void
     * @param string $message
     */
    public function notice(string $message): ?string
    {
    }

    /**
     * Set the autoescape mode in generated HTML
     *
     * @param bool $autoescape
     * @return FlashInterface
     */
    public function setAutoescape(bool $autoescape): FlashInterface
    {
    }

    /**
     * Set if the output must be implicitly formatted with HTML
     *
     * @param bool $automaticHtml
     * @return FlashInterface
     */
    public function setAutomaticHtml(bool $automaticHtml): FlashInterface
    {
    }

    /**
     * Set an array with CSS classes to format the messages
     *
     * @param array $cssClasses
     * @return FlashInterface
     */
    public function setCssClasses(array $cssClasses): FlashInterface
    {
    }

    /**
     * Set an custom template for showing the messages
     *
     * @param string $customTemplate
     * @return FlashInterface
     */
    public function setCustomTemplate(string $customTemplate): FlashInterface
    {
    }

    /**
     * Sets the Escaper Service
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaperService
     * @return FlashInterface
     */
    public function setEscaperService(\Phalcon\Escaper\EscaperInterface $escaperService): FlashInterface
    {
    }

    /**
     * Set whether the output must be implicitly flushed to the output or
     * returned as string
     *
     * @param bool $implicitFlush
     * @return FlashInterface
     */
    public function setImplicitFlush(bool $implicitFlush): FlashInterface
    {
    }

    /**
     * Shows a HTML success message
     *
     * ```php
     * $flash->success("The process was finished successfully");
     * ```
     *
     * @return null|string|void
     * @param string $message
     */
    public function success(string $message): ?string
    {
    }

    /**
     * Outputs a message formatting it with HTML
     *
     * ```php
     * $flash->outputMessage("error", $message);
     * ```
     *
     * @param string|array $message
     * @return null|string|void
     * @param string $type
     */
    public function outputMessage(string $type, $message)
    {
    }

    /**
     * Shows a HTML warning message
     *
     * ```php
     * $flash->warning("Hey, this is important");
     * ```
     *
     * @return null|string|void
     * @param string $message
     */
    public function warning(string $message): ?string
    {
    }

    /**
     * @param string $cssClassses
     * @return string
     */
    private function getTemplate(string $cssClassses): string
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
