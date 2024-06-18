<?php
namespace app\core;
class Router   {

    public $request;
    public $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response) {
        $this->request =  $request;
        $this->response = $response;
    }
    public function get($end_point, $callback) {
        $this->routes['get'][$end_point] = $callback;
    }
    public function post($end_point, $callback) {
        $this->routes['post'][$end_point] = $callback;   
    }
    public function resolver() {
        $end_point = $this->request->getPath();
        $action = $this->request->method();
        
        $callback = $this->routes[$action][$end_point] ?? false;

        if ($callback === false) {
            $this->response->setRespnseStatus(404);
            return $this->renderView('_404');
        }

        if(is_string($callback)) {
            return $this->renderView($callback);
        }
        if(is_array($callback)) {
            var_dump($callback);
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }
        return call_user_func($callback, $this->request);
    }
    public function renderView($view, $params = []) {
        //$layoutContent = $this->layoutContent();
        //$viewContent = $this->renderOnlyView($view, $params);
        //$viewContent = str_replace('{{ content }}', $viewContent, $layoutContent);
        $viewContent = $this->renderOnlyView($view, $params);
        return $viewContent;
    }

	protected function layoutContent(){
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR ."/views/templates/$layout.php";
        return ob_get_clean();
	}

	protected function renderOnlyView($view, $params){
        $layout = Application::$app->controller->layout;
        if(is_array($params) && !empty($params)) {
            foreach ($params as $key => $value) {
                $$key = $value;
            }
        }
        ob_start();
        include_once Application::$ROOT_DIR ."/views/$view.php";
        include_once Application::$ROOT_DIR ."/views/templates/$layout.php";
        return ob_get_clean();
	}

}