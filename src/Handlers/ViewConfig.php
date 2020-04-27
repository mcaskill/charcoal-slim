<?php

namespace Charcoal\Slim\Handlers;

use Charcoal\Config\GenericConfig;

class ViewConfig extends GenericConfig
{
    /**
     * @var string
     */
    protected $controller;

    /**
     * The view engine to use to load and render the template.
     * @var string
     */
    protected $engine;

    /**
     * The template to render.
     * @var string|null
     */
    protected $template;
}
