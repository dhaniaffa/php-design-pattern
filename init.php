<?php

const BASEPATH = __DIR__;

spl_autoload_register(function ($class) {
    $namespacePrefix = 'Src\\';

    $baseDir = BASEPATH . '/src/';

    if (strpos($class, $namespacePrefix) === 0) {
        $class = substr($class, strlen($namespacePrefix));
        $file = $baseDir . str_replace('\\', '/', $class) . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            throw new \Exception('Class ' . $class . ' not found.');
        }
    }
});
