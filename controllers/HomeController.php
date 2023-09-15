<?php

declare(strict_types=1);



namespace Controller;

use Core\Validation;
use Core\View;
use Exception;
use Model\LessonModel;

class HomeController
{
    function index()
    {
        try {
            //code...
            session_start();
            $lesson = new LessonModel;
            $allLessons = $lesson->getAllLessons();
            $_SESSION['lessons'] = $allLessons;
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

    function getLesson($id)
    {

        try {
            $lessonModel = new LessonModel;
            [$row, $next, $prev] = $lessonModel->getOneLesson($id);
            if (!$row)
                throw new Exception("DATABASE ERORR:ROW NOT FOUND", 400);
            $row['content'] = htmlspecialchars_decode($row['content']);
            $status_code = 200;
            $msg = "";
            View::load("inc/lesson", ['id' => $id, 'row' => $row, 'next' => $next, 'prev' => $prev]);
        } catch (\Exception $th) {
            //throw $th;
            $status_code = $th->getCode();
            $msg = $th->getMessage();
            View::load("inc/404", ["msg" => $msg, 'status_code' => $status_code]);
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
