<?php

namespace Controller;

use Core\Validation;
use Core\View;
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
        View::load("admin/adminPage", ["lessons" => $allLessons]);
    }


    private function prepareLesson($id): array
    {
        session_start();
        $i = 0;
        $next = $prev = null;
        $lessons = $_SESSION['lessons'];
        $size = count($lessons);
        foreach ($lessons as $row) {
            if ($id == $row['id']) {
                if ($id == $lessons[0]['id'])
                    $next = $lessons[$i + 1]['id'];
                else if ($id == $lessons[$size - 1]['id'])
                    $prev = $lessons[$i - 1]['id'];
                else {
                    $next = $lessons[$i + 1]['id'];;
                    $prev = $lessons[$i - 1]['id'];;
                }
            }
            $i++;
        }
        unset($lessons);
        return [$next, $prev];
    }


    function addLesson()
    {
        View::load("admin/addLesson");
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
