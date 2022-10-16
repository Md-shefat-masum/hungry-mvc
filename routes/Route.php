<?php

class Route
{
    protected $route_list = [];
    public $name = "sharif";

    public function get($uri, $controller)
    {
        $function = explode('@', $controller)[1];
        $controller = explode('@', $controller)[0];
        $this->route_list[] = [
            'method' => 'GET',
            'uri' => $uri,
            'controller' => $controller,
            'function' => $function,
        ];
    }
    public function post($uri, $controller)
    {
        $function = explode('@', $controller)[1];
        $controller = explode('@', $controller)[0];
        $this->route_list[] = [
            'method' => 'POST',
            'uri' => $uri,
            'controller' => $controller,
            'function' => $function,
        ];
    }

    public function start()
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        $request_uri = $_SERVER['REQUEST_URI'];

        $target_route = [];
        foreach ($this->route_list as $route) {
            $uri = $route['uri'];
            $method = $route['method'];

            if ($uri == $request_uri) {
                if ($method == $request_method) {
                    $target_route = $route;
                } else {
                    echo "error 500 request method not supported.";
                }
            }
        }

        if (!count($target_route)) {
            echo "error 404 page not found";
        } else {
            $controller = $target_route['controller'];
            $function = $target_route['function'];

            // include_once("./App/Http/Controllers/$controller.php");
            // $controller = new $controller();
            $controller = "\\App\\Http\\Controllers\\$controller";
            $controller = new $controller();
            $controller->$function();
        }
    }
}
