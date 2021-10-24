<?php

namespace app\Controllers;

use \framework\Interfaces\ControllerInterface;

class Page404Controller implements ControllerInterface
{

    public function index()
    {
        echo '404 Page not found!';
    }
}