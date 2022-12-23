<?php

class LogoutController extends Controller
{
    public function go()
    {
        session_destroy();
        $response = new Response(200, "Logged Out");
    }
}
