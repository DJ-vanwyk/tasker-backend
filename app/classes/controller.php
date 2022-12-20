<?php
class Controller
{
    protected $request;

    public function set_request(Request $request)
    {
        $this->request = $request;
    }

    public function get_request()
    {
        return $this->request;
    }
}
