<?php

namespace Model;

use Core\Model;
use Exception;

class LessonModel extends Model
{
    private string $table = "Lessons";
    private $db;

    function __construct()
    {
        $this->db = new Model;
        $this->db = $this->db->connect();
    }

    function getAllLessons()
    {
        $query = "SELECT * FROM " . $this->table;
        try {
            //code...
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $th) {
            //throw $th;
            throw new \Exception("DataBase Error", 500);
        }
    }

    function getOneLesson($id)
    {
        $id = htmlspecialchars((string) $id);
        $id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);
        try {
            $query = "SELECT * FROM lessons WHERE id =?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            [$next, $prev] = $this->prepareLesson($id);
            return [$row, $next, $prev];
        } catch (\Exception $e) {
            throw new Exception("DataBase Error: Row Not Found ", 500);
        }
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


    function addLesson(string $title, string $content)
    {
        $query = "INSERT INTO " . $this->table . "(title , content) VALUES(?,?)";
        try {
            //code...
            $stmt = $this->db->prepare($query);
            $stmt->execute([$title, $content]);
        } catch (\Exception $e) {
            if ($e->getCode() === "23000")
                throw  new \Exception("Dublicate Row", 400);
            throw new \Exception("Database Error", 500);
        }
    }


    function updateLesson($id)
    {
    }


    function deleteLesson($id)
    {
    }
}
