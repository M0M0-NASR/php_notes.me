<?php

namespace Controller;

use Core\Database;
use Core\View;
use Exception;
use Model\Test;

class HomeController
{
    function index()
    {
        View::load("home");
        // echo url();
    }
}
