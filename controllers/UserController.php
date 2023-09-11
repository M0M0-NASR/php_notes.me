<?php

namespace Controller;

use Core\View;

class UserController
{
    function index(): void
    {
        View::load("home");
    }
    function lesson(): void
    {
        View::load("user/lesson");
    }
}
