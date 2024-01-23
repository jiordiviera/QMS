<?php

namespace Router;


class Router
{
    /**
     * @var string
     */
    private $viewPath;

    /**
     * @var AltoRouter
     */
    private $router;

    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
        $this->router = new AltoRouter();
    }

    public function get(string $url, string $view, ?string $name = null)
    {
        $this->router->map('GET', $url, $view, $name);

        return $this;
    }

    public function run()
    {
        $match = $this->router->match();  // Correction de la faute de frappe
        $view = $match['target'];
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        return $this;
    }
}
