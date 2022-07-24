<?php
class App
{
    private $controller = 'Home';
    private $action = 'Index';
    private $params = [];

    public function __construct()
    {
        $urlArr = $this->UrlProccess();
        if (!empty($urlArr[0])) {
            $urlArr[0] = ucfirst($urlArr[0]);
            if (file_exists('./mvc/Controllers/' . $urlArr[0] . '.php')) {
                $this->controller = $urlArr[0];
            }
            unset($urlArr[0]);
        }

        require_once('./mvc/Controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;
        if (!empty($urlArr[1])) {
            $urlArr[1] = ucfirst($urlArr[1]);
            if (method_exists($this->controller, $urlArr[1])) {
                $this->action = $urlArr[1];
            }
            unset($urlArr[1]);
        }

        $this->params = $urlArr ? array_values($urlArr) : [];

        call_user_func_array(array($this->controller, $this->action), $this->params);
    }

    public function UrlProccess()
    {
        $url = isset($_SERVER['PATH_INFO']) ?  $_SERVER['PATH_INFO'] : '/';
        return array_filter(explode('/', trim($url, '/')));
    }
}
