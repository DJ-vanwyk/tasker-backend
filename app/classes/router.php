<?php

class Router
{
    public $get_routes = [];
    private $post_routes = [];
    private $put_routes = [];
    private $delete_routes = [];

    //Registers new get route
    public function get($path, $controler)
    {
        $this->get_routes[ROOT . $path] = $controler;
    }
    // Registers new post route
    public function post($path, $controler)
    {
        $this->post_routes[ROOT . $path] = $controler;
    }
    // Registers new put route
    public function put($path, $controler)
    {
        $this->put_routes[ROOT . $path] = $controler;
    }
    // Registers new delete route
    public function delete($path, $controler)
    {
        $this->delete_routes[ROOT . $path] = $controler;
    }
    // Runs the router
    function run(Request $request)
    {
        $path_found = false;
        // Loops through all routes and checks if the path matches
        foreach (
            $this->{strtolower($request->method) . '_routes'}
            as $pattern => $controller
        ) {
            // If the path matches, run the controller
            if (preg_match("#^$pattern$#", $request->path)) {
                $path_found = true;
                $controller->set_request($request);
                $controller->go();
                break;
            }
        }
        // If the path is not found, throw an error
        if (!$path_found) {
            http_response_code(404);
            echo '404 Not Found';
        }
    }
}
