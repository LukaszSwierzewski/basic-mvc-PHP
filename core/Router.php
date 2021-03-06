<?php



class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []

    ];

    public static function load($file)
    {
        $router = new static;
        require $file;

        return $router;
    }
    public function get($uri, $controller)
    {

        // $getRoutes = [];
        // $getRoutes[] = 'jsdaj';
        // $getRoutes['uri'] = 'baz';
        // var_dump($getRoutes);

        $this->routes["GET"][$uri] = $controller;
    }
    public function post($uri, $controller)
    {
        $this->routes["POST"][$uri] = $controller;
    }
    public function direct($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }
        throw new Exception('no route define for this uri');
    }

    protected function callAction($controller, $action)
    {
        return (new $controller)->$action();
    }
}
