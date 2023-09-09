<?php

$envFile = dirname(__DIR__) . DS . ".ENV";

if (file_exists($envFile)) {

    $envVaribles = parse_ini_file($envFile);

    foreach ($envVaribles as $key => $value) {
        $_ENV[$key] = $value;
    }
}


// __DIR__
