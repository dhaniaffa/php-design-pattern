<?php

namespace Src\Creational\Prototype\Product;

use Src\Creational\Prototype\Product\Prototype\Product;

class Smartphone extends Product
{
    public function __construct(int $id = 1, string $name = 'Smartphone', string $description = 'Smartphone', int $price = 1000)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
    }
}
