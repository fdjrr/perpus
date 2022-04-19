<?php

class Home extends Controller
{
    public function index()
    {
        // Configturation Page
        $data["title"] = "Home";
        $data["active"] = str_replace(" ", "-", strtolower($data["title"]));
        $data["bg-body"] = "bg-light";

        $data["user"] = $this->model("Home_model")->getUser("Fadjrir Herlambang");
        $this->view("templates/header", $data);
        $this->view("templates/components/navbar", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}