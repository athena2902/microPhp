<?php

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    $fileName = end($parts);
    if (strpos($class, 'Controllers') !== false) {
        include CONTROLLER_DIR . $fileName . '.php';
    } elseif (strpos($class, 'Models') !== false) {
        include MODEL_DIR . $fileName . '.php';
    } elseif (strpos($class, 'Repositories') !== false) {
        include REPOSITORY_DIR . $fileName . '.php';
    }
});
