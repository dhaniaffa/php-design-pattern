<?php

use Src\Creational\Singleton\Database;

require_once __DIR__ . '/../../init.php';

/**
 * Example Singleton Pattern
 * @see \Src\Creational\Singleton\Database
 * @see \Src\Creational\Singleton\Connection
 */
describe('Example Singleton Pattern', function () {
    it('should be same instance when initialize class Database', function () {
        $db1 = Database::getInstance();
        $db2 = Database::getInstance();

        expect($db1 === $db2)->toBeTrue();
    });

    it('should be different instance when initialize class Connection', function () {
        $connection1 = new Database();
        $connection2 = new Database();

        expect($connection1 === $connection2)->toBeFalse();
    });
});
