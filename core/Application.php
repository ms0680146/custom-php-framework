<?php

namespace app\core;

use app\core\Router;
use app\core\Request;
use app\core\Response;

class Application
{
    public static $ROOT_DIR;
    public static $app;
    public $request;
    public $response;
    public $router;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}