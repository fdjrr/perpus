<?php

class Errors extends Controller
{
    public function index($error = "404")
    {
        $data["error"] = $error;
        $this->view("errors/index", $data);
    }
}