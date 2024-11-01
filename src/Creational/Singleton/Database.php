<?php

namespace Src\Creational\Singleton;

class Database
{
    private static $instance = null;

    public function __construct() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query(string $sql): string
    {
        return "Executing query $sql";
    }
}
