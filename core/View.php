<?php

namespace Core;

class View
{
    public static function load(string $viewName, array $data = []): void
    {
        $file = VIEWS . $viewName . ".php";
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require($file);
            ob_end_flush();
        } else {
            echo "$viewName View:: Not Exist";
        }
    }
}
