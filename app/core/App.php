<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    private $userModel;

    public function __construct()
    {
        session_start();
        
        // Include the User_model class
        $url = $this->parseURL();

        // Controller
        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if (!isset($_SESSION['user'])) {
            if (isset($url[1]) && $url[1] === 'register') {
                $this->method = 'register';
            } else {
                $this->method = 'login';
            }
        } else {
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            }
        }
        unset($url[1]);

        // Parameters
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan controller dan method, serta kirimkan params jika ada
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
?>
