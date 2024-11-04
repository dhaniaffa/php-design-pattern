<?php

namespace Src\Creational\Builder\Product;

class SmartphoneBuilder extends ProductBuilder
{

    protected function type(): ProductBuilderInterface
    {
        $this->builder->type = 'Smartphone';

        return $this;
    }
}
