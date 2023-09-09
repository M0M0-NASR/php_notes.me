<?php


namespace Core;

use Composer\Autoload\ClassLoader;
use Controller\HomeController;
// use Controller\HomeController;

class App extends \Composer\Autoload\ClassLoader
{
    private string $controller = "Controller\\";
    private string $action;
    private array $params = [];
    private array $queryParams = [];
    public function __construct()
    {
        $this->prepare();
        $this->render();
    }


    private function prepare()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, "/");
        $uri = explode("?", $uri, 2);
        $uri = explode("/", $uri[0], 3);

        $this->controller .= (empty($uri[0]) ? "Home" : ucfirst($uri[0])) . "Controller";
        $this->action = empty($uri[1]) ? "index" : strtolower($uri[1]);
        $this->params = explode("?", $uri[2] ?? "", 2);
        $this->queryParams = explode(";", $this->params[1] ?? "");
        $this->params = explode("/", $this->params[0]);
    }

    private function render()
    {
        if (class_exists($this->controller)) {
            if (method_exists($this->controller, $this->action)) {
                $class = new $this->controller;
                call_user_func_array([$class, $this->action], $this->params);
            } else {
                echo "Method Not Exist";
            }
        } else {
            echo "Class Not found";
        }
    }
}
