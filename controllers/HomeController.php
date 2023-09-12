<?php

namespace Controller;

use Core\Validation;
use Core\View;
use Model\LessonModel;

class HomeController
{
    function index()
    {
        $lesson = new LessonModel;
        $allLessons = $lesson->getAllLessons();
        View::load("home", ["lessons" => $allLessons]);
    }

    function contact()
    {
        View::load("user/contact");
    }

    function about()
    {
        View::load("user/about");
    }

    function contribute()
    {
        View::load("user/contribute");
    }
}
