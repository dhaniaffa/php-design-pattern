<?php

namespace Src\Creational\Builder\Product;

class LaptopBuilder extends ProductBuilder
{
    protected function type(): ProductBuilderInterface
    {
        $this->builder->type = 'Laptop';

        return $this;
    }
}
