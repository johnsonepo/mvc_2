<?php
namespace app\core;
use app\controllers;

class Application{
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;
    public static string $ROOT_DIR;
    public function __construct($rootPath){
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->response = new Response();
        $this->request = new Request();
        $this->router = new Router($this->request, $this->response);
    }
    public function run(){
        echo $this->router->resolver();
    }

}