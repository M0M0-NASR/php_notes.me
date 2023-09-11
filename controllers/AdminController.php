<?php

namespace Controller;

use Core\View;

class AdminController
{
    function index(): void
    {
        View::load("admin/adminPage");
    }
    
    function addLesson()
    {
        View::load("admin/addLesson");
    }
    function updateLesson()
    {
        View::load("admin/updateLesson");
    }


    
}
