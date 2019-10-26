<?php

namespace Phalcon\Mvc\View\Engine;

use Phalcon\Mvc\View\Engine\AbstractEngine;

/**
 * Adapter to use PHP itself as templating engine
 */
class Php extends AbstractEngine
{

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param mixed $params
     * @param bool $mustClean
     */
    public function render(string $path, $params, bool $mustClean = false)
    {
    }

}
