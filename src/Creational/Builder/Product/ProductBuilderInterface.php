<?php

namespace Src\Creational\Builder\Product;

interface ProductBuilderInterface
{
    public function name(string $name): ProductBuilderInterface;

    public function price(int $price): ProductBuilderInterface;

    public function brand(string $brand): ProductBuilderInterface;

    public function description(string $description): ProductBuilderInterface;

    public function build(): object;
}
