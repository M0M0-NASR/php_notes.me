<?php

namespace Controller;

use Core\Validation;
use Core\View;
use Exception;
use Model\LessonModel;

class AdminController
{
    // will get all lesson 
    function index(): void
    {
        session_start();

        $lesson = new LessonModel;
        $allLessons = $lesson->getAllLessons();
        $_SESSION['lessons'] = $allLessons;
        View::load("admin/adminPage", ["lessons" => $allLessons, "is_admin" => 0]);
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

    function addLesson()
    {

        try {
            //code...
            View::load("admin/addLesson");
        } catch (\Exception $th) {
            View::load("inc/error", ["msg" => $th->getMessage()]);
        }
    }

    function storeLesson()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];

        try {

            $title = Validation::filterTitle($title);
            $content = Validation::filterContent($content);

            $lesson = new LessonModel;

            $res = $lesson->addLesson($title, $content);

            $status_code = 200;
            $msg = "Lesson Added";
        } catch (\Exception $th) {
            $msg = $th->getMessage();
            $status_code = $th->getCode();
        } finally {
            http_response_code($status_code);
            View::load("admin/addLesson", ["msg" => $msg, "code" => $status_code]);
        }
    }

    function updateLesson()
    {
        View::load("admin/updateLesson");
    }
}
