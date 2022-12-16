<?php

class Request
{
    public $cookies;
    public $path;
    public $body;
    public $params;
    public $headers;
    public $method;

    function __construct()
    {
        $this->cookies = $_COOKIE;
        $this->body = file_get_contents('php://input');
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        $this->path = $parsed_url['path'];
        $this->params = $_GET;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->headers = getallheaders();
    }

    // function get_path()
    // {
    //     $parsed_url = parse_url($_SERVER['REQUEST_URI']);
    //     $path = explode('/', $parsed_url['path']);
    //     array_shift($path);
    //     if ($path[count($path) - 1] === '') {
    //         array_pop($path);
    //     }
    //     return $path;
    // }
}
