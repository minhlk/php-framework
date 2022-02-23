<?php

class IndexController {
    private $model;

    function __construct($modelName)
    {
        $this->model = new $modelName;
    }

    public function index()
    {
        return "Index Method";
    }

    public function login()
    {
        echo "Login Method";
    }

    public function users()
    {
        echo $this->model->getUsers();
    }
}
