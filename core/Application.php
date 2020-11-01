<?php

namespace app\core;

use app\core\Router;
use app\core\Request;
use app\core\Database;
use app\core\Response;
use app\core\Controller;

class Application
{
    public static $ROOT_DIR;
    public static $app;
    public $controller;
    public $request;
    public $response;
    public $router;
    public $db;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController(Controller $controller)
    {
        $this->controller = $controller;
    }
}