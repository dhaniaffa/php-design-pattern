<?php

namespace Src\Creational\Prototype\Product;

use Src\Creational\Prototype\Product\Prototype\Product;

class Laptop extends Product
{
    public function __construct(int $id = 2, string $name = 'Laptop', string $description = 'Laptop', int $price = 2000)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
    }
}
