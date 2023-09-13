<?php

namespace Controller;

use Core\Validation;
use Core\View;
use Model\LessonModel;

class HomeController
{
    function index()
    {
        try {
            //code...
            $lesson = new LessonModel;
            $allLessons = $lesson->getAllLessons();
            $status_code = 200;
            View::load("home", ["lessons" => $allLessons]);
        } catch (\Exception $th) {
            //throw $th;
            $status_code = $th->getCode();
            $msg = $th->getMessage();
            View::load("inc/error", ["msg" => $msg]);
        } finally {
            http_response_code($status_code);
        }
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
