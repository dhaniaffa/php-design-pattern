<?php

namespace Src\Creational\Builder\Product;

use stdClass;

class ProductBuilder implements ProductBuilderInterface
{
    protected $builder;

    public function __construct()
    {
        $this->builder = new stdClass();

        $this->type();
    }

    public function name(string $name): ProductBuilderInterface
    {
        $this->builder->name = $name;

        return $this;
    }

    public function price(int $price): ProductBuilderInterface
    {
        $this->builder->price = $price;

        return $this;
    }

    public function brand(string $brand): ProductBuilderInterface
    {
        $this->builder->brand = $brand;

        return $this;
    }

    public function description(string $description): ProductBuilderInterface
    {
        $this->builder->description = $description;

        return $this;
    }

    protected function type(): ProductBuilderInterface
    {
        $this->builder->type = 'Product';

        return $this;
    }

    public function build(): object
    {
        return $this->builder;
    }
}
