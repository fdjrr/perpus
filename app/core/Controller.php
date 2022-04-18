<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model;
    }

    public function dd($data)
    {
        var_dump($data);
        die;
    }

    public function d($data)
    {
        var_dump($data);
    }
}