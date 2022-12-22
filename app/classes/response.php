<?php

class Response
{
    public $code;
    public $message;
    public $data;

    public function __construct($code, $message, $data = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public function send_json()
    {
        http_response_code($this->code);
        header('Content-Type: application/json');
        echo json_encode([
            'code' => $this->code,
            'message' => $this->message,
            'data' => $this->data,
        ]);
    }
}
