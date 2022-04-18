<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        if (!is_null($url)) {
            if (file_exists("./app/controllers/" . ucfirst($url[0]) . ".php")) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            } else {
                $this->controller = "Errors";
                unset($url[0]);
            }

            require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;

            if (isset($url[1])) {
                if (method_exists($this->controller, strtolower($url[1]))) {
                    $this->method = strtolower($url[1]);
                    unset($url[1]);
                }
            }

            if (!empty($url)) {
                $this->params = array_values($url);
            }
        } else {
            require_once __DIR__ . '/../controllers/' . $this->controller . ".php";
            $this->controller = new $this->controller;
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}