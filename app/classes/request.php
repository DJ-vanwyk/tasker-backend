<?php

class Request
{
    public $cookies;
    public $path;
    public $path_segments;
    public $body;
    public $params;
    public $headers;
    public $method;

    function __construct()
    {
        $this->params = $_GET;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->headers = getallheaders();
        $this->cookies = $_COOKIE;
        $this->body = file_get_contents('php://input');

        // Extract the path and params from the request
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        $this->path = $parsed_url['path'];
        // Parse the path into segments
        $this->path_segments = explode('/', $this->path);
        array_shift($this->path_segments);
        // Remove the last element if it is empty
        if ($this->path_segments[count($this->path_segments) - 1] == '') {
            array_pop($this->path_segments);
        }
    }
}
