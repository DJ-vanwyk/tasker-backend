<?php

class Router
{
    public $get_routes = [];
    private $post = [];
    private $put = [];
    private $delete = [];

    public function get($path, $controler)
    {
        $this->get_routes[$path] = $controler;
    }

    public function post($path, $controler)
    {
        array_push($this->post, [$path => $controler]);
    }

    public function put($path, $controler)
    {
        array_push($this->put, [$path => $controler]);
    }

    public function delete($path, $controler)
    {
        array_push($this->delete, [$path => $controler]);
    }

    function run(Request $request)
    {
        switch ($request->method) {
            case 'GET':
                if (isset($this->get_routes[$request->path])) {
                    $controller = $this->get_routes[$request->path];
                    $controller->go();
                } else {
                    require './views/404.php';
                }
                break;
            case 'POST':
                $controller = $this->post[$request->path];
                $controller->go();
                break;
            case 'PUT':
                $controller = $this->put[$request->path];
                $controller->go();
                break;
            case 'DELETE':
                $controller = $this->delete[$request->path];
                $controller->go();
                break;
        }
    }
}
