<?php

namespace Src\Creational\Prototype\Product;

use Src\Creational\Prototype\Product\Prototype\Product;

class Cart
{
    private array $products;

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
