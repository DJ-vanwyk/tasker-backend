<?php

class LogoutController extends Controller
{
    public function go()
    {
        session_destroy();
        echo 'Loged Out';
    }
}
