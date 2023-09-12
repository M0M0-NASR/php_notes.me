<?php

namespace Core;

class Validation
{

    static function filterContent(string $content)
    {
        if (is_string($content)) {

            $content  = filter_var($content, FILTER_SANITIZE_SPECIAL_CHARS);

            if (strlen($content) >= 50) {
                return $content;
            } else {
                throw new \Exception("Content Must be more than 50 Chars");
            }
        } else {
            throw new \Exception("Content NOT STRING");
        }
    }



    static function filterTitle(string $title)
    {
        // chenck if Not string
        if (is_string($title)) {
            // sanitize $tilel;
            $title =  filter_var($title, FILTER_SANITIZE_SPECIAL_CHARS);

            // check Length
            if (strlen($title) >= 8 && strlen($title) <= 50) {
                return $title;
            } else {
                throw new \Exception("Title Must be between (7 - 50) Chars");
            }
        } else {
            throw new \Exception("Title NOT STRING");
        }
    }
}
// 
