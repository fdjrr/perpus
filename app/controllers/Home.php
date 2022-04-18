<?php

class Home extends Controller
{
    public function index()
    {
        $data["user"] = $this->model("Home_model")->getUser("Fadjrir Herlambang");
        $this->view("home/index", $data);
    }
}