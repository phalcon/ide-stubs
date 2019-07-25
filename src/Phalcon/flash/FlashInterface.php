<?php

namespace Phalcon\Flash;

/**
 * Phalcon\FlashInterface
 *
 * Interface for Phalcon\Flash
 */
interface FlashInterface
{

    /**
     * Shows a HTML error message
     *
     * @param string $message
     * @return string
     */
    public function error(string $message): string;

    /**
     * Outputs a message
     *
     * @param string $type
     * @param string $message
     */
    public function message(string $type, string $message);

    /**
     * Shows a HTML notice/information message
     *
     * @param string $message
     * @return string
     */
    public function notice(string $message): string;

    /**
     * Shows a HTML success message
     *
     * @param string $message
     * @return string
     */
    public function success(string $message): string;

    /**
     * Shows a HTML warning message
     *
     * @param string $message
     * @return string
     */
    public function warning(string $message): string;

}
