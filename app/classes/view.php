<?php

class View
{
    protected $data;
    protected $template = 'C:\xampp\htdocs\tasker\app\templates\404.php';

    public function render()
    {
        $data = $this->data;
        include $this->template;
    }
}
