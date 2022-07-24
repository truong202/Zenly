<?php
class Controller
{
    public function model($model)
    {
        if (file_exists('./mvc/Models/' . $model . '.php')) {
            require_once('./mvc/Models/' . $model . '.php');
            return new $model;
        }
        return false;
    }
    public function view($view, $data = [])
    {
        if (file_exists('./mvc/Views/' . $view . '.php')) {
            require_once('./mvc/Views/' . $view . '.php');
        }
    }
}
