<?php

namespace Controller;

use Core\View;

class HomeController
{
    function index()
    {
        View::load("home");
    }
}
