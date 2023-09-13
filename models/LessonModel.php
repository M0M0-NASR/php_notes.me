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
            return $stmt->fetch();
        } catch (\Exception $e) {
            //throw $th;
            throw new Exception("DataBase Error", 500);
        }
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
