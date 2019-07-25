<?php

namespace Phalcon\Flash;

/**
 * Shows HTML notifications related to different circumstances. Classes can be
 * stylized using CSS
 *
 * ```php
 * $flash->success("The record was successfully deleted");
 * $flash->error("Cannot open the file");
 * ```
 */
abstract class AbstractFlash implements \Phalcon\Flash\FlashInterface, \Phalcon\Di\InjectionAwareInterface
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


    protected $container = null;


    protected $escaperService = null;

    /**
     * @var bool
     */
    protected $implicitFlush = true;


    protected $messages = array();


    /**
     * Phalcon\Flash constructor
     *
     * @param mixed $cssClasses
     */
    public function __construct($cssClasses = null) {}

    /**
     * Clears accumulated messages when implicit flush is disabled
     */
    public function clear() {}

    /**
     * Shows a HTML error message
     *
     * ```php
     * $flash->error("This is an error");
     * ```
     *
     * @param string $message
     * @return string
     */
    public function error(string $message): string {}

    /**
     * Returns the autoescape mode in generated html
     *
     * @return bool
     */
    public function getAutoescape(): bool {}

    /**
     * Returns the custom template set
     *
     * @return string
     */
    public function getCustomTemplate(): string {}

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface {}

    /**
     * Returns the Escaper Service
     *
     * @return \Phalcon\Escaper\EscaperInterface
     */
    public function getEscaperService(): EscaperInterface {}

    /**
     * Shows a HTML notice/information message
     *
     * ```php
     * $flash->notice("This is an information");
     * ```
     *
     * @param string $message
     * @return string
     */
    public function notice(string $message): string {}

    /**
     * Set the autoescape mode in generated html
     *
     * @param bool $autoescape
     * @return Flash
     */
    public function setAutoescape(bool $autoescape): Flash {}

    /**
     * Set if the output must be implicitly formatted with HTML
     *
     * @param bool $automaticHtml
     * @return FlashInterface
     */
    public function setAutomaticHtml(bool $automaticHtml): FlashInterface {}

    /**
     * Set an array with CSS classes to format the messages
     *
     * @param array $cssClasses
     * @return FlashInterface
     */
    public function setCssClasses(array $cssClasses): FlashInterface {}

    /**
     * Set an custom template for showing the messages
     *
     * @param string $customTemplate
     * @return FlashInterface
     */
    public function setCustomTemplate(string $customTemplate): FlashInterface {}

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return FlashInterface
     */
    public function setDI(\Phalcon\Di\DiInterface $container): FlashInterface {}

    /**
     * Sets the Escaper Service
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaperService
     * @return FlashInterface
     */
    public function setEscaperService(\Phalcon\Escaper\EscaperInterface $escaperService): FlashInterface {}

    /**
     * Set whether the output must be implicitly flushed to the output or
     * returned as string
     *
     * @param bool $implicitFlush
     * @return FlashInterface
     */
    public function setImplicitFlush(bool $implicitFlush): FlashInterface {}

    /**
     * Shows a HTML success message
     *
     * ```php
     * $flash->success("The process was finished successfully");
     * ```
     *
     * @param string $message
     * @return string
     */
    public function success(string $message): string {}

    /**
     * Outputs a message formatting it with HTML
     *
     * ```php
     * $flash->outputMessage("error", $message);
     * ```
     *
     * @param string $type
     * @param string|array $message
     * @return string|void
     */
    public function outputMessage(string $type, $message) {}

    /**
     * Shows a HTML warning message
     *
     * ```php
     * $flash->warning("Hey, this is important");
     * ```
     *
     * @param string $message
     * @return string
     */
    public function warning(string $message): string {}

    /**
     * @param string $cssClassses
     * @return string
     */
    private function getTemplate(string $cssClassses): string {}

    /**
     * Returns the message escaped if the autoEscape is true, otherwise the
     * original message is returned
     *
     * @param string $message
     * @return string
     */
    private function prepareEscapedMessage(string $message): string {}

    /**
     * Prepares the HTML output for the message. If automaticHtml is not set
     * then the original message is returned
     *
     * @param string $type
     * @param string $message
     * @return string
     */
    private function prepareHtmlMessage(string $type, string $message): string {}

}
