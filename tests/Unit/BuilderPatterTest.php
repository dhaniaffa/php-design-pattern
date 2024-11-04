<?php

use Src\Creational\Builder\Product\LaptopBuilder;
use Src\Creational\Builder\Query\MysqlQueryBuilder;
use Src\Creational\Builder\Query\PostgresQueryBuilder;

require_once "./init.php";

/**
 * Example Builder Pattern For SQL Query
 * 
 * @see \Src\Creational\Builder\Query\MysqlQueryBuilder
 * @see \Src\Creational\Builder\Query\PostgresQueryBuilder
 */
describe('Example Builder Pattern 1 - Query', function () {
    it('should be return mysql query', function () {
        $db = new MysqlQueryBuilder();

        $query = $db->select('users', ['username', 'email'])
            ->where("username", "john_doe")
            ->where("email", "john@doe.example")
            ->limit(0, 10)
            ->get();

        expect($query)->toBe("SELECT username, email FROM users WHERE username = 'john_doe' AND email = 'john@doe.example' LIMIT 0, 10;");
    });

    it('should be return postgres query', function () {
        $db = new PostgresQueryBuilder();
        $query = $db->select('users', ['username', 'email'])
            ->limit(0, 10)
            ->get();

        expect($query)->toBe("SELECT username, email FROM users LIMIT 0 OFFSET 10;");
    });
});

/**
 * Example Builder Pattern For Product
 * @see \Src\Creational\Builder\Product\LaptopBuilder
 */
describe('Example Builder Pattern 2 - Product', function () {
    it("should be return laptop object", function () {
        $product = new LaptopBuilder();

        $laptop = $product->name('Asos RNG Strike')
            ->brand('Asos')
            ->description('Asos RNG Strike Laptop With 8 GB RAM AND 512 GB SSD')
            ->price(1000)
            ->build();

        expect($laptop)->toHaveProperties([
            'name' => 'Asos RNG Strike',
            'brand' => 'Asos',
            'description' => 'Asos RNG Strike Laptop With 8 GB RAM AND 512 GB SSD',
            'price' => 1000
        ]);
    });
});
