<?php

namespace Src\Creational\Singleton;

class Connection
{
    public function __construct() {}

    public function query(string $sql): string
    {
        return "Executing query $sql";
    }
}
