<?php

namespace app\Controllers;

use framework\Controllers\AbstractController;
use framework\Interfaces\ControllerInterface;

class HomeController implements ControllerInterface
{

    private array $param;

    public function __construct($param = []){
        $this->param = $param;
    }

    public function index()
    {
        echo 'HomeController';
    }
}